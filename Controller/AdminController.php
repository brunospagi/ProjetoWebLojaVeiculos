<?php


class AdminController{

    public static function getIndexAdmin()
    {
        include 'View/pages/admin/_index_admin.php';
    }

    public static function getLoginAdmin()
    {
       
        if(isset($_GET['success']) && $_GET['success'] == 'false')
        {
        echo '<script>alert("Usuario ou Senha Incorretos!!");</script>';
        }
        include 'View/pages/admin/_login_admin.php';
    }
    
    public static function formUsuario()
    {
        if(isset($_GET['success']) && $_GET['success'] == 'false')
        {
        echo '<script>alert("Erro ao Carregar Os Dados Preencher Novamente!!");</script>';
        }elseif(isset($_GET['success']) && $_GET['success'] == 'true')
        {
        echo '<script>alert("Usuario Cadastrado com Sucesso!!");</script>';    
        }elseif(isset($_GET['success']) && $_GET['success'] == 'duplicado')
        {
        echo '<script>alert("Um dos Campos Já Pertence a outro Usuario Tente Novamente");</script>';     
        }elseif(isset($_GET['success']) && $_GET['success'] == 'update')
        {
        echo '<script>alert("Usuario Atulizado Com Sucesso!!");</script>';     
        }
        
        $model = new LoginModel();
        $model->listarUsuario();
        include 'View/pages/admin/_login_criar_admin.php';
    }

    public static function saveUsuario()
    {
        if($_POST['nome'] != '' && $_POST['cpf'] != '')
        {
            $salt = '123';
            $senha = sha1($_POST['senha'].$salt);

         
            $model = new LoginModel();
            $model->id = $_POST['id'];
            $model->senha = $senha;
            $model->nome = strtoupper($_POST['nome']);
            $model->email = strtoupper($_POST['email']);
            $model->cpf = strtoupper($_POST['cpf']);
            $model->tipo = strtoupper($_POST['tipo']);
            $model->criarUsuario(); 
            header("Location: /admin/usuarios?success=".$model->resposta."");
        }
        else
        {
            header("Location: /admin/usuarios?success=false ");
        }
        
        
    }

    public static function logarUsuario()
    {
        $salt = '123';
        $senha = sha1($_POST['senha'].$salt);
        $model = new LoginModel();
        $model->email = strtoupper($_POST['email']);
        $model->senha = $senha;
        $model->logarSistama();
    }

    public static function logoutUsuario()
    {
        session_start();
        unset($_SESSION["Email"]);
        unset($_SESSION["Tipo"]);
        unset($_SESSION["Nome"]);
        header("Location: /admin/login ");
    }

    public static function deleteUsuario()
    {   
        $model = new LoginModel();
        $model->deleteUsuario((int)$_GET['id']);
        echo '<script>alert("Usuario foi Deletado com Sucesso!!");</script>';
        header("Location: /admin/usuarios ");
    }

    public static function updateUsuario()
    {
        $model = new LoginModel();
        $models = $model->selectById((int)$_GET['id']);
        include 'View/pages/admin/_edit_usuarios_admin.php';
    }
 
}
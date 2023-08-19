<?php

class ClienteController{

    public static function formCliente()
    {       
        if(isset($_GET['success']) && $_GET['success'] == 'false')
        {
        echo '<script>alert("Erro ao Carregar Os Dados Preencher Novamente!!");</script>';
        }elseif(isset($_GET['success']) && $_GET['success'] == 'true')
        {
        echo '<script>alert("Cliente Cadastrado com Sucesso!!");</script>';    
        }elseif(isset($_GET['success']) && $_GET['success'] == 'duplicado')
        {
        echo '<script>alert("Um dos Campos Já Pertence a outro Cliente Tente Novamente");</script>';     
        }elseif(isset($_GET['success']) && $_GET['success'] == 'update')
        {
        echo '<script>alert("Cliente Atulizado Com Sucesso!!");</script>';     
        }

        include 'View/pages/admin/_cliente_criar_admin.php';
    }

    public static function saveCliente()
    {

       $model = new ClienteModel();
       $model->nome = strtoupper($_POST['nome']);
       $model->email = strtoupper($_POST['email']);
       $model->cpf = $_POST['cpf'];
       $model->telefone = $_POST['telefone'];
       $model->cep = $_POST['cep'];
       $model->rua = strtoupper($_POST['rua']);
       $model->numero = $_POST['numero'];
       $model->complemento = strtoupper($_POST['complemento']);
       $model->bairro = strtoupper($_POST['bairro']);
       $model->cidade = strtoupper($_POST['cidade']);
       $model->estado = strtoupper($_POST['estado']);
       $model->insert();

       header("Location: /admin/usuarios?success=".$model->resultado."");
        
    }

    public static function updateCliente()
    {
        
    }
}
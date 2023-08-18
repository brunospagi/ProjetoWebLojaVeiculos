<?php 


class VeiculosController{


    public static function list()
    {   
        if(isset($_GET['success']) && $_GET['success'] == 'true'){ 
            echo '<script>alert("Veiculo Cadastrado com Sucesso!!");</script>';
        }elseif (isset($_GET['success']) == 'false') {
            echo '<script>alert("Revisar as Informações não Foi Possivel Realizar o Cadastro do veiculo");</script>';
        };

            $model = new VeiculosModel();
            $model->getAllRows();
        include 'View/pages/admin/_listar_veiculos_admin.php';
    }


    public static function save()
    {
        $model = new VeiculosModel();

        if(empty($_FILES['pic'])){
        $resposta = "true";
        $model->id = $_POST['Id'];
        $model->placa = strtoupper($_POST['Placa']);
        $model->chassi = strtoupper($_POST['Chassi']);
        $model->cor = strtoupper($_POST['Cor']);
        $model->marca = strtoupper($_POST['Marca']);
        $model->modelo = strtoupper($_POST['Modelo']);
        $model->anofabricacao = $_POST['Ano_Fabricacao'];
        $model->anomodelo = $_POST['Ano_Modelo'];
        $model->valorentrada = $_POST['Valor_Entrada'];
        $model->valorvenda = $_POST['Valor_Venda'];
        $model->publicadosite = $_POST['publicadosite'];
        $model->km = $_POST['Km'];
        $model->combustivel = $_POST['Combustivel'];
        $model->descricao = $_POST['Descricao'];
        $model->save();
        header('Location: ' . '/admin/veiculos' . '?success='.$resposta.'');
    }
        
        if(isset($_FILES['pic'])){
            $extensao = strtolower(substr($_FILES['pic']['name'], -4)); //pega a extensao do arquivo
            $novo_nome = md5(time()) . '.'.$extensao; //define o nome do arquivo
            $diretorio = "./View/uploads/veiculos/"; //define o diretorio para onde enviaremos o arquivo
        }

        if ($extensao !== ".png" && $extensao !== ".jpg" && $extensao !== "jpeg" && $extensao !== "webp") {
            $resposta = "false";
            header('Location: ' . '/admin/veiculos' . '?success='.$resposta.'');
        } else {
            $resposta = "true";
            move_uploaded_file($_FILES['pic']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
            $model->imagem = $diretorio.$novo_nome;
            $model->id = $_POST['Id'];
            $model->placa = strtoupper($_POST['Placa']);
            $model->chassi = strtoupper($_POST['Chassi']);
            $model->cor = strtoupper($_POST['Cor']);
            $model->marca = strtoupper($_POST['Marca']);
            $model->modelo = strtoupper($_POST['Modelo']);
            $model->anofabricacao = $_POST['Ano_Fabricacao'];
            $model->anomodelo = $_POST['Ano_Modelo'];
            $model->valorentrada = $_POST['Valor_Entrada'];
            $model->valorvenda = $_POST['Valor_Venda'];
            $model->publicadosite = $_POST['publicadosite'];
            $model->km = $_POST['Km'];
            $model->combustivel = $_POST['Combustivel'];
            $model->descricao = $_POST['Descricao'];
            $model->dataentrada = date('Y-m-d H:i:s');
            $model->save();
            header('Location: ' . '/admin/veiculos' . '?success='.$resposta.'');
    }
    }
    public static function formEdit()
    {
        $model = new VeiculosModel();
        $models = $model->selectById($_GET['id']);
        include 'View/pages/admin/_edit_veiculos_admin.php';
    }
    public static function delete()
    {
        $model = new VeiculosModel();
        $model->delete((int)$_GET['id']);
        echo '<script>alert("Veiculo foi Deletado com Sucesso!!");</script>';
        header("Location: /admin/veiculos ");
    }
}
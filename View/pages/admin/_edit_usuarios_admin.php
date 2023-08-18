<?php 
 foreach($models as $item){
 };

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="../../View/assets/admin/js/init.js"></script>
    <script src="../../View/assets/admin/js/jquery.maskMoney.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>Editar Usuario</title>
</head>
<body>
    <div class="container">
        <form class="col s12" method="post" action="/admin/usuarios/salvar" enctype="multipart/form-data">
            <input type="text" name="id"  value="<?=$item->Id?>" hidden>
            <div class="row">
                <div class="input-field col s3">
                    <input placeholder="Digite o Nome" value="<?=$item->Nome?>" name="nome" type="text" class="validate">
                    <label for="first_name">Nome:</label>
                </div>
                <div class="input-field col s3">
                    <input placeholder="Digite a Marca" value="<?=$item->Cpf?>" name="cpf" id="cpf" type="text" class="validate">
                    <label for="first_name">Cpf:</label>
                </div>
                <div class="input-field col s3">
                    <input placeholder="Digite o Modelo" value="<?=$item->Email?>" name="email" type="text" class="validate">
                    <label for="first_name">Email:</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s3">
                    <input placeholder="Digite a Cor" value="" name="senha" type="text" class="validate">
                    <label for="first_name">Senha:</label>
                </div>
                <div class="input-field col s3">
                    <select class="browser-default" name="tipo">
                        <option value="<?=$item->Tipo?>">Atual Tipo <?=$item->Tipo?> </option>
                        <option value="admin">Admin</option>
                        <option value="gerente">Gerente</option>
                        <option value="usuario">Usuario</option>
                    </select>
                </div>
             
            <div class="row">
                <div class="col s12">
                    <button class="btn waves-effect waves-light" type="submit" name="action">CADASTRAR
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
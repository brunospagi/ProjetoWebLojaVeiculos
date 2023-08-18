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
    <title>Editar Veiculo</title>
</head>
<body>
    <div class="container">
        <form class="col s12" method="post" action="/admin/veiculos/salvar" enctype="multipart/form-data">
            <input type="text" name="Id"  value="<?=$item->Id?>" hidden>
            <div class="row">
                <div class="input-field col s3">
                    <input placeholder="Ex: BBQ7A10" value="<?=$item->Placa?>" name="Placa" id="placa" type="text" class="validate">
                    <label for="first_name">Placa:</label>
                </div>
                <div class="input-field col s3">
                    <input placeholder="Digite o Chassi" value="<?=$item->Chassi?>" name="Chassi" type="text" class="validate">
                    <label for="first_name">Chassi:</label>
                </div>
                <div class="input-field col s3">
                    <input placeholder="Digite a Marca" value="<?=$item->Marca?>" name="Marca" type="text" class="validate">
                    <label for="first_name">Marca:</label>
                </div>
                <div class="input-field col s3">
                    <input placeholder="Digite o Modelo" value="<?=$item->Modelo?>" name="Modelo" type="text" class="validate">
                    <label for="first_name">Modelo:</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s3">
                    <input placeholder="Digite a Cor" value="<?=$item->Cor?>" name="Cor" type="text" class="validate">
                    <label for="first_name">Cor:</label>
                </div>
                <div class="input-field col s3">
                    <input placeholder="Digite o Ano Modelo" value="<?=$item->Ano_Modelo?>" name="Ano_Modelo" type="text" class="validate">
                    <label for="first_name">Ano Modelo:</label>
                </div>
                <div class="input-field col s3">
                    <input placeholder="Digite o Ano de Fabricação" value="<?=$item->Ano_Fabricacao?>" name="Ano_Fabricacao" type="text" class="validate">
                    <label for="first_name">Ano Fabricação:</label>
                </div>
                <div class="col s3">
                    <label>Combustivel?</label>
                    <select class="browser-default" name="Combustivel">
                        <option value="<?=$item->Combustivel?>">Atual <?=$item->Combustivel?></option>
                        <option value="Gasolina">Gasolina</option>
                        <option value="Gnv">GNV</option>
                        <option value="Diesel">Diesel</option>
                        <option value="Flex">Flex</option>
                        <option value="Flex">Eletrico</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s4">
                    <input placeholder="Digite a Kilometragem" value="<?=$item->Km?>" name="Km" type="text" class="validate">
                    <label for="first_name">KM:</label>
                </div>
                <div class="input-field col s4">
                    <input placeholder="Digite o Valor de Entrada"  value="<?=$item->Valor_Venda?>" name="Valor_Venda" id="Valor_Venda" type="text" class="validate">
                    <label for="first_name">Valor de Venda:</label>
                </div>
                <div class="input-field col s4">
                    <input placeholder="Digite o Valor de Entrada" value="<?=$item->Valor_Entrada?>" name="Valor_Entrada" id="Valor_Entrada" type="text" class="validate">
                    <label for="first_name">Valor de Entrada:</label>
                </div>
                <div class="input-field col s4">
                    <input placeholder="Digite a Descricão" value="<?=$item->Descricao?>" name="Descricao" type="text" class="validate">
                    <label for="first_name">Descrição:</label>
                </div>
                <div class="col s4">
                    <label>Disponivel no Site?</label>
                    <select class="browser-default" name="publicadosite">
                        <option value="<?=$item->Publicado_Site?>">Valor Atual <?=$item->Publicado_Site?></option>
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                    </select>
                </div>
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
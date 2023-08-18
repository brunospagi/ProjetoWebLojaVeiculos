<?php 
$titulo = 'Listar Veiculos';
include 'View/layout_admin/head.php';
?>

<div class="container">
    <h1><?= $titulo ?></h1>
    <div>
        <p>Novo Veiculo:</p>
        <button data-target="modal1" class="btn modal-trigger">NOVO</button>
    </div>
    <div class="col s12">
        <table id="myTable" class="display">
            <thead>
                <tr>
                    <th>Imagem</th>
                    <th>Placa</th>
                    <th>Chassi</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Cor</th>
                    <th>Ano Fabricação</th>
                    <th>Ano Modelo</th>
                    <th>Valor Custo</th>
                    <th>Valor de Venda</th>
                    <th>Data Entrada</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($model->rows as $item): ?>
                <tr>
                    <td><img width="90" height="90" src="<?= '.'. $item->Imagem?>"></td>
                    <td><?= $item->Placa?></td>
                    <td><?= $item->Chassi?></td>
                    <td><?= $item->Marca?></td>
                    <td><?= $item->Modelo?></td>
                    <td><?= $item->Cor?></td>
                    <td><?= $item->Ano_Fabricacao?></td>
                    <td><?= $item->Ano_Modelo?></td>
                    <td><?= $item->Valor_Entrada?></td>
                    <td><?= $item->Valor_Venda?></td>
                    <td><?= $item->Data_Entrada?></td>
                    <td><button class="form-control btn btn-success" type="button"
                            onclick="window.open('/admin/veiculos/edit?id=<?= $item->Id?>', 'Cadastrar Veículo', 'height='+(window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight)+',width='+(window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth))">
                            Editar
                        </button><?php if($tipo != 'ADMIN'){
                          '<a href="#" onClick="apagar(0)" class="waves-effect red btn" disabled >Excluir</a>';
                        } else {
                           echo  '<a href="#" onClick="apagar('.$item->Id.')" class="waves-effect red btn">Excluir</a>';
                        }
                        ?>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
    <!-- Modal Structure -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <div class="row">
                <form class="col s12" method="post" action="/admin/veiculos/salvar" enctype="multipart/form-data">
                    <div class="row">
                        <div class="input-field col s3">
                            <input placeholder="Ex: BBQ7A10" name="Placa" id="placa" type="text" class="validate">
                            <label for="first_name">Placa:</label>
                        </div>
                        <div class="input-field col s3">
                            <input placeholder="Digite o Chassi" name="Chassi" id="chassi" type="text" class="validate">
                            <label for="first_name">Chassi:</label>
                        </div>
                        <div class="input-field col s3">
                            <input placeholder="Digite a Marca" name="Marca" type="text" class="validate">
                            <label for="first_name">Marca:</label>
                        </div>
                        <div class="input-field col s3">
                            <input placeholder="Digite o Modelo" name="Modelo" type="text" class="validate">
                            <label for="first_name">Modelo:</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s3">
                            <input placeholder="Digite a Cor" name="Cor" type="text" class="validate">
                            <label for="first_name">Cor:</label>
                        </div>
                        <div class="input-field col s3">
                            <input placeholder="Digite o Ano Modelo" name="Ano_Modelo" type="text" class="validate">
                            <label for="first_name">Ano Modelo:</label>
                        </div>
                        <div class="input-field col s3">
                            <input placeholder="Digite o Ano de Fabricação" name="Ano_Fabricacao" type="text"
                                class="validate">
                            <label for="first_name">Ano Fabricação:</label>
                        </div>
                        <div class="col s3">
                            <label>Combustivel?</label>
                            <select class="browser-default" name="Combustivel">
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
                            <input placeholder="Digite a Kilometragem" name="Km" type="text" class="validate">
                            <label for="first_name">KM:</label>
                        </div>
                        <div class="input-field col s4">
                            <input placeholder="Digite o Valor de Entrada" name="Valor_Venda" id="Valor_Venda"
                                type="text" class="validate">
                            <label for="first_name">Valor de Venda:</label>
                        </div>
                        <div class="input-field col s4">
                            <input placeholder="Digite o Valor de Entrada" id="Valor_Entrada" name="Valor_Entrada"
                                type="text" class="validate">
                            <label for="first_name">Valor de Entrada:</label>
                        </div>
                        <div class="input-field col s4">
                            <input placeholder="Digite a Descricão" name="Descricao" type="text" class="validate">
                            <label for="first_name">Descrição:</label>
                        </div>
                        <div class="col s4">
                            <label>Disponivel no Site?</label>
                            <select class="browser-default" name="publicadosite">
                                <option value="sim">Sim</option>
                                <option value="nao">Não</option>
                            </select>
                        </div>
                        <div class="col s4">
                            <label for="conteudo">Enviar imagem:</label>
                            <input type="file" name="pic" accept="image/*">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <button class="btn waves-effect waves-light" type="submit" name="action">CADASTRAR
                                <i class="material-icons right">send</i>
                            </button>
                            <div class="modal-footer">
                                <a href="#!" class="modal-close waves-effect waves-green btn-flat">FECHAR</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

<?php 
include 'View/layout_admin/footer.php';
?>
<?php 
$titulo = 'Listar Veiculos';
include 'View/layout_admin/head.php';
if($tipo != 'ADMIN'){
    header('location: /admin');
}
?>

<div class="container">
    <h1>Listagem de Usuarios</h1>
    <br>
    <p>Criar Usuario:</p>
    <button data-target="criarusuario" class="btn modal-trigger">NOVO</button>
    <table id="myTable" class="display">
        <thead>
            <tr>
                <th>Nome:</th>
                <th>Email:</th>
                <th>Cpf:</th>
                <th>Tipo:</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($model->rows as $item): ?>
            <tr>
                <td><?=$item->Nome?></td>
                <td><?=$item->Email?></td>
                <td><?=$item->Cpf?></td>
                <td><?=$item->Tipo?></td>
                <td><button class="form-control btn btn-success" type="button"
                        onclick="window.open('/admin/usuarios/edit?id=<?= $item->Id?>', 'Cadastrar Veículo', 'height='+(window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight)+',width='+(window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth))">
                        Editar
                    </button><?php if($tipo != 'ADMIN'){
                          '<a href="#" onClick="apagaruser(0)" class="waves-effect red btn" disabled >Excluir</a>';
                        } else {
                           echo  '<a href="#" onClick="apagaruser('.$item->Id.')" class="waves-effect red btn">Excluir</a>';
                        }
                        ?>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>

    <div id="criarusuario" class="modal">
        <div class="modal-content">
            <div class="row">
                <form method="post" action="/admin/usuarios/salvar">
                    <div class="input-field col s6">
                        <input placeholder="Digite o Nome" name="nome" id="first_name" type="text" class="validate">
                        <label for="Nome">Nome:</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="email" type="email" name="email" class="validate">
                        <label for="email">Email:</label>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input placeholder="Digite o CPF" name="cpf" id="cpf" type="text" class="validate">
                            <label for="cpf">CPF:</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="email" type="password" name="senha" class="validate">
                            <label for="email">Senha:</label>
                        </div>
                        <div class="col s3">
                            <label>Tipo Usuario</label>
                            <select class="browser-default" name="tipo">
                                <option value="admin">Administrador</option>
                                <option value="gerente">Gerente</option>
                                <option value="usuario">Funcionario</option>
                            </select>
                        </div>
                    </div>
            </div>
            <button class="btn waves-effect waves-light" type="submit">CADASTRAR
                <i class="material-icons right">send</i>
            </button>
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Fechar</a>
            </div>
        </div>

    </div>
</div>
</form>


<?php 
include 'View/layout_admin/footer.php';
?>
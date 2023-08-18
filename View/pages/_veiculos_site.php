<?php 
$titulo = $item->Marca . ' ' . $item->Modelo;
include 'View/layout_site/head.php';
?>

<h1 style="text-align: center;"><?=$item->Marca?></h1>
<div class="container">
    <div class="row">
        <div class="col s12 m6">
            <img class="materialboxed" width="450" src="<?=$item->Imagem?>">
        </div>
        <div class="col s12 m6">
            <h5><?=$item->Marca . ' ' . $item->Modelo?></h5>
            <h3>R$ <?=$item->Valor_Venda?></h3>
            <a class="waves-effect red btn-large"
                href="https://wa.me/5541999248121?text=Ol%C3%A1+estou+no+site+gostaria+de+informa%C3%A7%C3%B5es+referente+ao+Veiculo%3A+
                <?=$item->Marca . ' '. $item->Modelo . ' ' . $item->Ano_Modelo?>" target=”_blank”>FAZER
                UMA PROPOSTA</a>
            <br>
            <br>
            <a style="text-align: center;" class="waves-effect waves-light btn-large">FINANCIAR!</a>
            <br>
            <br>
            <a class="waves-effect waves-light btn-large">COMPARTILHAR</a>
            <br>
            <br>
            <h5>NOME DA LOJA</h5>
            <br>
            <p>telefone</p>
            <p>Whatsapp</p>
            <p>Endereço</p>
            <hr>
        </div>
        
    </div>
    <div class="row">
        <div class="col s12 m2">
            <div class="card-panel indigo lighten-5">
                <p style="text-align: center;">ANO</p>
                <p style="text-align: center;"><i class="material-icons">date_range</i></p>
                <p style="text-align: center;"><?=$item->Ano_Fabricacao . '/'. $item->Ano_Modelo ?></p>
            </div>
        </div>
        <div class="col s12 m2">
            <div class="card-panel indigo lighten-5">
                <p style="text-align: center;">COR</p>
                <p style="text-align: center;"><i class="material-icons">color_lens</i></p>
                <p style="text-align: center;"><?=$item->Cor?></p>
            </div>
        </div>
        <div class="col s12 m2">
            <div class="card-panel indigo lighten-5">
                <p style="text-align: center;">KM</p>
                <p style="text-align: center;"><i class="material-icons">directions_car</i></p>
                <p style="text-align: center;"><?=$item->Km?></p>
            </div>
        </div>
        <div class="col s12 m2">
            <div class="card-panel indigo lighten-5">
                <p style="text-align: center;">COMBUSTIVEL</p>
                <p style="text-align: center;"><i class="material-icons">local_gas_station</i></p>
                <p style="text-align: center;"><?=$item->Combustivel?></p>
            </div>
        </div>
    </div>
    <div class="row">
        <hr>
        <h6 style="text-align: center;">DESCRIÇÃO</h6>
        <P><?=$item->Descricao?></P>
    </div>
</div>

</div>
<?php
include 'View/layout_site/footer.php';
?>
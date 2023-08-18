<?php 
$titulo = 'Loja';
include 'View/layout_site/head.php';
?>

<div class="carousel carousel-slider">
    <a class="carousel-item" href="#one!"><img
            src="https://cdn.revendamais.com.br/banner/2506/DESKTOOP-FAM%C3%8DLIA1656003348.jpg"></a>
    <a class="carousel-item" href="#two!"><img
            src="https://cdn.revendamais.com.br/banner/2506/1675193642_3a10d5_bannertaxas31676409192.jpg"></a>
    <a class="carousel-item" href="#three!"><img
            src="https://cdn.revendamais.com.br/banner/2506/1656964599_ef20fd_desktooooopinstitucional1657112954.jpg"></a>
    <a class="carousel-item" href="#four!"><img
            src="https://cdn.revendamais.com.br/banner/2506/DESKTOOP-FAM%C3%8DLIA1656003348.jpg"></a>
</div>

<div class="container">
    <h3 style="text-align: center;">ENCONTRE SEU VEÍCULO!</h3>
        <h6 style="text-align: center;">VEJA OS VEÍCULOS SEPARADOS ESPECIALMENTE PARA VOCÊ</h6>
        <h3 style="text-align: center;">VEÍCULOS EM DESTAQUE</h3>
        <br>

        <div class="row">
        <?php foreach($model->rows as $item): ?>        
            <div class="col s12 m3">
                  <div class="card">
                    <div class="card-image">
                       <a href="/veiculo?id=<?= $item->Id?>"> <img
                       width="275" height="225" src="<?php echo (($item->Imagem == '') ? 
                            'https://cdn.revendamais.com.br/FC/2506/5259309_0_M_163356a259.jpeg' : $item->Imagem );  ?>"></a>
                    </div>
                    <div class="card-content">
                        <p><?= $item->Marca . ' ' . $item->Modelo . ' '. $item->Ano_Modelo?></p>
                        <h4 style="font-size: 25px;">R$ <?=$item->Valor_Venda?></h6>
                            <hr>
                            <p>Curitiba - PR <i class="small material-icons">location_on</i>
                                <br>
                                <i class="small material-icons">local_phone
                                </i> icone whatsapp
                            </p>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</div>
<?php
include 'View/layout_site/footer.php';
?>
<?php 


class SiteController {

    public static function getIndex()
    {
        $model = new VeiculosModel();
        $model->getAllRowsIndex();
        include 'View/pages/_index_site.php';
    }

    public static function getSiteProduto()
    {
        $model = new VeiculosModel();
        if(isset($_GET['id']))
        $model = $model->selectByIdVeiculo((int)$_GET['id']);
        foreach($model as $item){
        };
        include 'View/pages/_veiculos_site.php';
    }
}
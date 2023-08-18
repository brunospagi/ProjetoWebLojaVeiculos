<?php

class ClienteController{

    public static function formCliente()
    {       
        include 'View/pages/admin/_cliente_criar_admin.php';
    }

    public static function saveCliente()
    {

        var_dump($_POST);

    }

    public static function updateCliente()
    {
        
    }
}
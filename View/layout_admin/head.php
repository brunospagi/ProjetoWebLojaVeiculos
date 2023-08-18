<?php
session_start();
if($_SESSION['Email'] != true)
{
    header('location: /admin/login');
}
$logado = $_SESSION['Email'];
$nome = $_SESSION['Nome'];
$tipo = $_SESSION['Tipo'];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title><?php
      if(isset($titulo)) {
        echo $titulo . ' | ';
      }  
    ?>Spagi Sistemas</title>
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../View/assets/site/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <link href="../View/assets/site/css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>
    <nav>
        <nav>
            <div class="nav-wrapper light-blue">
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="left hide-on-med-and-down">
                    <li><a href="/admin">HOME</a></li>
                    <li><a href="/admin/clientes">CLIENTES</a></li>
                    <li><a href="/admin/veiculos">VEICULOS</a></li>
                    <li><?php 
                        if($tipo != 'ADMIN'){
                            echo '<a href="/admin/usuarios" class="btn-flat disabled">USUARIOS</a>';
                        }else{
                            echo '<a href="/admin/usuarios" >USUARIOS</a>';
                        }?></li>
                    <li><a class='dropdown-trigger btn' href='#' data-target='dropdown1'>Bem Vindo <?=$nome?></a>
                    </li>
                </ul>
            </div>
        </nav>
        <ul class="sidenav" id="mobile-demo">
            <li><a href="/admin">HOME</a></li>
            <li><a href="/admin/clientes">CLIENTES</a></li>
            <li><a href="/admin/veiculos">VEICULOS</a></li>
            <li><?php 
            if($tipo != 'ADMIN'){
                echo '<a href="/admin/usuarios" class="btn-flat disabled" >USUARIOS</a>';
            }else{
                echo '<a href="/admin/usuarios" >USUARIOS</a>';
            }?></li>
    </nav>
    <ul id='dropdown1' class='dropdown-content'>
        <li>
            <p>Nivel Acesso:<?=$tipo?></p>
        </li>
        <li><a href="#!">Alterar</a></li>
        <li><a href="/admin/usuarios/sair">Sair</a></li>
    </ul>
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
    <link href="../View/assets/site/css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body class="lime lighten-5">

    <nav class="red darken-4 nav-extended " role="navigation">
        <div class="nav-wrapper "><a id="logo-container" href="#" class="brand-logo">EX SISTEMA </a>
            <ul class="right hide-on-med-and-down">
                <li><a href="/">HOME</a></li>
                <li><a href="#">ESTOQUE</a></li>
                <li><a href="#">CONSIGNAÇÃO</a></li>
                <li><a href="#">FINANCIAMENTO</a></li>
                <li><a href="#">QUEM SOMOS</a></li>
                <li><a href="#">LOCALIZAÇÃO</a></li>
                <li><a href="#">CONTATO</a></li>
            </ul>
            <ul id="nav-mobile" class="sidenav">
                <li><a href="/">HOME</a></li>
                <li><a href="#">ESTOQUE</a></li>
                <li><a href="#">CONSIGNAÇÃO</a></li>
                <li><a href="#">FINANCIAMENTO</a></li>
                <li><a href="#">QUEM SOMOS</a></li>
                <li><a href="#">LOCALIZAÇÃO</a></li>
                <li><a href="#">CONTATO</a></li>
            </ul>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
        <div class="nav-content">
            <div class="nav-wrapper">
                <ul class="right hide-on-med-and-down">
                    <li></li>
                    <li><a>Instagram</a></li>
                    <li><a>Facebook</a></li>
                    <li><a>Outros</a></li>
                </ul>
            </div>
        </div>
    </nav>
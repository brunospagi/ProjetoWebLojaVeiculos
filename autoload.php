<?php 

spl_autoload_register(function ($nome_da_classe) {

    $classe_controller = 'Controller/' . $nome_da_classe . '.php';
    $classe_model = 'Model/' . $nome_da_classe . '.php';
    $classe_DAO = 'DAO/' . $nome_da_classe . '.php'; 

    if(file_exists($classe_controller))
    {
        include $classe_controller;
    }elseif(file_exists($classe_model))
    {
        include $classe_model;
    }elseif(file_exists($classe_DAO))
    {
        include $classe_DAO;
    }
});


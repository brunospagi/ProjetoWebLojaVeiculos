<?php 
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($url)
{
    case '/':
        SiteController::getIndex();
    break;
    case '/veiculo':
        SiteController::getSiteProduto();
    break;
    case '/admin':
        AdminController::getIndexAdmin();
        break;
    case '/admin/veiculos':
        VeiculosController::list();
    break;
    case '/admin/veiculos/salvar':
        VeiculosController::save();
        break;
    case '/admin/veiculos/excluir':
        VeiculosController::delete();
       break;
    case '/admin/veiculos/edit':
        VeiculosController::formEdit();
        break;
    case '/admin/usuarios':
        AdminController::formUsuario();
        break;
    case '/admin/usuarios/salvar':
        AdminController::saveUsuario();
        break;
    case '/admin/usuarios/edit':
        AdminController::updateUsuario();
        break;
    case '/admin/usuarios/excluir':
        AdminController::deleteUsuario();
        break;
    case '/admin/usuarios/logar':
        AdminController::logarUsuario();
        break;
    case '/admin/usuarios/sair':
        AdminController::logoutUsuario();
        break;  
    case '/admin/clientes':
        ClienteController::formCliente();
        break; 
    case '/admin/clientes/salvar':
        ClienteController::saveCliente();
        break;            
    case '/admin/login':
        AdminController::getLoginAdmin();
        break;
    default:
        echo "404 NOTFOUND";    
}




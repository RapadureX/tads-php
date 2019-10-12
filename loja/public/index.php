<?php
require __DIR__."\..\autoload.php";
use Ifnc\Tads\Controller\ListarProdutosController;

switch ($_SERVER['PATH_INFO']) {
    case '/listar-produtos':
        $controller = new ListarProdutosController();
        $controller->request();
        break;
    case '/adicionar-produto':
        require 'adicionar-produto.php';
        break;
    default:
        echo "Not Found - 404";
        break;

}
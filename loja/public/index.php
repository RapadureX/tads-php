<?php
switch ($_SERVER['PATH_INFO']) {
    case '/listar-produtos':
        require 'listar-produtos.php';
        break;
    case '/adicionar-produto':
        require 'adicionar-produto.php';
        break;
    default:
        echo "Not Found - 404";
        break;

}
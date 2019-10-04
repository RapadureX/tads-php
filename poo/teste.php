<?php
require "autoload.php";
use Ifnc\Tads\Gateway\ProdutoGateway;


    $conn = new \PDO("sqlite:".__DIR__."/database/tads.db");

    ProdutoGateway::setConnection($conn);
    $gw = new ProdutoGateway();
    var_dump($gw->all());
?>
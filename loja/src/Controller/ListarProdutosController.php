<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Gateway\ProdutoGateway;
use PDO;

class ListarProdutosController
{
    public $produtoGateway;

    public function __construct()
    {
        $conn = new PDO("sqlite:".__DIR__."/../../database/tads.db");
        ProdutoGateway::setConnection($conn);
        $this->produtoGateway = new ProdutoGateway();
    }

    public function request(): void
    {
        $produtos = $this->produtoGateway->all();
        $titulo = 'Lista de Produtos';
        require __DIR__ . '/../View/listar-produtos.php';
    }

}
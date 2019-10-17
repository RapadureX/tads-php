<?php

namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Gateway\ProdutoGateway;
use Ifnc\Tads\Helper\Connection;

class ListarProdutosController implements IController
{
    public $produtoGateway;

    public function __construct()
    {
        try{
           ProdutoGateway::setConnection(Connection::open());
           $this->produtoGateway = new ProdutoGateway();
        }catch (\Exception $e){
            echo $e->getMessage();
        }

    }

    public function request(): void
    {
        $produtos = $this->produtoGateway->all();
        $titulo = 'Lista de Produtos';
        require __DIR__."/../../View/cabecalho.php";
        require __DIR__."/../../View/listar-produtos.php";
        require __DIR__ . "/../../View/rodape.php";
    }

}
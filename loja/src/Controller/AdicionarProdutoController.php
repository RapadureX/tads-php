<?php


namespace Ifnc\Tads\Controller;

use Ifnc\Tads\Entity\Produto;
use Ifnc\Tads\Gateway\ProdutoGateway;
use Ifnc\Tads\Helper\Connection;
use PDO;

class AdicionarProdutoController implements IController
{
    public $produtoGateway;

    public function __construct()
    {
        try {
            ProdutoGateway::setConnection(Connection::open());
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
        $this->produtoGateway = new ProdutoGateway();
    }

    public function request(): void
    {
        $produto = new Produto();
        $produto->descricao = $_POST['descricao'];
        $produto->estoque = $_POST['estoque'];
        $produto->preco_custo = $_POST['preco_custo'];
        $produto->preco_venda = $_POST['preco_venda'];
        $produto->codigo_barras =  $_POST['codigo_barras'];
        $produto->data_cadastro = date('Y-m-d');
        $produto->origem =  $_POST['origem'];

        $this->produtoGateway->create($produto);
        header('Location: /listar-produtos', true, 302);
    }

}
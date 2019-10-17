<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Gateway\ProdutoGateway;
use Ifnc\Tads\Helper\Connection;

class EditarProdutoFormController implements IController
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
        $id = $_GET["id"];
        $produto = $this->produtoGateway->find($id)[0];
        $titulo = "Editar Produto";
        require __DIR__."/../../View/cabecalho.php";
        require __DIR__ . "/../../View/editar-produto-form.php";
        require __DIR__ . "/../../View/rodape.php";
    }
}
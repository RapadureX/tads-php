<?php


namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Gateway\ProdutoGateway;
use Ifnc\Tads\Helper\Connection;

class ApagarProdutoController implements IController
{

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
        $id = $_GET["id"];
        $this->produtoGateway->delete($id);
        header('Location: /listar-produtos', true, 302);
    }
}
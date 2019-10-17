<?php


namespace Ifnc\Tads\Controller;


class AdicionarProdutoFormController implements IController
{

    public function request(): void
    {
        $titulo = "Adicionar Produto";
        require __DIR__."/../../View/cabecalho.php";
        require __DIR__ . "/../../View/adicionar-produto-form.php";
        require __DIR__ . "/../../View/rodape.php";
    }
}
<?php

use Ifnc\Tads\Controller\AdicionarProdutoController;
use Ifnc\Tads\Controller\AdicionarProdutoFormController;
use Ifnc\Tads\Controller\ApagarProdutoController;
use Ifnc\Tads\Controller\EditarProdutoController;
use Ifnc\Tads\Controller\EditarProdutoFormController;
use Ifnc\Tads\Controller\ListarProdutosController;

return [
    '/listar-produtos'=>ListarProdutosController::class,
    '/adicionar-produto-form'=>AdicionarProdutoFormController::class,
    '/adicionar-produto'=>AdicionarProdutoController::class,
    '/apagar-produto'=>ApagarProdutoController::class,
    '/editar-produto-form'=>EditarProdutoFormController::class,
    '/editar-produto'=>EditarProdutoController::class
];

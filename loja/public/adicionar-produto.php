<?php $titulo = 'Adicionar Produto'; include 'cabecalho.php'; ?>
<div class="my-3 p-3 bg-white rounded shadow-sm">
    <form>
        <div class="form-row mb-3">
            <div class="col">
                <input type="text" class="form-control" placeholder="descrição">
            </div>
        </div>
        <div class="form-row mb-3">
            <div class="col">
                <input type="text" class="form-control" placeholder="estoque">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="preco_custo">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="preco_venda">
            </div>
        </div>
        <div class="form-row mb-3">
            <div class="col">
                <input type="text" class="form-control" placeholder="codigo_barras">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="data_cadastro">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="origem">
            </div>
        </div>
        <button class="btn btn-primary">Adicionar</button>
    </form>
</div>
<?php include 'rodape.php'; ?>
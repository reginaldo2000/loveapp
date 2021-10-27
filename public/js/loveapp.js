$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function destroy(id) {
    document.getElementById('idExclusao').value = id;
    $('#dlgExclusao').modal('show');
}

function updateCategoria(id) {
    $.get('/categoria/show/' + id, function (response) {
        categoria = JSON.parse(response);
        document.getElementById('categoriaId').value = categoria.id;
        document.getElementById('categoriaNome').value = categoria.nome;
        $('#dlgEditCategoria').modal('show');
        console.log(categoria);
    });
}

function updateProduto(id) {
    $.get('/produto/show/' + id, function (response) {
        produto = JSON.parse(response);
        document.getElementById('produtoId').value = produto.id;
        document.getElementById('produtoNome').value = produto.nome;
        document.getElementById('produtoEstoque').value = produto.estoque;
        document.getElementById('produtoPrecoCusto').value = getMoney(produto.preco_custo);
        document.getElementById('produtoPrecoVenda').value = getMoney(produto.preco_venda);
        document.getElementById('produtoCategoria').value = produto.categoria_id;
        $('#dlgEditProduto').modal('show');
        console.log(produto);
    });
}

function getMoney(str) {
    return str.toFixed(2).replace('.', ',').replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.');
}
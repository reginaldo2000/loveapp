$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function destroyCategoria(id) {
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
        document.getElementById('produtoNome').value = produto.nome;
        document.getElementById('produtoEstoque').value = produto.estoque;
        document.getElementById('produtoPrecoCusto').value = produto.preco_custo.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
        document.getElementById('produtoPrecoVenda').value = produto.preco_venda.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
        document.getElementById('produtoCategoria').value = produto.categoria_id;
        $('#dlgEditProduto').modal('show');
        console.log(produto);
    });
}
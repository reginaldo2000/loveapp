<div class="modal fade" tabindex="-1" id="dlgEditProduto">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar Produto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('produto.edit') }}" method="post" autocomplete="off">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" id="produtoId" hidden>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-floating mb-3">
                                <input type="text" name="nome" id="produtoNome" class="form-control">
                                <label for="" class="form-label">Nome do Produto:</label>
                                <div class="invalid-feedback">Campo obrigatório.</div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-floating mb-3">
                                <input type="text" name="estoque" id="produtoEstoque" class="form-control">
                                <label for="" class="form-label">Estoque:</label>
                                <div class="invalid-feedback">Campo obrigatório.</div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-floating mb-3">
                                <input type="text" name="preco_custo" id="produtoPrecoCusto" class="form-control">
                                <label for="" class="form-label">Preço de Custo:</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-floating mb-3">
                                <input type="text" name="preco_venda" id="produtoPrecoVenda" class="form-control">
                                <label for="" class="form-label">Preço de Venda:</label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-floating mb-3">
                                
                                <select name="categoria_id" id="produtoCategoria" class="form-control">
                                    <option value="">Seleciona uma categoria</option>
                                    @foreach ($categorias as $c)
                                        <option value="{{ $c->id }}">{{ $c->nome }}</option>
                                    @endforeach
                                </select>
                                <label for="" class="form-label">Categoria:</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        <i class="fa fa-close"></i> 
                        Cancelar
                    </button>
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-edit"></i> 
                        Atualizar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

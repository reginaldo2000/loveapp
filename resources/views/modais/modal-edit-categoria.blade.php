<div class="modal fade" tabindex="-1" id="dlgEditCategoria">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar Categoria</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{ route('categoria.edit') }}" method="post" id="formEditCategoria" class="needs-validation" novalidate>
                @csrf
                @method('PUT')
                <input type="hidden" name="id" id="categoriaId">
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="" class="form-label">Nome da Categoria:</label>
                                <input type="text" name="nomecategoria" id="categoriaNome" class="form-control" required>
                                <div class="invalid-feedback">
                                    Por favor, informe um nome válido.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                        <i class="fa fa-times" aria-hidden="true"></i>
                        Cancelar
                    </button>
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-edit" aria-hidden="true"></i>
                        Editar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

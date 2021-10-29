<div class="modal fade" tabindex="-1" id="dlgNovaCategoria">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nova Categoria</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{ route('categoria.save') }}" method="post" class="needs-validation" novalidate>
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <div class="form-floating">
                                <input type="text" name="nomecategoria" id="" class="form-control" required>
                                <label for="" class="form-label">Nome da Categoria:</label>
                                <div class="invalid-feedback">
                                    Por favor, informe um nome válido.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        <i class="fa fa-times" aria-hidden="true"></i>
                        Cancelar
                    </button>
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-floppy-o" aria-hidden="true"></i>
                        Cadastrar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

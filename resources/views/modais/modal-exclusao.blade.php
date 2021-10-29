<div class="modal fade" tabindex="-1" id="dlgExclusao">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ $modalTitle }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ $modalRoute }}" method="post">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    <input type="text" name="id" id="idExclusao" hidden>
                    <p>{{ $modalText }}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Não
                    </button>
                    <button type="submit" class="btn btn-primary">
                        Sim
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

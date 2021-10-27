@extends('layouts.main', ['pageTitle' => 'Categorias - LoveAPP', 'contentTitle' => 'Lista de Categorias'])

@section('modais')
    @include('modais.modal-nova-categoria')
    @include('modais.modal-edit-categoria')
    @component('modais.modal-exclusao')
        @slot('modalTitle')
            Excluir Categoria
        @endslot
        @slot('modalText')
            Deseja realmente a excluir a categoria?
        @endslot
    @endcomponent
@endsection

@section('loveapp-content')

    @if (session('msgConfirm'))
        @include('components.msg_confirmacao')
    @endif
    <a href="#" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#dlgNovaCategoria">
        <i class="fa fa-plus" aria-hidden="true"></i> Nova Categoria
    </a>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th class="text-center text-uppercase">nome</th>
                    <th class="text-center text-uppercase">modificação</th>
                    <th class="text-center text-uppercase" colspan="2">ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listaCategorias as $c)
                    <tr class="fs-5">
                        <td class="text-center">{{ $c->nome }}</td>
                        <td class="text-center">{{ \Carbon\Carbon::parse($c->updated_at)->format('d/m/Y H:i') }}</td>
                        <td class="text-center">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Editar Categoria"
                                onclick="updateCategoria({{ $c->id }});">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Excluir Categoria"
                                onclick="destroyCategoria({{ $c->id }});">
                                <i class="fa fa-trash text-danger" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

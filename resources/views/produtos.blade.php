@extends('layouts.main', ['contentTitle' => 'Lista de Produtos', 'pageTitle' => 'Produtos - Love APP'])

@section('modais')
    @include('modais.modal-novo-produto')
    @include('modais.modal-edit-produto')
    @component('modais.modal-exclusao')
        @slot('modalTitle')
            Excluir Produto
        @endslot
        @slot('modalText')
            Deseja realmente excluir o produto?
        @endslot
        @slot('modalRoute')
            /produto/delete
        @endslot
    @endcomponent
@endsection

@section('loveapp-content')

    @if (session('msgConfirm'))
        @include('components.msg_confirmacao')
    @endif

    <a href="#" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#dlgNovoProduto">
        <i class="fa fa-plus" aria-hidden="true"></i>
        Novo Produto
    </a>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th class="text-uppercase text-center">nome</th>
                    <th class="text-uppercase text-center">categoria</th>
                    <th class="text-uppercase text-center">estoque</th>
                    <th class="text-uppercase text-center">preço custo</th>
                    <th class="text-uppercase text-center">preço venda</th>
                    <th class="text-uppercase text-center">status</th>
                    <th class="text-uppercase text-center" colspan="3">ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listaProdutos as $p)
                    <tr class="fs-5">
                        <td class="text-uppercase text-center">{{ $p->nome }}</td>
                        <td class="text-uppercase text-center">{{ $p->categoria->nome }}</td>
                        <td class="text-center">{{ $p->estoque }}</td>
                        <td class="text-center">{{ number_format($p->preco_custo, 2, ',', '.') }}</td>
                        <td class="text-center">{{ number_format($p->preco_venda, 2, ',', '.') }}</td>
                        <td class="text-center {{ $p->status == 1 ? 'text-success' : 'text-danger' }}">
                            {{ $p->status == 1 ? 'ATIVO' : 'INATIVO' }}</td>
                        <td class="text-center">
                            <a href="{{ route('produto.change', $p->id) }}">
                                <i class="fa fa-refresh text-dark" aria-hidden="true"></i>
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="#" onclick="updateProduto({{ $p->id }});">
                                <i class="fa fa-edit text-dark" aria-hidden="true"></i>
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="#" onclick="destroy({{ $p->id }});">
                                <i class="fa fa-trash text-danger" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

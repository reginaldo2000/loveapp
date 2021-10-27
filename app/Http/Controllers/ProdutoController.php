<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listaProdutos = Produto::orderBy('nome')->get();
        $categorias = Categoria::orderBy('nome')->get();
        $params = [
            'listaProdutos' => $listaProdutos,
            'categorias' => $categorias
        ];
        return view('produtos', $params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produto = new Produto();
        $produto->nome = $request->nome;
        $produto->estoque = $request->estoque;
        $produto->preco_custo = str_replace(',', '.', str_replace('.', '', $request->preco_custo));
        $produto->preco_venda = str_replace(',', '.', str_replace('.', '', $request->preco_venda));
        $produto->categoria_id = $request->categoria_id;
        $produto->status = 1;
        $produto->save();
        return redirect('produtos')->with('msgConfirm', 'Produto cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produto = Produto::find($id);
        return $produto->toJson();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    private function update(Request $request, $id)
    {
        $produto = Produto::find($id);
        $produto->nome = $request->nome;
        $produto->estoque = $request->estoque;
        $produto->preco_custo = str_replace(',', '.', str_replace('.', '', $request->preco_custo));
        $produto->preco_venda = str_replace(',', '.', str_replace('.', '', $request->preco_venda));
        $produto->categoria_id = $request->categoria_id;
        $produto->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produto = Produto::find($id);
        $produto->delete();
    }

    public function prepareUpdate(Request $request)
    {
        $id = $request->id;
        $this->update($request, $id);
        return redirect('produtos')->with('msgConfirm', 'Produto atualizado com sucesso!');
    }

    public function changeStatus($id)
    {
        $produto = Produto::find($id);
        $produto->status = ($produto->status == 1) ? 0 : 1;
        $produto->update();
        return redirect('produtos')->with('msgConfirm', 'Status do produto <'.$produto->nome.'> alterado com sucesso!');
    }

    function prepareDestroy(Request $request) 
    {
        $id = $request->id;
        $this->destroy($id);
        return redirect('produtos')->with('msgConfirm', 'Produto excluído com sucesso!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Middleware\VerifyCsrfToken;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listaCategorias = Categoria::orderBy('nome')->get();
        return view('categorias')->with('listaCategorias', $listaCategorias);
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
        $c = new Categoria();
        $c->nome = $request->nomecategoria;
        $c->save();
        return redirect('categorias')->with('msgConfirm', 'Categoria cadastrada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categoria = Categoria::find($id);
        return $categoria->toJson();
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
    public function update(Request $request, $id)
    {
        $categoria = Categoria::find($id);
        if ($categoria != null) {
            $categoria->nome = $request->nomecategoria;
            $categoria->update();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoria = Categoria::find($id);
        if ($categoria != null) {
            $categoria->delete();
        }
    }

    public function prepareDestroy(Request $request)
    {
        $id = $request->id;
        $this->destroy($id);
        return redirect('categorias')->with('msgConfirm', 'Categoria excluída com sucesso!');
    }

    public function prepareUpdate(Request $request)
    {
        $id = $request->id;
        $this->update($request, $id);
        return redirect('categorias')->with('msgConfirm', 'Categoria editada com sucesso!');
    }
}

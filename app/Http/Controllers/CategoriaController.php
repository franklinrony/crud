<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias=Categoria::all();
        return view('categoria.index',compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $categoria=new Categoria();
        $categoria->cate_nombre=$request->input('nombre');
        $categoria->cate_descripcion=$request->input('descripcion');
        $categoria->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Categoria $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categoria $categoria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $categoria=Categoria::find($id);
        $categoria->cate_nombre=$request->input('nombre');
        $categoria->cate_descripcion=$request->input('descripcion');
        $categoria->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $categoria=Categoria::find($id);        
        $categoria->delete();
        return redirect()->back();
    }
    
}

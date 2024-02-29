<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos=Producto::all();
        $categorias=Categoria::all();
        return view('producto.index',compact('productos','categorias'));
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
        $producto=new Producto();
        $producto->cate_id=$request->input('idCategoria');
        $producto->prod_nombre=$request->input(('nombre'));
        $producto->prod_cantidad=$request->input('cantidad');
        $producto->prod_precio=$request->input('precio');
        $producto->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $producto=Producto::find($id);
        $producto->cate_id=$request->input('idCategoria');
        $producto->prod_nombre=$request->input(('nombre'));
        $producto->prod_cantidad=$request->input('cantidad');
        $producto->prod_precio=$request->input('precio');
        $producto->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $producto=Producto::find($id);        
        $producto->delete();
        return redirect()->back();
    }
}

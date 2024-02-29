<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaApiController extends Controller
{
    public function index()
    {
        $categorias=Categoria::all();
        return response()->json($categorias);

    }

}

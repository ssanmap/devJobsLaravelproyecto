<?php

namespace App\Http\Controllers;

use App\Vacante;
use App\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{


    //


    public function show(Categoria $categoria)
    {

        // return 'desde c';
        $vacantes = Vacante::where('categoria_id', $categoria->id)->paginate(12);
        return view('categorias.show', compact('vacantes', 'categoria'));
    }
}

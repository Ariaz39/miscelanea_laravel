<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grupos AS G;

class GruposController extends Controller
{

    public function index()
    {
        $g = G::orderBy('nombre')->get();
        return view('principal.grupos',['grupos'=>$g]);
    }


    public function store(Request $request)
    {
        $g = new G;
        $g->nombre = $request->nombre;
        $g->ciudad = $request->ciudad;

        $g->save();

        return redirect()->route('grupos.index');
    }


    public function edit($id)
    {
        $g = G::FindOrFail($id);

        return view('principal.editar_grupos',['grupos'=>$g]);
    }


    public function update(Request $request, $id)
    {
        $g = G::FindOrFail($id);
        $g->nombre = $request->nombre;
        $g->ciudad = $request->ciudad;

        $g-> update();

        return redirect()->route('grupos.index');

    }

}

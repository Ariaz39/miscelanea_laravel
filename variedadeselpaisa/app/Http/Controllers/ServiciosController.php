<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicios AS S;

class ServiciosController extends Controller
{
    public function index()
    {
        $s = S::all();
        return view('principal.servicios',['servicios'=>$s]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $s = new S;
        $s->nombre = $request->nombre;
        $s->valor = $request->valor;

        $s-> save();

        return redirect()->route('servicios.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $s = S::FindOrFail($id);
        return view('principal.editar_servicios',['servicios'=>$s]);
    }

    public function update(Request $request, $id)
    {
        $s = S::FindOrFail($id);
        $s->nombre = $request->nombre;
        $s->valor = $request->valor;

        $s->update();

        return redirect()->route('servicios.index');
    }

}

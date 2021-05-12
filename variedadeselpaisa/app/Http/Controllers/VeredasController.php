<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veredas as V;

class VeredasController extends Controller
{
    public function index()
    {
        $v = V::orderBy('nombre')->get();

        return view('principal.veredas',['veredas'=>$v]);
    }

    public function store(Request $request)
    {
        $v = new V;
        $v->nombre = $request->nombre;
        $v->ciudad = $request->ciudad;

        $v->save();

        return redirect()->route('veredas.index');
    }

    public function edit($id)
    {
        $v = V::FindOrFail($id);

        return view('principal.veredas_edit',['veredas'=>$v]);
    }

    public function update(Request $request, $id)
    {
        $v = V::FindOrFail($id);
        $v->nombre = $request->nombre;
        $v->ciudad = $request->ciudad;

        $v->update();

        return redirect()->route('veredas.index');
    }

}

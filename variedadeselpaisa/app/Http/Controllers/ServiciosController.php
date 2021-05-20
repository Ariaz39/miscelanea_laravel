<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicios AS S;
use Illuminate\Support\Facades\DB;

class ServiciosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $s = S::all();
        $s = S::orderBy('nombre')->get();

        if (session('success_message')){

            alert()->html(session('success_message')," ",'success');

        }
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

        return redirect()->route('servicios.index')->withSuccessMessage('Servicio creado correctamente.');
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

        return redirect()->route('servicios.index')->withSuccessMessage('Servicio creado correctamente.');
    }

}

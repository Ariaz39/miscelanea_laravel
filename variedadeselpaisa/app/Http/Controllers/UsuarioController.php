<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Models\Usuario AS U;
use App\Models\Grupos AS G;
use App\Models\Servicios AS S;
use App\Models\Tpago AS T;
use App\Models\Veredas AS V;
use Barryvdh\DomPDF\Facade AS PDF;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuario = U::All();

        $grupos = G::all();
        $servicios = S::all();
        $tpago = T::all();
        $veredas = V::all();
        return view('principal.clientes',compact('usuario','grupos','servicios','tpago','veredas'));
    }

    public function store(Request $request)
    {
        //$fecha = date('Y-m-d', strtotime($_REQUEST['f_inicio']));
        //$c = Carbon::now()->format('Y-m-d');

        //dd($request->f_inicio);
        $usuario = new U;
        $usuario->nombre = $request->nombre;
        $usuario->celular = $request->celular;
        $usuario->grupos_id = $request->grupos_id;
        $usuario->factura_id = 0;
        $usuario->veredas_id = $request->direccion;
        $usuario->servicios_id = $request->servicios_id;
        $usuario->tpago_id = $request->tpago_id;
        $usuario->ip = $request->ip;
        $usuario->f_inicio = $request->f_inicio;


        $usuario->save();
        return redirect()->route('clientes.index');
    }

    public function show($id)
    {
        $usuario = U::FindOrFail($id);
        $grupos = G::all();
        $servicios = S::all();
        $tpago = T::all();
        $veredas = V::all();
        return view('principal.facturacion',compact('usuario','grupos','servicios','tpago','veredas'));
    }

    public function edit($id)
    {
        $usuario = U::Find($id);
        $grupos = G::all();
        $servicios = S::all();
        $tpago = T::all();
        $veredas = V::all();
        return view('principal.editar_cliente',compact('usuario','grupos','servicios','tpago','veredas'));
    }

    public function update(Request $request, $id)
    {
        $usuario = U::FindOrFail($id);
        $usuario->nombre = $request->nombre;
        $usuario->celular = $request->celular;
        $usuario->grupos_id = $request->grupos_id;
        $usuario->veredas_id = $request->direccion;
        $usuario->servicios_id = $request->servicios_id;
        $usuario->tpago_id = $request->tpago_id;
        $usuario->ip = $request->ip;
        $usuario->f_inicio = $request->f_inicio;


        $usuario->update();
        return redirect()->route('clientes.index');
    }

    public function destroy($id)
    {
        $usuario = U::FindOrFail($id);
        $usuario->delete();

        return redirect()->route('clientes.index');
    }

    public function exportPdf()
    {
        $usuario = U::orderBy('nombre')->get();
        $pdf = PDF::loadView('pdf.usuarios',compact('usuario'))->setPaper('a4', 'landscape');

        //return $pdf->render('listado_usuarios.pdf');
        return $pdf->stream('listado_usuarios.pdf');
    }
}

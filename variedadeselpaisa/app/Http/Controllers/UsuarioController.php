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
        $u = U::All();

        $g = G::all();
        $s = S::all();
        $t = T::all();
        $v = V::all();
        return view('principal.clientes',['usuarios'=>$u,'grupos'=>$g,'servicios'=>$s,'tpago'=>$t,'veredas'=>$v,]);
    }

    public function store(Request $request)
    {
        //$fecha = date('Y-m-d', strtotime($_REQUEST['f_inicio']));
        //$c = Carbon::now()->format('Y-m-d');

        $u = new U;
        $u->nombre = $request->nombre;
        $u->celular = $request->celular;
        $u->grupos_id = $request->grupos_id;
        $u->veredas_id = $request->direccion;
        $u->servicios_id = $request->servicios_id;
        $u->tpago_id = $request->tpago_id;
        $u->ip = $request->ip;
        $u->f_inicio = $request->f_inicio;


        $u->save();
        //dd($u->f_inicio);
        return redirect()->route('clientes.index');
    }

    public function show($id)
    {
        $u = U::FindOrFail($id);
        $g = G::all();
        $s = S::all();
        $t = T::all();
        $v = V::all();
        return view('principal.facturacion',['usuarios'=>$u,'grupos'=>$g,'servicios'=>$s,'tpago'=>$t,'veredas'=>$v,]);
    }

    public function edit($id)
    {
        $u = U::Find($id);
        $g = G::all();
        $s = S::all();
        $t = T::all();
        $v = V::all();
        return view('principal.editar_cliente',['usuarios'=>$u,'grupos'=>$g,'servicios'=>$s,'tpago'=>$t,'veredas'=>$v,]);
    }

    public function update(Request $request, $id)
    {
        $u = U::FindOrFail($id);
        $u->nombre = $request->nombre;
        $u->celular = $request->celular;
        $u->grupos_id = $request->grupos_id;
        $u->veredas_id = $request->direccion;
        $u->servicios_id = $request->servicios_id;
        $u->tpago_id = $request->tpago_id;
        $u->ip = $request->ip;
        $u->f_inicio = $request->f_inicio;


        $u->update();
        return redirect()->route('clientes.index');
    }

    public function destroy($id)
    {
        $u = U::FindOrFail($id);
        $u->delete();

        return redirect()->route('clientes.index');
    }

    public function exportPdf()
    {
        $u = U::orderBy('nombre')->get();
        $pdf = PDF::loadView('pdf.usuarios',['usuarios'=>$u])->setPaper('a4', 'landscape');

        //return $pdf->render('listado_usuarios.pdf');
        return $pdf->stream('listado_usuarios.pdf');
    }
}

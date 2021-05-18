<?php

namespace App\Http\Controllers;
use App\Models\Usuario AS U;
use App\Models\Grupos AS G;
use App\Models\Servicios AS S;
use App\Models\Tpago AS T;
use App\Models\Veredas AS V;
use App\Models\Facturas AS F;
use Barryvdh\DomPDF\Facade AS PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = U::All();
        $servicios = U::All();

        //dd($usuario);
        return view('principal.factura_manual', compact('usuario','servicios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //dd($request);
        if($request->concepto == null){
            $tfra_id = 1;
        }else{
            $tfra_id = 2;
        };
        //dd($request);
        $factura = new F;
        $factura->usuario_id = $request->usuarioId;
        $factura->tfra_id = $tfra_id;
        $factura->concepto = $request->concepto;
        $factura->estado = $request->estado;
        $factura->valor = $request->valor;

        $factura-> save();
        //dd($factura);

        return redirect()->route('facturacion.index');
    }


    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $factura = F::FindOrFail($id);

        //dd($factura);
        return view('principal.editar_factura_manual',compact('factura'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->concepto == null){
            $tfra_id = 1;
        }else{
            $tfra_id = 2;
        };
        //dd($request);
        $factura = F::FindOrFail($id);
        $factura->usuario_id = $request->usuarioId;
        $factura->tfra_id = $tfra_id;
        $factura->concepto = $request->concepto;
        $factura->estado = $request->estado;
        $factura->valor = $request->valor;

        //dd($factura);
        $factura-> update();

        return redirect()->route('clientes.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

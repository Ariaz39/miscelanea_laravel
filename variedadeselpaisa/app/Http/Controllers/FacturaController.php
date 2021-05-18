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
use phpDocumentor\Reflection\Types\Integer;
use Carbon\Carbon;

class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = U::FindOrFail(2);
        //dd($id);
        $factura = F::where(['usuario_id' => $usuario->id,'tfra_id' => 1])->get();
        $factura2 = F::where(['usuario_id' => $usuario->id,'tfra_id' => 2])->get();

        return view('principal.facturacion', compact('usuario','factura','factura2'));
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

        //Revisar esta redirección que se quede en la misma vista luego de guardar
        return redirect()->route('clientes.index');
    }


    public function show($id)
    {
        $usuario = U::FindOrFail($id);
        //dd($id);
        $factura = F::where(['usuario_id' => $id,'tfra_id' => 1])->get();
        $factura2 = F::where(['usuario_id' => $id,'tfra_id' => 2])->get();

        return view('principal.facturacion', compact('usuario','factura','factura2'));
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
        return view('principal.editar_facturacion',compact('factura'));
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

    public function mostrarFactura ($id)
    {

        $factura = F::FindOrFail($id);
        return view('principal.factura', compact('factura'));
    }
}

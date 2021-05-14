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

class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $id)
    {
        $usuario = U::FindOrFail($id);
        $factura = F::where(['usuario_id' => $id->usuario,'tfra_id' => 1])->get();
        //dd($usuario);
        //$usuario = DB::table('usuario')
        //    ->join('factura', 'usuario.id', '=', 'factura.usuario_id')
        //    ->join('servicios', 'servicios.id', '=', 'usuario.servicios_id')
        //    ->where('usuario.id', 1)
        //    ->select(
        //        'usuario.nombre as nombre',
        //        'usuario.id as usuarioId',
        //        'factura.*',
        //        'servicios.id as servicioId',
        //        'servicios.nombre as nombreServicio',
        //        'servicios.valor as valor'
        //    )->get()->toArray();
        //dd($usuario);

        return view('principal.facturacion', compact('usuario','factura'));
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $factura = new F;
        $factura->usuario_id = $request->usuarioId;
        $factura->tfra_id = $request->tfra_id;
        $factura->valor = $request->valor;
        $factura->concepto = $request->concepto;

        $factura-> save();

        dd($factura);

        return redirect()->route('facturacion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
        //
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
        //
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

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
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $factura = F::All();
        //dd($id);

        if (session('success_message')){

            alert()->html(session('success_message')," ",'success');

        }

        return view('principal.facturacionAll', compact('factura'));
    }

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
        return redirect()->route('facturacion.index')->withSuccessMessage('Factura agregada correctamente');
    }


    public function show($id)
    {
        $usuario = U::FindOrFail($id);
        //dd($id);
        $factura = F::where(['usuario_id' => $id,'tfra_id' => 1])->get();
        $factura2 = F::where(['usuario_id' => $id,'tfra_id' => 2])->get();

        return view('principal.facturacion', compact('usuario','factura','factura2'));
    }

    public function edit($id)
    {
        $factura = F::FindOrFail($id);

        //dd($factura);
        return view('principal.editar_facturacion',compact('factura'));
    }

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

        return redirect()->route('facturacion.index')->withSuccessMessage('Factura actualizada correctamente');
    }

    public function actualizaEstado($id, $estado, $vista = null){
        $factura = F::FindOrFail($id);

        if ($estado == 1 ){
            $factura->estado = 2;
        }else{
            $factura->estado = 1;
        }

        $factura->update();

        if($vista == 1) {
            return redirect()->route('facturacion.show', $factura->usuario_id);
        }

        return redirect()->route('facturacion.index');

    }

    public function mostrarFactura ($id)
    {

        $factura = F::FindOrFail($id);
        return view('principal.factura', compact('factura'));
    }
}

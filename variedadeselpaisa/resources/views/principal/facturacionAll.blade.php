@extends('layouts.app')
@section('pestana','Facturación')
@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="panel">
            <div class="panel-body">
                <h4 class="header-title m-t-0 m-b-30">Facturas</h4>


                <div class="">
                    <table class="table table-striped" id="datatableAll">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Usuario</th>
                            <th>Servicio</th>
                            <th>Valor</th>
                            <th>Factura Mes</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($factura as $key)
                            <tr class="gradeX">
                                <td>{{$key->id}}</td>
                                <td>{{$key->usuario->nombre}}</td>
                                <td>{{$key->usuario->servicios->nombre}}</td>
                                <td>{{$key->valor}}</td>
                                <td>{{$key->created_at->formatLocalized('%d/%m/%Y')}}</td>
                                <td class="actions">
                                    <a class="btn-sm btn-primary" href="{{route('facturacion.edit',$key->id)}}">Editar</a>
                                    <a class="btn-success btn-sm" href="{{route('factura.mostrarFactura',$key->id)}}">Mostrar</a>
                                    @if($key->estado == 1)
                                        <a class="btn-danger btn-sm" id="estado" href="{{route('factura.actualizaEstado',[$key->id, $key->estado])}}">Pendiente</a>
                                    @elseif($key->estado == 2)
                                        <a class="btn-warning btn-sm" id="estado" href="{{route('factura.actualizaEstado',[$key->id, $key->estado])}}">Cancelado</a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach



                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>
</div>


@endsection

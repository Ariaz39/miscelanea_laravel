@extends('layouts.app')
@section('pestana','Facturación')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">

            <h4 class="header-title m-t-0 m-b-30">Factura Mensual</h4>

            <div class="row">
                <form class="form-horizontal" role="form" action="{{route('facturacion.store',$usuario->id)}}" method="post">
                    @csrf
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="col-md-2 control-label">Cliente</label>
                            <div class="col-md-10">
                                <input type="text" id="name-client" name="nombre" class="form-control" value="{{$usuario->nombre}}" readonly>
                                <input type="hidden" id="name-client" name="usuarioId" class="form-control" value="{{$usuario->id}}">
                                <input type="hidden" id="name-client" name="tfra_id" class="form-control" value="1">
                            </div>
                        </div>
                        <div class="form-group col-md-10">
                            <label class="col-md-2 control-label">Valor</label>
                            <div class="col-md-10">
                                <input type="text" id="date-price" name="valor" class="form-control" value="{{$usuario->servicios->valor}}">

                            </div>
                        </div>

                        <!-- imputs Estado -->
                            <label>Pendiente <input type="radio" name="estado" id="1" value="1" checked></label>
                            <label>Cancelada <input type="radio" name="estado" id="2" value="2"></label>
                        <!--  -->

                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="date-phone">Servicio</label>
                            <div class="col-md-10">
                                <input type="text" id="date-service" name="date-service" class="form-control" value="{{$usuario->servicios->nombre}}" readonly>
                                <input type="hidden" id="date-price" name="servicio_id" class="form-control" value="{{$usuario->servicios->id}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Fecha Factura</label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="dd/mm/yyyy" value="<?php echo date('Y-m-d') ?>" id="datepicker-autoclose" disabled>
                                    <span class="input-group-addon bg-primary b-0 text-white"><i class="ti-calendar"></i></span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <label class="col-md-1 control-label" for="date-phone">Concepto</label>
                            <div class="col-md-11">
                                <textarea class="form-control" rows="1" spellcheck="false" data-gramm="false" name="concepto"></textarea>
                            </div>
                        </div>
                    </div> -->

                    <div class="col-lg-12 text-center m-t-20">
                        <button  type="submit" onclick="alert('¡Se ha creado la Factura correctamente...!')" class="btn btn-default waves-effect w-md m-b-5">FACTURAR</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="panel">
            <div class="panel-body">
                <h4 class="header-title m-t-0 m-b-30">Facturas Mensuales</h4>


                <div class="">
                    <table class="table table-striped" id="datatable-editable">
                        <thead>
                        <tr>
                            <th>ID</th>
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
                                <td>{{$key->usuario->servicios->nombre}}</td>
                                <td>{{$key->valor}}</td>
                                <td>{{$key->created_at->formatLocalized('%d/%m/%Y')}}</td>
                                <td class="actions">
                                    <a href="{{route('facturacion.edit',$key->id)}}"><i class="fa fa-eye"></i></a>
                                    <a class="btn-success btn-sm" href="{{route('factura.mostrarFactura',$key->id)}}">Mostrar</a>
                                    <a class="btn-warning btn-sm" href="#">Pendiente</a>
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

<div class="row">
    <div class="col-sm-12">
        <div class="panel">
            <div class="panel-body">
                <h4 class="header-title m-t-0 m-b-30">Servicios Adicionales </h4>


                <div class="">
                    <table class="table table-striped" id="datatable-editable">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Servicio</th>
                            <th>Valor</th>
                            <th>Concepto</th>
                            <th>Factura Mes</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($factura2 as $key)
                            <tr class="gradeX">
                                <td>{{$key->id}}</td>
                                <td>{{$key->usuario->servicios->nombre}}</td>
                                <td>{{$key->valor}}</td>
                                <td>{{$key->concepto}}</td>
                                <td>{{$key->created_at->formatLocalized('%d/%m/%Y')}}</td>
                                <td class="actions">
                                    <a href="{{route('factura_manual.edit',$key->id)}}"><i class="fa fa-eye"></i></a>
                                    <a class="btn-success btn-sm" href="{{route('factura.mostrarFactura',$key->id)}}">Mostrar</a>
                                    <a class="btn-warning btn-sm" href="#">Pendiente</a>
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

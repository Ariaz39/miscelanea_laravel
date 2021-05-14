@extends('layouts.app')
@section('pestana','Facturación')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">

            <h4 class="header-title m-t-0 m-b-30">Factura Mensual</h4>

            <div class="row">
                <form class="form-horizontal" role="form" method="post" action="{{Route('facturacion.store')}}">
                    @csrf
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="col-md-2 control-label">Cliente</label>
                            <div class="col-md-10">
                                <input type="text" id="name-client" name="nombre" class="form-control" value="{{$usuario[0]->nombre}}" disabled>
                                <input type="hidden" id="name-client" name="usuarioId" class="form-control" value="{{$usuario[0]->id}}" >

                                <input type="hidden" id="name-client" name="tfra_id" class="form-control" value="1" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Valor</label>
                            <div class="col-md-10">
                                <input type="number" id="date-price" name="valor" class="form-control" value="{{$usuario[0]->servicios->valor}}">

                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="date-phone">Servicio</label>
                            <div class="col-md-10">
                                <input type="text" id="date-service" name="date-service" class="form-control" value="{{$usuario[0]->servicios->nombre}}">
                                <input type="hidden" id="date-price" name="servicio_id" class="form-control" value="{{$usuario[0]->servicios->id}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Fecha Factura</label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="fecha" placeholder="dd/mm/yyyy" value="<?php echo date('Y-m-d') ?>" id="datepicker-autoclose" disabled>
                                    <span class="input-group-addon bg-primary b-0 text-white"><i class="ti-calendar"></i></span>
                                </div>
                            </div>
                        </div>

                    </div>



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
                                <td>{{$key->created_at}}</td>
                                <td class="actions">
                                    <a href="#" target="_blank"><i class="fa fa-eye"></i></a>
                                    <a href="#" title="Cancelada?"><i class="fa fa-usd"></i></a>
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
                            <th>Fecha de Factura</th>
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
                                <td>{{$key->created_at}}</td>
                                <td>{{$key->concepto}}</td>
                                <td class="actions">
                                    <a href="#" target="_blank"><i class="fa fa-eye"></i></a>
                                    <a href="#" title="Cancelada?"><i class="fa fa-usd"></i></a>
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

@extends('layouts.app')
@section('pestana','Facturación')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">

            <h4 class="header-title m-t-0 m-b-30">Editar Factura Mensual</h4>

            <div class="row">
                <form class="form-horizontal" role="form" action="{{route('facturacion.update',$factura->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="col-md-2 control-label">Cliente</label>
                            <div class="col-md-10">
                                <input type="text" id="name-client" name="nombre" class="form-control" value="{{$factura->usuario->nombre}}" disabled>
                                <input type="hidden" id="name-client" name="usuarioId" class="form-control" value="{{$factura->usuario->id}}">
                                <input type="hidden" id="name-client" name="tfra_id" class="form-control" value="1">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Valor</label>
                            <div class="col-md-10">
                                <input type="text" id="date-price" name="valor" class="form-control" placeholder="{{$factura->valor}}" value="">

                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="date-phone">Servicio</label>
                            <div class="col-md-10">
                                <input type="text" id="date-service" name="date-service" class="form-control" value="{{$factura->usuario->servicios->nombre}}" readonly>
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

                    <div class="col-lg-12 text-center m-t-20">
                        <button  type="submit" onclick="alert('¡Se ha actualizado la Factura correctamente...!')" class="btn btn-default waves-effect w-md m-b-5">FACTURAR</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>


@endsection

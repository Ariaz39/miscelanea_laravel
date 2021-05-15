@extends('layouts.app')
@section('pestana','Editar Factura Manual')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">

            <h4 class="header-title m-t-0 m-b-30">Editar Factura Manual</h4>

            <div class="row">
                <form class="form-horizontal" role="form" action="{{route('factura_manual.update',$factura->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="col-md-2 control-label">Cliente</label>
                            <div class="col-md-10">
                                <input type="text" id="name-client" name="nombre" class="form-control" value="{{$factura->usuario->nombre}}" disabled>
                                <input type="hidden" id="name-client" name="usuarioId" class="form-control" value="{{$factura->usuario->id}}">
                                <input type="hidden" id="name-client" name="tfra_id" class="form-control" value="2">
                            </div>


                        </div>
                        <div class="form-group col-md-10">
                            <label class="col-md-2 control-label">Valor</label>
                            <div class="col-md-10">
                                <input type="text" id="date-price" name="valor" class="form-control" value="{{$factura->valor}}">

                            </div>
                        </div>

                        <!-- imputs Estado -->
                            <label>Pendiente <input type="radio" name="estado" id="1" value="1"></label>
                            <label>Cancelada <input type="radio" name="estado" id="2" value="2"></label>
                        <!--  -->

                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="date-phone">Servicio</label>
                            <div class="col-md-10">
                                <input type="text" id="date-service" name=servicio" class="form-control" value="{{$factura->usuario->servicios->nombre}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Fecha Factura</label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="dd/mm/yyyy" value="<?php echo date('Y-m-d') ?>" id="datepicker-autoclose" readonly>
                                    <span class="input-group-addon bg-primary b-0 text-white"><i class="ti-calendar"></i></span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <label class="col-md-1 control-label" for="date-phone">Concepto</label>
                            <div class="col-md-11">
                                <textarea class="form-control" rows="1" spellcheck="false" data-gramm="false" name="concepto">{{$factura->concepto}}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 text-center m-t-20">
                        <button  type="submit" onclick="alert('¡Se ha creado la Factura manual correctamente...!')" class="btn btn-default waves-effect w-md m-b-5">FACTURAR</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>


@endsection

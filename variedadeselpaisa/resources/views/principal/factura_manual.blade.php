@extends('layouts.app')
@section('pestana','Factura Manual')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">

            <h4 class="header-title m-t-0 m-b-30">Crear Factura</h4>

            <div class="row">
                <form class="form-horizontal" role="form" method="post" action="{{Route('facturacion.store')}}">
                    @csrf
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="col-md-2 control-label">Cliente</label>
                            <div class="col-md-10">
                                <!-- <input type="text" id="name-client" name="nombre" class="form-control" value="{{$usuario[0]->nombre}}" disabled> -->
                                <select name="usuarioId" class="form-control" id="">
                                    <option value=""></option>
                                    @foreach($usuario as $key)
                                        <option value="{{$key->id}}">{{$key->nombre}}</option>
                                    @endforeach
                                </select>

                                <input type="hidden" id="name-client" name="tfra_id" class="form-control" value="2" >

                            </div>
                        </div>
                         <div class="form-group">
                            <label class="col-md-2 control-label">Valor</label>
                            <div class="col-md-10">
                                <input type="number" id="date-price" name="valor" class="form-control" value="">

                            </div>
                        </div>


                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="date-phone">Servicio</label>
                            <div class="col-md-10">
                                <!-- <input type="text" id="date-service" name="date-service" class="form-control" value="{{$usuario[0]->servicios->nombre}}"> -->
                                <select name="servicio_id" class="form-control" id="">
                                    <option value=""></option>
                                    @foreach($servicios as $key)
                                        <option value="{{$key->id}}">{{$key->nombre}}</option>
                                    @endforeach
                                </select>

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

                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <label class="col-md-1 control-label" for="date-phone">Concepto</label>
                            <div class="col-md-11">
                                <textarea class="form-control" name="concepto" rows="1" spellcheck="false" data-gramm="false"></textarea>
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


@endsection

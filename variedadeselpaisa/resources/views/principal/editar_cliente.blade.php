@extends('layouts.app')
@section('pestana','Editar Cliente')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">

            <h4 class="header-title m-t-0 m-b-30">Editar Cliente</h4>

            <div class="row">
                <form class="form-horizontal col-md-12" role="form" method="post" action="{{Route('clientes.update',$usuario->id)}}">

                    @csrf
                    @method('PUT')
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="col-md-2 control-label">Nombre</label>
                            <div class="col-md-10">
                                <input type="text" id="name-client" name="nombre" class="form-control" placeholder="Escribir Nombre y Apellido" value="{{$usuario->nombre}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Grupo</label>
                            <div class="col-md-10">
                                <select name="grupos_id" class="form-control">
                                    @foreach($grupos as $key)
                                        @if($key->id == $usuario->grupos_id)
                                            <option selected value="{{$key->id}}">{{$key->nombre}}</option>
                                        @else
                                            <option value="{{$key->id}}">{{$key->nombre}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Servicio</label>
                            <div class="col-md-10">
                                <select name="servicios_id" class="form-control">
                                    <option value=""></option>
                                    @foreach($servicios as $key)
                                        @if($key->id == $usuario->servicios_id)
                                            <option selected value="{{$key->id}}">{{$key->nombre}}</option>
                                        @else
                                            <option value="{{$key->id}}">{{$key->nombre}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">IP Asignada</label>
                            <div class="col-md-10">
                                <input type="text" id="ip" name="ip" class="form-control" value="{{$usuario->ip}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="date-phone">Celular</label>
                            <div class="col-md-10">
                                <input type="number" id="date-phone" name="celular" class="form-control" value="{{$usuario->celular}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="example-email">Dirección</label>
                            <div class="col-md-10">
                                <select name="direccion" class="form-control">
                                    @foreach($veredas as $key)
                                        @if($key->id == $usuario->veredas_id)
                                            <option selected value="{{$key->id}}">{{$key->nombre}}</option>
                                        @else
                                            <option value="{{$key->id}}">{{$key->nombre}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Tipo Pago</label>
                            <div class="col-md-10">
                                 <select name="tpago_id" class="form-control">
                                    @foreach($tpago as $key)
                                        @if($key->id == $usuario->tpago_id)
                                            <option selected value="{{$key->id}}">{{$key->nombre}}</option>
                                        @else
                                            <option value="{{$key->id}}">{{$key->nombre}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Inicio Servicio</label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <input type="text" name="f_inicio" class="form-control" value="{{$usuario->f_inicio}}" autocomplete="off" id="datepicker-autoclose">
                                    <span class="input-group-addon bg-primary b-0 text-white"><i class="ti-calendar"></i></span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-12 text-center m-t-20">
                        <button  type="submit" onclick="alert('¡Se han actualizado los datos correctamente...!')" class="btn btn-default waves-effect w-md m-b-5">ACTUALIZAR</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>


@endsection

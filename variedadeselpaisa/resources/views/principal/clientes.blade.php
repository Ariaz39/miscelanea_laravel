@extends('layouts.app')
@section('pestana','Clientes')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">

            <h4 class="header-title m-t-0 m-b-30">Crear Cliente</h4>

            <div class="row">
                <form class="form-horizontal col-md-12" role="form" method="post" action="{{Route('clientes.store')}}">
                    @csrf
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="col-md-2 control-label">Nombre</label>
                            <div class="col-md-10">
                                <input type="text" id="name-client" name="nombre" class="form-control" placeholder="Escribir Nombre y Apellido">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Grupo</label>
                            <div class="col-md-10">
                                <select name="grupos_id" class="form-control">
                                    <option value=""></option>
                                    @foreach($grupos as $key)
                                        <option value="{{$key->id}}">{{$key->nombre}}</option>
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
                                        <option value="{{$key->id}}">{{$key->nombre}} - {{$key->valor}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">IP Asignada</label>
                            <div class="col-md-10">
                                <input type="text" id="ip" name="ip" class="form-control" placeholder="*******">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="date-phone">Celular</label>
                            <div class="col-md-10">
                                <input type="number" id="date-phone" name="celular" class="form-control" placeholder="Numero sin espacios">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="example-email">Dirección</label>
                            <div class="col-md-10">
                                <select name="direccion" class="form-control">
                                    <option value=""></option>
                                    @foreach($veredas as $key)
                                        <option value="{{$key->id}}">{{$key->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Tipo Pago</label>
                            <div class="col-md-10">
                                 <select name="tpago_id" class="form-control">
                                    <option value=""></option>
                                    @foreach($tpago as $key)
                                        <option value="{{$key->id}}">{{$key->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Inicio Servicio</label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <input type="text" name="f_inicio" class="form-control" placeholder="{{date('Y/m/d')}}" autocomplete="off" id="datepicker-autoclose">
                                    <span class="input-group-addon bg-primary b-0 text-white"><i class="ti-calendar"></i></span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-12 text-center m-t-20">
                        <button  type="submit" onclick="alert('¡Se han guardado los datos correctamente...!')" class="btn btn-default waves-effect w-md m-b-5">GUARDAR</button>
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
                <h4 class="header-title m-t-0 m-b-30">Lista Clientes</h4>


                <div class="">
                    <table class="table table-striped" id="datatable-editable">
                        <thead>
                        <tr>
                            <th>Nombre Apellido</th>
                            <th>Celular</th>
                            <th>Grupo</th>
                            <th>Dirección</th>
                            <th>Servicio</th>
                            <th>Tipo de pago</th>
                            <th>Ip Asignada</th>
                            <th>Inicio de Servicio</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($usuarios as $key)
                        <tr class="gradeX">
                            <td>{{$key->nombre}}</td>
                            <td>{{$key->celular}}</td>
                            <td>{{$key->grupos->nombre}}</td>
                            <td>{{$key->veredas->nombre}}</td>
                            <td>{{$key->servicios->nombre}}</td>
                            <td>{{$key->tpago->nombre}}</td>
                            <td>{{$key->ip}}</td>
                            <td>{{$key->f_inicio}}</td>
                            <td class="actions">
                                <a href="{{Route('clientes.show',$key->id)}}"><i class="fa fa-eye"></i></a>
                                <a href="{{Route('clientes.edit',$key->id)}}"><i class="fa fa-pencil"></i></a>
                                <form class="d-inline pointer" action="{{Route('clientes.destroy',$key->id)}}" method="POST" accept-charset="utf-8">
                                    @csrf
                                    @method('DELETE')
                                    <button style="background: none" type="submit" onclick="return confirm('¿Seguro deseas borrar este registro?');"><i class="fa fa-trash-o"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach


                        </tbody>
                    </table>
                    {{$usuarios->links()}}
                </div>

            </div>

        </div>
    </div>
</div>
@endsection

@extends('layouts.app')
@section('pestana','Servicios')
@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="card-box">

            <h4 class="header-title m-t-0 m-b-30">Crear Servicio</h4>

            <div class="row">
                <form class="form-horizontal col-md-12" role="form" method="post" action="{{Route('servicios.store')}}">
                    @csrf
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="col-md-2 control-label">Nombre</label>
                            <div class="col-md-10">
                                <input type="text" id="name-service" name="nombre" class="form-control" placeholder="Escribir Nombre de Servicio">
                            </div>
                        </div>
                        <!-- <div class="form-group">
                            <label class="col-sm-2 control-label">Fecha Creación</label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="f_inicio" placeholder="{{date('Y/m/d')}}" id="datepicker-autoclose" autocomplete="off">
                                    <span class="input-group-addon bg-primary b-0 text-white"><i class="ti-calendar"></i></span>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="date-value">Valor</label>
                            <div class="col-md-10">
                                <input type="number" id="date-value" name="valor" class="form-control" placeholder="Solo Valor Ej. 50000">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 text-center m-t-20">
                        <button  type="submit"  class="btn btn-default waves-effect w-md m-b-5">GUARDAR</button>
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
                <h4 class="header-title m-t-0 m-b-30">Lista Servicios</h4>


                <div class="">
                    <table class="table table-striped" id="datatable-editable">
                        <thead>
                        <tr>
                            <th>Nombre Servicio</th>
                            <th>Valor</th>
                            <th>Fecha Creación</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($servicios as $key)
                            <tr>
                                <td>{{$key->nombre}}</td>
                                <td>{{$key->valor}}</td>
                                <td>{{$key->created_at}}</td>
                                <td class="actions">
                                    <a href="{{Route('servicios.edit',$key->id)}}"><i class="fa fa-pencil"></i></a>

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

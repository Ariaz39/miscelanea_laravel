@extends('layouts.app')
@section('pestana','Veredas')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">

            <h4 class="header-title m-t-0 m-b-30">Crear Vereda</h4>

            <div class="row">
                <form class="form-horizontal col-md-12" role="form" method="post" action="{{Route('veredas.store')}}">
                    @csrf
                    <div class="col-lg-12">
                        <div class="form-group col-md-6">
                            <label class="col-md-2 control-label">Nombre</label>
                            <div class="col-md-10">
                                <input type="text" id="name-grupo" name="nombre" class="form-control" placeholder="Escribir Nombre de Vereda">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-md-2 control-label">Ciudad</label>
                            <div class="col-md-10">
                                <input type="text" id="name-city" name="ciudad" class="form-control" placeholder="Escribir Ciudad">
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-6">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Fecha Creación</label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="dd/mm/yyyy" id="datepicker-autoclose">
                                    <span class="input-group-addon bg-primary b-0 text-white"><i class="ti-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                    </div> -->

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
                <h4 class="header-title m-t-0 m-b-30">Lista Veredas</h4>


                <div class="">
                    <table class="table table-striped" id="datatable-editable">
                        <thead>
                            <tr>
                                <th>Nombre Vereda</th>
                                <th>Ciudad</th>
                                <th>Fecha Creación</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($veredas as $key)
                                <tr>
                                    <td>{{$key->nombre}}</td>
                                    <td>{{$key->ciudad}}</td>
                                    <td>{{$key->created_at}}</td>
                                    <td class="actions">
                                        <a href="{{Route('veredas.edit',$key->id)}}"><i class="fa fa-pencil"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                    {{$veredas->links()}}
                </div>

            </div>

        </div>
    </div>
</div>
@endsection

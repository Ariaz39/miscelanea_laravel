@extends('layouts.app')
@section('pestana','Veredas')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">

            <h4 class="header-title m-t-0 m-b-30">Crear Vereda</h4>

            <div class="row">
                <form class="form-horizontal col-md-12" role="form" method="post" action="{{Route('veredas.update',$veredas->id)}}">
                    @csrf
                    @method('PUT')
                    <div class="col-lg-12">
                        <div class="form-group col-md-6">
                            <label class="col-md-2 control-label">Nombre</label>
                            <div class="col-md-10">
                                <input type="text" id="name-grupo" name="nombre" class="form-control" placeholder="Escribir Nombre de Vereda" value="{{$veredas->nombre}}">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-md-2 control-label">Ciudad</label>
                            <div class="col-md-10">
                                <input type="text" id="name-city" name="ciudad" class="form-control" placeholder="Escribir Ciudad" value="{{$veredas->ciudad}}">
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
                        <button  type="submit" class="btn btn-default waves-effect w-md m-b-5">ACTUALIZAR</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>


@endsection

@extends('layouts.app')
@section('pestana','Servicios')
@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="card-box">

            <h4 class="header-title m-t-0 m-b-30">Crear Servicio</h4>

            <div class="row">
                <form class="form-horizontal" role="form">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="col-md-2 control-label">Nombre</label>
                            <div class="col-md-10">
                                <input type="text" id="name-service" name="name-service" class="form-control" placeholder="Escribir Nombre de Servicio">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Fecha Creación</label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="dd/mm/yyyy" id="datepicker-autoclose">
                                    <span class="input-group-addon bg-primary b-0 text-white"><i class="ti-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="date-value">Valor</label>
                            <div class="col-md-10">
                                <input type="number" id="date-value" name="date-value" class="form-control" placeholder="Solo Valor Ej. 50000">
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
                        <tr>
                            <td>Internet 2 Megas</td>
                            <td>$ 40.000</td>
                            <td>05/03/2021</td>
                            <td class="actions">
                                <a href="servicios.php"><i class="fa fa-pencil"></i></a>
                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Internet 2 Megas</td>
                            <td>$ 40.000</td>
                            <td>05/03/2021</td>
                            <td class="actions">
                                <a href="servicios.php"><i class="fa fa-pencil"></i></a>
                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Internet 2 Megas</td>
                            <td>$ 40.000</td>
                            <td>05/03/2021</td>
                            <td class="actions">
                                <a href="servicios.php"><i class="fa fa-pencil"></i></a>
                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Internet 2 Megas</td>
                            <td>$ 40.000</td>
                            <td>05/03/2021</td>
                            <td class="actions">
                                <a href="servicios.php"><i class="fa fa-pencil"></i></a>
                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Internet 2 Megas</td>
                            <td>$ 40.000</td>
                            <td>05/03/2021</td>
                            <td class="actions">
                                <a href="servicios.php"><i class="fa fa-pencil"></i></a>
                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>
</div>

@endsection

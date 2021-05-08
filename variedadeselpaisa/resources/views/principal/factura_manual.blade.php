@extends('layouts.app')
@section('pestana','Factura Manual')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">

            <h4 class="header-title m-t-0 m-b-30">Crear Factura</h4>

            <div class="row">
                <form class="form-horizontal" role="form">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="col-md-2 control-label">Cliente</label>
                            <div class="col-md-10">
                                <input type="text" id="name-client" name="name-client" class="form-control" placeholder="Pepito Perez">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Valor</label>
                            <div class="col-md-10">
                                <input type="text" id="date-price" name="date-price" class="form-control" placeholder="$40.000">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="date-phone">Servicio</label>
                            <div class="col-md-10">
                                <input type="text" id="date-service" name="date-service" class="form-control" placeholder="Internet 4 Megas">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Fecha Factura</label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="dd/mm/yyyy" value="<?php echo date('d-m-Y') ?>" id="datepicker-autoclose">
                                    <span class="input-group-addon bg-primary b-0 text-white"><i class="ti-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="date-phone">Concepto</label>
                            <div class="col-md-10">
                                <textarea class="form-control" rows="1" spellcheck="false" data-gramm="false"></textarea>
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
                <h4 class="header-title m-t-0 m-b-30">Lista Clientes</h4>


                <div class="">
                    <table class="table table-striped" id="datatable-editable">
                        <thead>
                        <tr>
                            <th>Nombre Apellido</th>
                            <th>Servicio</th>
                            <th>Inicio de Servicio</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="gradeX">
                            <td>Juan Carlos Martinez</td>
                            <td>Internet 4 Megas</td>
                            <td>05/03/2021</td>
                            <td class="actions">
                                <a href="facturacion.php"><i class="fa fa-eye"></i></a>
                                <a href="clientes.php"><i class="fa fa-pencil"></i></a>
                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                        <tr class="gradeC">
                            <td>Andrea Martinez</td>
                            <td>Internet 2 Megas</td>
                            <td>07/04/2021</td>
                            <td class="actions">
                                <a href="facturacion.php"><i class="fa fa-eye"></i></a>
                                <a href="clientes.php"><i class="fa fa-pencil"></i></a>
                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gloria Martinez</td>
                            <td>Internet 6 Megas</td>
                            <td>15/02/2021</td>
                            <td class="actions">
                                <a href="facturacion.php"><i class="fa fa-eye"></i></a>
                                <a href="clientes.php"><i class="fa fa-pencil"></i></a>
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

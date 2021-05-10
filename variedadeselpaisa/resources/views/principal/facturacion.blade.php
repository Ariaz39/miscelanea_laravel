@extends('layouts.app')
@section('pestana','Clientes')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">

            <h4 class="header-title m-t-0 m-b-30">Factura Mensual</h4>

            <div class="row">
                <form class="form-horizontal" role="form">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="col-md-2 control-label">Cliente</label>
                            <div class="col-md-10">
                                <input type="text" id="name-client" name="name-client" class="form-control" value="{{$usuarios->nombre}}" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Valor</label>
                            <div class="col-md-10">
                                <input type="text" id="date-price" name="date-price" class="form-control" value="{{$usuarios->servicios->valor}}">
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="date-phone">Servicio</label>
                            <div class="col-md-10">
                                <input type="text" id="date-service" name="date-service" class="form-control" value="{{$usuarios->servicios->nombre}}">
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
                <h4 class="header-title m-t-0 m-b-30">Facturas Mensuales</h4>


                <div class="">
                    <table class="table table-striped" id="datatable-editable">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Servicio</th>
                            <th>Factura Mes</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="gradeX">
                            <td>01</td>
                            <td>Internet 4 Megas</td>
                            <td>05/03/2021</td>
                            <td class="actions">
                                <a href="factura.php" target="_blank"><i class="fa fa-eye"></i></a>
                                <a href="#" title="Cancelada?"><i class="fa fa-usd"></i></a>
                            </td>
                        </tr>
                        <tr class="gradeC">
                            <td>02</td>
                            <td>Internet 4 Megas</td>
                            <td>05/03/2021</td>
                            <td class="actions">
                                <a href="factura.php" target="_blank"><i class="fa fa-eye"></i></a>
                                <a href="#" title="Cancelada?"><i class="fa fa-usd"></i></a>
                            </td>
                        </tr>
                        <tr class="gradeA">
                            <td>03</td>
                            <td>Internet 4 Megas</td>
                            <td>05/03/2021</td>
                            <td class="actions">
                                <a href="factura.php" target="_blank"><i class="fa fa-eye"></i></a>
                                <a href="#" title="Cancelada?"><i class="fa fa-usd"></i></a>
                            </td>
                        </tr>


                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="panel">
            <div class="panel-body">
                <h4 class="header-title m-t-0 m-b-30">Servicios Adicionales </h4>


                <div class="">
                    <table class="table table-striped" id="datatable-editable">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Servicio - Valor</th>
                            <th>Concepto</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="gradeX">
                            <td>01</td>
                            <td>Venta de Cable - $20.000</td>
                            <td>Venta de 15 Metros de Cable UPT Coaxial Tipo C, incluye 2 rj45</td>
                            <td class="actions">
                                <a href="factura.php" target="_blank"><i class="fa fa-eye"></i></a>
                                <a href="#" title="Cancelada?"><i class="fa fa-usd"></i></a>
                            </td>
                        </tr>
                        <tr class="gradeC">
                            <td>02</td>
                            <td>Venta de Cable - $30.000</td>
                            <td>Venta de 15 Metros de Cable UPT Coaxial Tipo C, incluye 2 rj45</td>
                            <td class="actions">
                                <a href="factura.php" target="_blank"><i class="fa fa-eye"></i></a>
                                <a href="#" title="Cancelada?"><i class="fa fa-usd"></i></a>
                            </td>
                        </tr>
                        <tr class="gradeA">
                            <td>03</td>
                            <td>Venta de Cable - $10.000</td>
                            <td>Venta de 15 Metros de Cable UPT Coaxial Tipo C, incluye 2 rj45</td>
                            <td class="actions">
                                <a href="factura.php" target="_blank"><i class="fa fa-eye"></i></a>
                                <a href="#" title="Cancelada?"><i class="fa fa-usd"></i></a>
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

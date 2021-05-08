<!DOCTYPE html>
<html lang="es">
    <head>
        <title>CLIENTES | Variedades El Paisa</title>
        <?php include 'includes/scriptsGlobal.php';?>
    </head>  
    <body class="fixed-left">
        <div id="wrapper">

            <div class="topbar">

                <div class="topbar-left">
                    <a href="clientes.php" class="logo"><span>Variedades <span>El Paisa</span></span><i class="zmdi zmdi-layers"></i></a>
                </div>
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <button class="button-menu-mobile open-left">
                                    <i class="zmdi zmdi-menu"></i>
                                </button>
                            </li>
                            <li>
                                <h4 class="page-title">Clientes</h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <?php include 'includes/menu-left.php';?>

           
            <div class="content-page" style="background: url(assets/images/bg_clientes.jpg) center; background-size: contain;">
                <div class="content">
                    <div class="container">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">

                                    <h4 class="header-title m-t-0 m-b-30">Crear Cliente</h4>

                                    <div class="row">
                                        <form class="form-horizontal" role="form">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Nombre</label>
                                                    <div class="col-md-10">
                                                        <input type="text" id="name-client" name="name-client" class="form-control" placeholder="Escribir Nombre y Apellido">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Grupo</label>
                                                    <div class="col-md-10">
                                                        <select class="form-control">
                                                            <option>Seleccionar Grupo</option>
                                                            <option>Grupo 1</option>
                                                            <option>Grupo 2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Servicio</label>
                                                    <div class="col-md-10">
                                                        <select class="form-control">
                                                            <option>Seleccionar Servicio</option>
                                                            <option>Internet 2 Megas</option>
                                                            <option>Internet 3 Megas</option>
                                                            <option>Internet 4 Megas</option>
                                                            <option>Internet 5 Megas</option>
                                                            <option>Internet 6 Megas</option> 
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">IP Asignada</label>
                                                    <div class="col-md-10">
                                                        <input type="text" id="name-ip" name="name-ip" class="form-control" placeholder="*******">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="col-md-2 control-label" for="date-phone">Celular</label>
                                                <div class="col-md-10">
                                                    <input type="number" id="date-phone" name="date-phone" class="form-control" placeholder="Numero sin espacios">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label" for="example-email">Dirección</label>
                                                <div class="col-md-10">
                                                    <select class="form-control">
                                                        <option>Seleccionar Vereda</option>
                                                        <option>San Bernardo</option>
                                                        <option>San Juan</option>
                                                        <option>La Flor</option>
                                                        <option>China Alta</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Tipo Pago</label>
                                                <div class="col-md-10">
                                                    <select class="form-control">
                                                        <option>Seleccionar Tipo</option>
                                                        <option>Adelantado</option>
                                                        <option>Vencido</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Inicio Servicio</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="dd/mm/yyyy" id="datepicker-autoclose">
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

                    </div> 

                </div> 

                <footer class="footer">
                    2016 - 2017 © Adminto.
                </footer>

            </div>
            <div id="dialog" class="modal-block mfp-hide">
                <section class="panel panel-info panel-color">
                    <header class="panel-heading">
                        <h2 class="panel-title">Eliminar Cliente</h2>
                    </header>
                    <div class="panel-body">
                        <div class="modal-wrapper">
                            <div class="modal-text">
                                <p>Esta seguro que desea eliminar este Cliente?</p>
                            </div>
                        </div>

                        <div class="row m-t-20">
                            <div class="col-md-12 text-right">
                                <button id="dialogConfirm" class="btn btn-primary waves-effect waves-light">Eliminar</button>
                                <button id="dialogCancel" class="btn btn-default waves-effect">Cancelar</button>
                            </div>
                        </div>
                    </div>

                </section>
            </div>
        </div>
        <?php include 'includes/scriptsFooter.php';?>
    </body>
</html>
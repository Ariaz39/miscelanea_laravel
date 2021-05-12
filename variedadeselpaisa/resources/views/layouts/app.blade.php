<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Variedades el Paisa - @yield('pestana')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/core.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/components.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/icons.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/pages.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/menu.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/responsive.css')}}" rel="stylesheet" type="text/css" />
        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <script src="{{asset('js/modernizr.min.js')}}"></script>
        <link href="{{asset('plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')}}" rel="stylesheet" />
        <link href="{{asset('plugins/multiselect/css/multi-select.css')}}"  rel="stylesheet" type="text/css" />
        <link href="{{asset('plugins/select2/dist/css/select2.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('plugins/select2/dist/css/select2-bootstrap.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" />
        <link href="{{asset('plugins/switchery/switchery.min.css')}}" rel="stylesheet" />
        <link href="{{asset('plugins/timepicker/bootstrap-timepicker.min.css')}}" rel="stylesheet">
        <link href="{{asset('plugins/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}" rel="stylesheet">
        <link href="{{asset('plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">
        <link href="{{asset('plugins/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
        <link href="{{asset('plugins/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('plugins/datatables/buttons.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('plugins/datatables/fixedHeader.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('plugins/datatables/responsive.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('plugins/datatables/scroller.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Editatable  Css-->
        <link rel="stylesheet" href="{{asset('plugins/magnific-popup/dist/magnific-popup.css')}}" />
        <link rel="stylesheet" href="{{asset('plugins/jquery-datatables-editable/datatables.css')}}" />


    </head>
    <body class="fixed-left">
        <div id="wrapper">

            <div class="topbar">

                <div class="topbar-left">
                    <a href="clientes" class="logo"><span>Variedades <span>El Paisa</span></span><i class="zmdi zmdi-layers"></i></a>
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

            <!-- Menu Left -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <div class="user-box">
                        <div class="user-img">
                            <img src="{{asset('images/users/avatar-1.jpg')}}" class="img-circle img-thumbnail img-responsive">
                            <div class="user-status online"><i class="zmdi zmdi-dot-circle"></i></div>
                        </div>
                        <h5><a>Javier Manco</a> </h5>
                    </div>

                    <div id="sidebar-menu">
                        <ul>
                            <li class="text-muted menu-title">Navegación</li>

                            <li>
                                <a href="clientes" class="waves-effect"><i class="zmdi zmdi-account-add"></i> <span> Clientes </span> </a>
                            </li>

                            <li>
                                <a href="servicios" class="waves-effect"><i class="zmdi zmdi-share"></i> <span> Servicios </span> </a>
                            </li>

                            <li>
                                <a href="factura_manual" class="waves-effect"><i class="zmdi zmdi-dot-circle"></i> <span> Factura Manual </span> </a>
                            </li>

                            <li>
                                <a href="grupos" class="waves-effect"><i class="zmdi zmdi-accounts"></i> <span> Grupos </span> </a>
                            </li>

                            <li>
                                <a href="veredas" class="waves-effect"><i class="zmdi zmdi-city"></i> <span> Veredas </span> </a>
                            </li>

                            <li>
                                <a href="{{ url('/logout') }}" onclick="" class="waves-effect"><i class="zmdi zmdi-power"></i> <span> Cerrar Sesion </span> </a>
                            </li>

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>

                </div>

            </div>

            <!-- Cierre de Menú left -->


            <div class="content-page" style="background: url({{asset('images/bg_clientes.jpg')}}) center; background-size: contain;">
                <div class="content">
                    <div class="container">

                        @yield('content')

                    </div>

                </div>

                <footer class="footer">
                    {{date('Y')}} © Adminto.
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

        <script>
        var resizefunc = [];
        </script>
        <!-- jQuery  -->
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/detect.js')}}"></script>
        <script src="{{asset('js/fastclick.js')}}"></script>
        <script src="{{asset('js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('js/jquery.blockUI.js')}}"></script>
        <script src="{{asset('js/waves.js')}}"></script>
        <script src="{{asset('js/jquery.nicescroll.js')}}"></script>
        <script src="{{asset('js/jquery.scrollTo.min.js')}}"></script>
        <!-- Plugins Js -->
        <script src="{{asset('plugins/switchery/switchery.min.js')}}"></script>
        <script src="{{asset('plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('plugins/multiselect/js/jquery.multi-select.js')}}"></script>
        <script type="text/javascript" src="{{asset('plugins/jquery-quicksearch/jquery.quicksearch.js')}}"></script>
        <script src="{{asset('plugins/select2/dist/js/select2.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('plugins/bootstrap-inputmask/bootstrap-inputmask.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('plugins/moment/moment.js')}}"></script>
        <script src="{{asset('plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
        <script src="{{asset('plugins/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
        <script src="{{asset('plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
        <script src="{{asset('plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
        <script src="{{asset('plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')}}" type="text/javascript"></script>

        <!-- App js -->
        <script src="{{asset('js/jquery.core.js')}}"></script>
        <script src="{{asset('js/jquery.app.js')}}"></script>

        <script>
        jQuery(document).ready(function() {

        //advance multiselect start
        $('#my_multi_select3').multiSelect({
        selectableHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
        selectionHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
        afterInit: function (ms) {
            var that = this,
                $selectableSearch = that.$selectableUl.prev(),
                $selectionSearch = that.$selectionUl.prev(),
                selectableSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selectable:not(.ms-selected)',
                selectionSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selection.ms-selected';

            that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
                .on('keydown', function (e) {
                    if (e.which === 40) {
                        that.$selectableUl.focus();
                        return false;
                    }
                });

            that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
                .on('keydown', function (e) {
                    if (e.which == 40) {
                        that.$selectionUl.focus();
                        return false;
                    }
                });
        },
        afterSelect: function () {
            this.qs1.cache();
            this.qs2.cache();
        },
        afterDeselect: function () {
            this.qs1.cache();
            this.qs2.cache();
        }
        });

        // Select2
        $(".select2").select2();

        $(".select2-limiting").select2({
        maximumSelectionLength: 2
        });

        });

        //Bootstrap-TouchSpin
        $(".vertical-spin").TouchSpin({
        verticalbuttons: true,
        buttondown_class: "btn btn-primary",
        buttonup_class: "btn btn-primary",
        verticalupclass: 'ti-plus',
        verticaldownclass: 'ti-minus'
        });
        var vspinTrue = $(".vertical-spin").TouchSpin({
        verticalbuttons: true
        });
        if (vspinTrue) {
        $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
        }

        $("input[name='demo1']").TouchSpin({
        min: 0,
        max: 100,
        step: 0.1,
        decimals: 2,
        boostat: 5,
        maxboostedstep: 10,
        buttondown_class: "btn btn-primary",
        buttonup_class: "btn btn-primary",
        postfix: '%'
        });
        $("input[name='demo2']").TouchSpin({
        min: -1000000000,
        max: 1000000000,
        stepinterval: 50,
        buttondown_class: "btn btn-primary",
        buttonup_class: "btn btn-primary",
        maxboostedstep: 10000000,
        prefix: '$'
        });
        $("input[name='demo3']").TouchSpin({
        buttondown_class: "btn btn-primary",
        buttonup_class: "btn btn-primary"
        });
        $("input[name='demo3_21']").TouchSpin({
        initval: 40,
        buttondown_class: "btn btn-primary",
        buttonup_class: "btn btn-primary"
        });
        $("input[name='demo3_22']").TouchSpin({
        initval: 40,
        buttondown_class: "btn btn-primary",
        buttonup_class: "btn btn-primary"
        });

        $("input[name='demo5']").TouchSpin({
        prefix: "pre",
        postfix: "post",
        buttondown_class: "btn btn-primary",
        buttonup_class: "btn btn-primary"
        });
        $("input[name='demo0']").TouchSpin({
        buttondown_class: "btn btn-primary",
        buttonup_class: "btn btn-primary"
        });

        // Time Picker
        jQuery('#timepicker').timepicker({
        defaultTIme : false
        });
        jQuery('#timepicker2').timepicker({
        showMeridian : false
        });
        jQuery('#timepicker3').timepicker({
        minuteStep : 15
        });

        //colorpicker start

        $('.colorpicker-default').colorpicker({
        format: 'hex'
        });
        $('.colorpicker-rgba').colorpicker();

        // Date Picker
        jQuery('#datepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
        format: "yyyy/mm/dd",
        autoclose: true,
        todayHighlight: true
        });
        jQuery('#datepicker-inline').datepicker();
        jQuery('#datepicker-multiple-date').datepicker({
        format: "yyyy/mm/dd",
        clearBtn: true,
        multidate: true,
        multidateSeparator: ","
        });
        jQuery('#date-range').datepicker({
        toggleActive: true
        });

        //Date range picker
        $('.input-daterange-datepicker').daterangepicker({
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-default',
        cancelClass: 'btn-primary'
        });
        $('.input-daterange-timepicker').daterangepicker({
        timePicker: true,
        format: 'DD/MM/YYYY h:mm A',
        timePickerIncrement: 30,
        timePicker12Hour: true,
        timePickerSeconds: false,
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-default',
        cancelClass: 'btn-primary'
        });
        $('.input-limit-datepicker').daterangepicker({
        format: 'DD/MM/YYYY',
        minDate: '06/01/2016',
        maxDate: '06/12/2016',
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-default',
        cancelClass: 'btn-primary',
        dateLimit: {
        days: 6
        }
        });

        $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

        $('#reportrange').daterangepicker({
        format: 'MM/DD/YYYY',
        startDate: moment().subtract(29, 'days'),
        endDate: moment(),
        minDate: '01/01/2016',
        maxDate: '12/31/2016',
        dateLimit: {
        days: 60
        },
        showDropdowns: true,
        showWeekNumbers: true,
        timePicker: false,
        timePickerIncrement: 1,
        timePicker12Hour: true,
        ranges: {
        'Today': [moment(), moment()],
        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        'This Month': [moment().startOf('month'), moment().endOf('month')],
        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        opens: 'left',
        drops: 'down',
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-success',
        cancelClass: 'btn-default',
        separator: ' to ',
        locale: {
        applyLabel: 'Submit',
        cancelLabel: 'Cancel',
        fromLabel: 'From',
        toLabel: 'To',
        customRangeLabel: 'Custom',
        daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
        monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
        firstDay: 1
        }
        }, function (start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        });

        //Bootstrap-MaxLength
        $('input#defaultconfig').maxlength()

        $('input#thresholdconfig').maxlength({
        threshold: 20
        });

        $('input#moreoptions').maxlength({
        alwaysShow: true,
        warningClass: "label label-success",
        limitReachedClass: "label label-danger"
        });

        $('input#alloptions').maxlength({
        alwaysShow: true,
        warningClass: "label label-success",
        limitReachedClass: "label label-danger",
        separator: ' out of ',
        preText: 'You typed ',
        postText: ' chars available.',
        validate: true
        });

        $('textarea#textarea').maxlength({
        alwaysShow: true
        });

        $('input#placement').maxlength({
        alwaysShow: true,
        placement: 'top-left'
        });
        </script>
        <script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('plugins/datatables/dataTables.bootstrap.js')}}"></script>
        <script src="{{asset('plugins/datatables/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('plugins/datatables/buttons.bootstrap.min.js')}}"></script>
        <script src="{{asset('plugins/datatables/jszip.min.js')}}"></script>
        <script src="{{asset('plugins/datatables/pdfmake.min.js')}}"></script>
        <script src="{{asset('plugins/datatables/vfs_fonts.js')}}"></script>
        <script src="{{asset('plugins/datatables/buttons.html5.min.js')}}"></script>
        <script src="{{asset('plugins/datatables/buttons.print.min.js')}}"></script>
        <script src="{{asset('plugins/datatables/dataTables.fixedHeader.min.js')}}"></script>
        <script src="{{asset('plugins/datatables/dataTables.keyTable.min.js')}}"></script>
        <script src="{{asset('plugins/datatables/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('plugins/datatables/responsive.bootstrap.min.js')}}"></script>
        <script src="{{asset('plugins/datatables/dataTables.scroller.min.js')}}"></script>

        <!-- Datatable init js -->
        <script src="{{asset('pages/datatables.init.js')}}"></script>
        <!-- Editable js -->
        <script src="{{asset('plugins/magnific-popup/dist/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('plugins/jquery-datatables-editable/jquery.dataTables.js')}}"></script>
        <script src="{{asset('plugins/datatables/dataTables.bootstrap.js')}}"></script>
        <script src="{{asset('plugins/tiny-editable/mindmup-editabletable.js')}}"></script>
        <script src="{{asset('plugins/tiny-editable/numeric-input-example.js')}}"></script>
        <!-- init -->
        <script src="{{asset('pages/datatables.editable.init.js')}}"></script>

        <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable').dataTable();
            $('#datatable-keytable').DataTable( { keys: true } );
            $('#datatable-responsive').DataTable();
            $('#datatable-scroller').DataTable( { ajax: "{{asset('plugins/datatables/json/scroller-demo.json')}}", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );
            var table = $('#datatable-fixed-header').DataTable( { fixedHeader: true } );
        } );
        TableManageButtons.init();

        </script>

        <script>
        $('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();
        </script>

    </body>
</html>

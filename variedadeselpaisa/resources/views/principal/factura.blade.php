@extends('layouts.app')
@section('pestana','Servicios')
@section('content')

    <link rel="stylesheet" href="{{asset('css/estilo.css')}}" media="screen" >
	<link rel="stylesheet" href="{{asset('css/print.css')}}"  media="print">
	<link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">


    <!-- <style >
        body:after {
            content: "CANCELADA";
            font-size: 8em;
            color: rgba(68, 229, 78, 0.4);
            z-index: 9999;
            display: block;
            position: fixed;
            top: 3.3em;
            right: 0;
            bottom: 0;
            left: 1.6em;
            pointer-events: none;
            user-select: none;
            text-align: center;
        }
    </style> -->

    <div class="row">
        <div class="col-sm-12">
            <div class="card-box" id="cont-factura">
                <div id="secc-cabecera">
                    <div class="div-divi" style="width: 70%;">
                        <img src="{{asset('images/logo.jpg')}}" alt="Variedades el Paisa">
                    </div>

                    <div class="div-divi" style="width: 30%;">
                        <div class="col-der" style="width: 100%;">
                            <div class="cons-factu" style="background-color: rgba(168, 168, 168, 0.7); display: table; text-align: center; height: 72px; border-radius: 9px; width: 100%;">
                                <p style="background: #188ae2; color: #fff;">NÚMERO DE VENTA</p>

                                <span>No 	{{$factura->id}}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="info-cliente">
                    <div class="colIzq">
                        <div class="nombre datousua">
                            <p>Señor (es): </p>
                            <p>{{$factura->usuario->nombre}}</p>
                        </div>
                        <div class="direccion datousua">
                            <p>Dirección: </p>
                            <p>{{$factura->usuario->veredas->nombre}}</p>
                        </div>
                        <div class="ciudad datousua">
                            <p>Ciudad: </p>
                            <p>{{$factura->usuario->veredas->ciudad}}</p>
                        </div>
                        <div class="tel datousua">
                            <p>Tels.: </p>
                            <p clas="ajustartel">{{$factura->usuario->celular}}</p>
                        </div>
                    </div>

                    <div class="colDer">
                        <div class="info">
                            <div>
                                <div class="infoFecha">
                                    Fecha de <br>Emisión:
                                </div>
                                <div class="div fecha">
                                    {{$factura->created_at->formatLocalized('%d/%m/%Y')}}</div>
                            </div>
                        </div>
                        <div class="info" style="border-bottom: none;">
                            <div>
                                <div class="infoFecha">
                                    Fecha de <br>Vencimiento:
                                </div>
                                <div class="div fecha">
                                    {{$factura->created_at->addDays(5)->formatLocalized('%d/%m/%Y')}}</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="info-pago">
                    <div class="div-fila titulo">
                        <div class="col col1">
                            <p>CANT.</p>
                        </div>
                        <div class="col col2">
                            <p>DESCRIPCIÓN</p>
                        </div>
                        <div class="col col3">
                            <p>V/R. UNIT.</p>
                        </div>
                        <div class="col col4">
                            <p>V/R. TOTAL</p>
                        </div>
                    </div>

                    <div class="div-fila" style="height: 230px">
                        <div class="col col1">
                            <p style="padding-top: 30px;">1</p>
                        </div>
                        <div class="col col2">
                            <p style="padding-top: 30px;">Valor correspondiente a Mensualidad de Servicio <b>{{$factura->usuario->servicios->nombre}}</b> <b>{{$factura->concepto}}</b> comprendido entre las fechas {{$factura->created_at->formatLocalized('%d/%m/%Y')}} hasta el {{$factura->created_at->addMonth()->formatLocalized('%d/%m/%Y')}}</p>
                        </div>
                        <div class="col col3">
                            <p style="padding-top: 30px;">{{$factura->valor}}</p>
                        </div>
                        <div class="col col4">
                            <p style="padding-top: 30px;">{{$factura->valor}}</p>
                        </div>
                    </div>


                </div>

                <div id="info-footer">
                    <div class="col-izq">

                        <div class="col-der">
                            <div class="total-pagar">
                                <p><strong>TOTAL </strong> </p>
                                <div>
                                    <span>{{$factura->valor}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="aba" class="mt_5p">
                    <a  class="volver" href="javascript:history.back()"> Regresar</a>

                </div>
            </div>
        </div>
    </div>

@endsection

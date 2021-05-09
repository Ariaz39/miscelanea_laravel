<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function servicios()
    {
        return view('principal.servicios');
    }
    public function grupos()
    {
        return view('principal.grupos');
    }
    public function veredas()
    {
        return view('principal.veredas');
    }
    public function factura()
    {
        return view('principal.factura');
    }
    public function factura_manual()
    {
        return view('principal.factura_manual');
    }
}

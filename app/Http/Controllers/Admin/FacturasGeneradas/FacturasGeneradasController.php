<?php

namespace App\Http\Controllers\Admin\FacturasGeneradas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FacturasGeneradasController extends Controller
{
    public function index(){
        return view('admin.facturas-generadas.index');
    }

    public function create(){
        return view('admin.facturas-cobradas.create');
    }
}

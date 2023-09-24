<?php

namespace App\Http\Controllers\Admin\Facturascobradas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FacturacobradaController extends Controller
{
    public function index(){
        return view('admin.facturas-cobradas.index');
    }

    public function create(){
        return view('admin.facturas-cobradas.create');
    }
}

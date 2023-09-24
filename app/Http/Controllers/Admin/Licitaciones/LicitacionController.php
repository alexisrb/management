<?php

namespace App\Http\Controllers\Admin\Licitaciones;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LicitacionController extends Controller
{
    public function index(){
        return view('admin.licitaciones.index');
    }

    public function create(){
        return view('admin.licitaciones.create');
    }
}

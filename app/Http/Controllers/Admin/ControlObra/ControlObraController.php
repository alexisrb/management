<?php

namespace App\Http\Controllers\Admin\ControlObra;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControlObraController extends Controller
{
    public function index(){
        return view('admin.control-obra.index');
    }

    public function create(){
        return view('admin.control-obra.create');
    }
}

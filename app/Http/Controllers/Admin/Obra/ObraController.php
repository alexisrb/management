<?php

namespace App\Http\Controllers\Admin\Obra;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ObraController extends Controller
{
    public function index(){
        return view('admin.obra.index');
    }

    public function create(){
        return view('admin.obra.create');
    }
}

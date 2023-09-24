<?php

namespace App\Http\Controllers\Admin\Facturasxc;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FacturaxcController extends Controller
{
    public function index(){
        return view('admin.facturasxc.index');
    }

    public function create(){
        return view('admin.facturasxc.create');
    }
}

<?php

namespace App\Http\Controllers\Admin\ConstCenter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConstCenterController extends Controller
{
    public function index(){
        return view('admin.const-centers.index');
    }
    public function create(){
        return view('admin.const-centers.index');
    }
}

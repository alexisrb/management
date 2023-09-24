<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ConstructionController extends Controller
{
    public function index(){
        return view('admin.construction.index');
    }
}

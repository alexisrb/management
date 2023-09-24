<?php

namespace App\Http\Controllers\Admin\Estimates;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EstimateController extends Controller
{
    public function index(){
        return view('admin.estimates.index');
    }

    public function create(){
        return view('admin.estimates.create');
    }
}

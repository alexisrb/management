<?php

namespace App\Http\Controllers\Admin\Advances;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdvancesController extends Controller
{
    public function index(){
        return view('admin.advances.index');
    }

    public function create(){
        return view('admin.advances.create');
    }
}

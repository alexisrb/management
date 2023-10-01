<?php

namespace App\Http\Controllers\Admin\DetailsObra;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetailObraController extends Controller
{
    public function index(){
        return view('admin.details-obra.index');
    }

    public function create(){
        return view('admin.details-obra.create');
    }
}

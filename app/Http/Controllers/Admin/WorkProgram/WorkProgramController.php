<?php

namespace App\Http\Controllers\Admin\WorkProgram;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WorkProgramController extends Controller
{
    public function index(){
        return view('admin.work-program.index');
    }

    public function create(){
        return view('admin.work-program.create');
    }
}

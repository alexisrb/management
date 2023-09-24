<?php

namespace App\Http\Controllers\Admin\ConstructionSite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConstructionSiteController extends Controller
{
    public function index(){
        return view('admin.construction-site.index');
    }

    public function create(){
        return view('admin.construction-site.create');
    }
}

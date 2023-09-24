<?php

namespace App\Http\Controllers\Admin\Disbursements;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DisbursementsController extends Controller
{
    
    public function index(){
        return view('admin.disbursements.index');
    }

    public function create(){
        return view('admin.disbursements.create');
    }
}

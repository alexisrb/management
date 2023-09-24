<?php

namespace App\Http\Controllers\Admin\Accounting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountingController extends Controller
{
    public function index(){
        return view('admin.accounting.index');
    }
    public function create(){
        return view('admin.accounting.create');
    }
}

<?php

namespace App\Http\Controllers\Admin\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        return view('admin.clients.index');
    }

    public function create(){
        return view('admin.clients.create');
    }
}

<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public $users;

    public function index(){
        return view('admin.users.index');
    }

    public function create(){
        return view('admin.users.create');
    }
}

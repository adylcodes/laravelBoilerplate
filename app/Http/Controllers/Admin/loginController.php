<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index(){
        return view('pages.login.login');
    }

    public function login(){
        return view('pages.admin.dashboard');
    }
}

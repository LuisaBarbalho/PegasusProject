<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class controllerLogin extends Controller
{
    public function login(){
        $title = "Login";
        return view('login.viewLogin', compact('title'));
    }

    public function createLogin(){
        $title = "Cadastro";
        return view('login.viewCreateLogin', compact('title'));
    }
}

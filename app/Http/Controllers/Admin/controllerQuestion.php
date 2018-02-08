<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class controllerQuestion extends Controller
{
    public function create(){
        $title="Cadastrar Perguntas";
        return view('question.viewCreateQuestion', compact('title'));
    }
}

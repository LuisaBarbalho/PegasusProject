<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class controllerForm extends Controller
{
    public function index(){
        $title = 'Formulários';
        $forms = array('Form 1', 'Form 2', 'Form 3', 'Form 4');
        return view('form.viewListForm', compact('title', 'forms'));
    }

    public function create(){
        $title = 'Cadastrar Formulario';
        return view('form.viewCreateForm', compact('title'));
    }

    public function createContinue(){
        $title = 'Cadastrar Formulario';
        return view('form.create-2', compact('title'));
    }

}

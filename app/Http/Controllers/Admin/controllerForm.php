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

    public function createListCategory(){
        $title = "Cadastrar Categoria";
        return view('form.viewCreateListCategory', compact('title'));
    }

    public function linkFormUser(){
        $title = 'Relacionar formulário(s) & usuário(s)';
        $descricao = 'Usuário';
        return view('form.viewLinkFormUser', compact('title', 'descricao'));
    }

    public function linkFormQuestion(){
        $title = 'Relacionar formulário(s) & pergunta(s)';
        $descricao = 'Pergunta';
        return view('form.viewLinkFormQuestion', compact('title', 'descricao'));
    }

    public function linkFormAnswer(){
        $title = 'Relacionar formulário(s) & resposta(s)';
        $descricao = 'Resposta-Peso';
        return view('form.viewLinkFormAnswer', compact('title', 'descricao'));
    }

}

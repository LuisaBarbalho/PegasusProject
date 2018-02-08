<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class controllerUser extends Controller
{
    public function index(){
        $title = 'Usuários';
        $users = array(array('id'=>'1', 'nome'=>'Luisa Barbalho', 'cpf'=>'110.274.274-05', 'data'=>'08/10/1995', 'perfil'=>'Administrador'),
                        array('id'=>'2', 'nome'=>'Hercules Pedrosa', 'cpf'=>'111.222.333-99', 'data'=>'08/12/1995', 'perfil'=>'Paciente'),
                        array('id'=>'3', 'nome'=>'Pierre Freire', 'cpf'=>'444.444.444-44', 'data'=>'02/10/1975', 'perfil'=>'Analista'),
                        array('id'=>'4', 'nome'=>'Stela Lima', 'cpf'=>'888.888.888-99', 'data'=>'12/08/1996', 'perfil'=>'Administrador'));
        
        
        return view('user.viewListUser', compact('title', 'users'));
    }

    public function create(){
        $title = 'Cadastrar Usuário';
        return view('user.viewCreateUser', compact('title'));
    }
}

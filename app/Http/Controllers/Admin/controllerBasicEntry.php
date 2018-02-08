<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class controllerBasicEntry extends Controller
{
    public function createListEthnicity(){
        $title = "Cadastrar Etnia";
        return view('basicEntry.viewCreateListEthnicity', compact('title'));
    }

    public function createListGender(){
        $title = "Cadastrar Gênero";
        return view('basicEntry.viewCreateListGender', compact('title'));
    }

    public function createListNeighborhood(){
        $title = "Cadastrar Bairro";
        return view('basicEntry.viewCreateListNeighborhood', compact('title'));
    }

    public function createListProfession(){
        $title = "Cadastrar Profissão";
        return view('basicEntry.viewCreateListProfession', compact('title'));
    }
}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class controllerStatistic extends Controller
{
    public function index(){
        return "hebwjehfb";
    }

    public function detail(){
        return view('statistic.viewDetailStatistic');
    }

}

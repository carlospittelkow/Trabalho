<?php

namespace Unesc\Http\Controllers;

use Illuminate\Http\Request;

class AlunosController extends Controller
{
    public function index(){
        return Aluno::all();
    }
}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LojasController extends Controller
{
    public function index()
    {
        return view('lojas.index');
    }
}

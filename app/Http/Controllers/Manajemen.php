<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Manajemen extends Controller
{
    public function index()
    {
        return view('module_spj/vDinas/_manajemen_dinas');
    }
}

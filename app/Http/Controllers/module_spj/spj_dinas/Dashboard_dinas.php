<?php

namespace App\Http\Controllers\module_spj\spj_dinas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Dashboard_dinas extends Controller
{
    public function index()
    {
        return view('module_spj/vDinas/_dashboard_dinas');
    }
}

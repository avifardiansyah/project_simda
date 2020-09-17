<?php

namespace App\Http\Controllers\module_spj\spj_dinas\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\SpjModel;

class Dashboard_admin extends Controller
{
    public function __construct()
    {
        $this->model = new SpjModel();
    }
    public function index()
    {
        return view('module_spj/vAdmin/_dashboard_admin_dinas');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function auth()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        echo json_encode($username);
    }
}

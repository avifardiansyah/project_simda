<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoginModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class Login extends Controller
{

    public function __construct()
    {
        $this->model = new LoginModel;

    }

    public function index()
    {
        return view('login');
    }

    public function username()
    {
        return 'username';
    }

    public function auth(Request $post)
    {
        $this->validate($post, [
            'username' => 'required|string',
            'password' => 'required'
        ]);

        $user = $this->model->authUser($post->username);
        if(empty($user))
        {
            return redirect()->route('login.form')->with('alert', 'Login gagal, mohon cek kembali username dan password anda');
        }elseif(password_verify($post->password, $user->password))
        {
            //masuk
            Auth::guard('dinas')->loginUsingId($user->id);
            $user->username = $post->username;
            $user->role = "dinas";
            $user = collect($user)->except('password');

            session(['user' => $user]);

            return redirect()->route('dinas.dashboard');
        }else
        {
            return redirect()->route('login.form')->with('alert', 'Login gagal, mohon cek kembali username dan password anda');
        }
    }

    public function logout()
    {
        Auth::guard('dinas')->logout();

        return redirect()->route('login.form');
    }
}

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

        $get_user = $this->model->authUser($post->username, $post->password);

        if(empty($get_user))
        {
            return redirect()->route('login.form')->with('alert', 'Login gagal, mohon cek kembali username dan password anda');
        }elseif(!empty($get_user['dinas']))
        {
            if(password_verify($post->password, $user->password))
            {
                //masuk
                $user = $get_user['dinas'];
                Auth::guard('dinas')->loginUsingId($get_user->id);
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
        elseif(!empty($get_user['admindinas']))
        {
                //masuk
                $user = $get_user['admindinas'];
                Auth::guard('admindinas')->loginUsingId($get_user['admindinas']->nip);
                $user->username = $post->username;
                $user->nama = $user->gdp." ".$user->nama." ".$user->gdb;
                $user->role = "admindinas";
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

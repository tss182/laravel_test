<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index()
    {
        return view("auth.login");
    }

    public function login(Request $req)
    {
        $req->validate([
            'email' => 'required|email',
            'password'=> 'required|min:5'
        ],[
            'email.required'=>'email harus di isi',
            'email.email'=>'email tidak valid',
            'password.required' => 'password harus di isi',
            'password.min' => 'minimal password 5 karkater'
        ]);
        $credentials = [
            'email' => $req->email,
            'password' => $req->password
        ];
        $remember = $req->input('remember');

        if (Auth::attempt($credentials,$remember)) {
            $req->session()->regenerate();

            return redirect()->intended('');
        }

        return back()->withErrors([
            'email' => 'email atau password yang anda masukan salah.',
        ])->onlyInput('email');

    }

    public function logout(Request $req)
    {
        Auth::logout();

        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return to_route('login.index');
    }
}

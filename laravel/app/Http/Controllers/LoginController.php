<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login(){
        if(auth::check()) {
            return redirect('home');
        }else{
            return view('login');
        }
    }

    public function actionlogin(Request $request){
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];
        if(auth::attempt($data)) {
            return redirect('home');
        }else{
            Session::FLASH('error', 'Email atau Password Salah');
            return redirect('/');
        }
    }

    public function actionlogout(){
        Auth::logout();
        return redirect('/');
    }
}

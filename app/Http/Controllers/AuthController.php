<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('sesi.login');
    }
    
public function login (request $request){

    $validator = Validator::make($request->all(), [
        'email' => 'required',
        'password' => 'required',
    ]);

    [
        'email'=>'Email wajib diisi',
        'Password'=>'Password wajib diisi',
    ];

    $validator = [
        'email'=>$request->email,
        'Password'=>$request->password,
    ];
    if (Auth::attempt($validator)) {
        return redirect('skpd')->with('success','Berhasil login'); 
    }
    else {
        return redirect('skpd')->with('error','email dan password yang diasukan tidak valid');
    }
}
public function logout(){
    Auth::logout();   

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/login');
}
}


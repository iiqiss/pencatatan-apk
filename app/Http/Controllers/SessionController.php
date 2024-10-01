<?php

namespace App\Http\Controllers;
use App\Models\data;
use App\Models\skpdModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    public function index(){
        return view('sesi.index');
    }
    public function login(Request $request){
        Session::flash('email',$request->email);

        $request->validate ([
            'email' => 'required',
            'password'=> 'required',
        ]);
        $infologin =[
            'email'=>$request->email,
            'password' =>$request->password
        ];
        if (Auth::attempt($infologin)) {
            return redirect()->route('dashboard');
        }
        else{
            return redirect('login');
        }
        
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('index');
    }
}

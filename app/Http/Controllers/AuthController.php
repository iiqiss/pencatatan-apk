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
       //  Login::flash('email',$request->email);

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
        return redirect()->route('dashboard'); 
    }
    else { 
        return redirect()->route('login');
    }
}
//  public function logout(){
// //     Auth::guard('web')->logout();   

// //     $request->session()->invalidate();

//     return redirect()->route('/login');
// }
 









}


<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Pengelola;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PengelolaController extends Controller
{
    public function index(){
        return view('sesi/index');
    }
}

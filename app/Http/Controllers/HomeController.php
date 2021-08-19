<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        
        return view( \Auth::user()->role == User::ROLE_ADMIN ? 'admin.home' : 'user.home' );
    }
}

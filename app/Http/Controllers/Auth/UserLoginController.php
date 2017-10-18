<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:user');
    }

    public function showLoginForm()
    {
        return view('global.login');
    }

    public function login()
    {
        return true;
    }
}

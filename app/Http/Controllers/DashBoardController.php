<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    public function __construct()
    {
      
    }

    public function index()
    {
        if(empty(Auth::user()))
        {
            return redirect(route('auth.login_form'));
        }
        return view('dashboard');
    }
}

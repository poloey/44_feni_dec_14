<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SigninController extends Controller
{
  public function login()
  {
    return view('signin');
  }
  public function store(Request $r)
  {

  }
  public function logout()
  {
    
  }
}

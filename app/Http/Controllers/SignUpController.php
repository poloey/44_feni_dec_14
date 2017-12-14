<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignUpController extends Controller
{
  public function register () {
    return view('signup');
  }
  public function store (Request $r) {

  }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
  public function index()
  {
    return view('welcome');
  }

  public function contact()
  {
    // return 'contact'; view関数を使わずにテキストを返す
    return view('contact');
  }
    //
}

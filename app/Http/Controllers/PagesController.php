<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller {
  public function about() {
    $first_name = 'Luke';
    $last_name = 'Skywalker';
    return view('pages.about', compact('first_name', 'last_name')); # conpact関数で渡す
    // $data = [];
    // $data['first_name'] = 'Luke';
    // $data['last_name'] = 'Skywalker';
    // return view('pages.about', $data); # 配列を渡す

    // return view('pages.about'); # [2]views/pagesからaboutを指定
  }
}

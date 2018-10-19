<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function root()
  {
    phpinfo();die;
    return view('pages.root');
  }
}

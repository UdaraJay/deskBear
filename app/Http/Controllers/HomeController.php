<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(){
      if(env('APP_INSTALLED') == false){
        return view('install.index');
      } else {
        return view('index');
      }
    }
}

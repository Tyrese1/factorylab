<?php

namespace App\Http\Controllers;

use Illuminate\Database\Capsule\Manager as Capsule;

class HomeController extends Controller {

    /**
     * This is the index page.
     *
     * @return string
     */
    public function index()
    {
        return view('index', [
            'sitename' => config('app.name')
        ]);
    }

    public function about()
    {
        return view('about', [
            'sitename' => config('app.name')
        ]);
    }

    public function pricing()
    {
        return view('pricing', [
            'sitename' => config('app.name')
        ]);
    }

    public function contributors()
    {
        return view('contributors', [
            'sitename' => config('app.name')
        ]);
    }

    public function contact()
    {
        return view('contact', [
            'sitename' => config('app.name')
        ]);
    }

    public function download(){
      return view('download',[
        'sitename'=>config('app.name')
      ]);
    }

    public function login()
    {
        return view('login', [
            'sitename' => config('app.name')
        ]);
    }

    /**
     * This is the demo page.
     *
     * @return string
     */
    public function demo()
    {
        return view('demo', [
            'sitename' => config('app.name')
        ]);
    }
  }

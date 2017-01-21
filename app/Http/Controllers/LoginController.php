<?php

namespace App\Http\Controllers;

use Illuminate\Database\Capsule\Manager as Capsule;

class LoginController extends Controller {

    /**
     * This is the login page.
     *
     * @return string
     */
    public function login()
    {
        return view('login', [
            'sitename' => config('app.name')
        ]);
    }

}
<?php

namespace App\Http\Controllers;

use Illuminate\Database\Capsule\Manager as Capsule;

class ContactController extends Controller {

    /**
     * This is the about page.
     *
     * @return string
     */
    public function contact()
    {
        return view('contact', [
            'sitename' => config('app.name')
        ]);
    }
}

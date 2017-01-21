<?php

namespace App\Http\Controllers;

use Illuminate\Database\Capsule\Manager as Capsule;

class AboutController extends Controller {

    /**
     * This is the about page.
     *
     * @return string
     */
    public function about()
    {
        return view('about', [
            'sitename' => config('app.name')
        ]);
    }
}

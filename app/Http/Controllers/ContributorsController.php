<?php

namespace App\Http\Controllers;

use Illuminate\Database\Capsule\Manager as Capsule;

class ContributorsController extends Controller {

    /**
     * This is the odia page.
     *
     * @return string
     */
    public function contributors()
    {
        return view('contributors', [
            'sitename' => config('app.name')
        ]);
    }
}

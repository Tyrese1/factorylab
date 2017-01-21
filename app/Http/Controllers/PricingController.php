<?php

namespace App\Http\Controllers;

use Illuminate\Database\Capsule\Manager as Capsule;

class PricingController extends Controller {

    /**
     * This is the about page.
     *
     * @return string
     */
    public function pricing()
    {
        return view('pricing', [
            'sitename' => config('app.name')
        ]);
    }

    public function download(){
      return view('download',[
        'sitename'=>config('app.name')
      ]);
    }
}

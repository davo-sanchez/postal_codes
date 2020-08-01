<?php

namespace App\Http\Controllers;

use App\PostalCode;

class PostalCodeController extends Controller
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

    public function isFrom($code){

        $postal_code = new PostalCode($code);

        return response()->json($postal_code->showInfo());

    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class TestFunctionController extends Controller
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

    public function count() {
        return response("HiHi");
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Homepage
     *
     */
    public function show()
    {
        return view('mainlayout');
    }
}
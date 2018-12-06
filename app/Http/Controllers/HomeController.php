<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends MainController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     *
     *
     *
     */
    public function index()
    {
        echo "<a href='/products'>Products</a><br>";
    }
}

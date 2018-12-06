<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\ProductHelper;
use App\Helpers\ProductVariant;
use App\Models\Product\Variation;
use App\Models\Brand;

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

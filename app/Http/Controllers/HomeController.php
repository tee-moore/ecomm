<?php

namespace App\Http\Controllers;

use App\Helpers\ProductSimple;
use App\Helpers\ProductVariant;
use App\Models\Product\Variation;
use Illuminate\Http\Request;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ProductSimple $product)
    {
        $variation = Variation::find(5);
        foreach ($variation->taxonomies as $taxonomy) {
            echo $taxonomy->name.'-'.$taxonomy->type.'<br>';
        }
    }
}

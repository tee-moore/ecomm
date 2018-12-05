<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\ProductSimple;
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
        $brands = Brand::select(['name','slug'])->get();
        foreach ($brands as $brand) {
            echo "<a href='brand/$brand->slug'>$brand->name</a><br>";
        }
    }
}

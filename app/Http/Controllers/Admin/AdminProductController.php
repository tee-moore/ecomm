<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Helpers\AbstractClass\ProductAbstract;

class AdminProductController extends AdminMainController
{
    /**
     * The products repository instance.
     */
    protected $products;

    /**
     * Create a new controller instance.
     *
     * @param  ProductAbstract  $products
     * @return void
     */
    public function __construct(ProductAbstract $products)
    {
        parent::__construct();

        $this->products = $products;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->products->getAll();
        return view('admin.products')->with('products', $products);
    }
}

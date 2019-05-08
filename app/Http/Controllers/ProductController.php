<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Contracts\ProductInterface;


class ProductController extends MainController
{
    /**
     * The products repository instance.
     */
    protected $products;

    /**
     * ProductController constructor.
     * @param ProductInterface $products
     */
    public function __construct(ProductInterface $products)
    {
        parent::__construct();

        $this->products = $products;
//        $this->products = app()->make(ProductAbstract::class);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->products->getAll();
        return view('front.products')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param str $slug
     * @return \Illuminate\Http\Response
     */
    public function show(string $slug)
    {
        $product = $this->products->getOneBySlug($slug);
        return view('front.product')->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

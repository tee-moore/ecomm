<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Contracts\SpecificationInterface;
use Illuminate\Http\Request;
use App\Helpers\Contracts\ProductInterface;
use App\Models\Product\Product;
use Illuminate\Support\Facades\Auth;

class AdminProductController extends AdminMainController
{
    /**
     * The productHelper instance.
     */
    protected $product;

    /**
     * The specificationHelper instance.
     */
    protected $specification;

    /**
     * AdminProductController constructor.
     * @param ProductInterface $instance
     */
    public function __construct(ProductInterface $product, SpecificationInterface $specification)
    {
        parent::__construct();

        $this->product = $product;
        $this->specification = $specification;
    }

    /**
     * Display a listing of the products.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data = [
            'products' => $this->product->getAll(),
        ];

        if (view()->exists('admin.products'))
        {
            return view('admin.products')->with($data);
        }
    }

    /**
     * Show the form for creating a new product.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $data = [
            'user_id'        => Auth::user()->id,
            'brand_id'       => Auth::user()->brand->id,
            'specifications' => $this->specification->getAll(),
            'product_type'   => [ 0 => 'Simple', 1 => 'Variant' ],
            'product_status' => [ 0 => 'In stock', 1 => 'Out of stock' ],
        ];

        if (view()->exists('admin.add_product'))
        {
            return view('admin.add_product')->with($data);
        }
    }

    /**
     *  Store a newly created product in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $product = new Product();
        $this->product->create($request, $product);

        return redirect()->route('admin.product.edit', $product->id);
     }

    /**
     * Display the specified product.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified product.
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $product = $this->product->getOneById($id);

        $data = [
            'product' => $product,
            'specifications' => $this->specification->getByProduct($product),
        ];

        if (view()->exists('admin.edit_product'))
        {
            return view('admin.edit_product')->with($data);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $this->product->update($request, $id);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $this->product->delete($id);
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product\Variation;
use Illuminate\Http\Request;
use App\Helpers\AbstractClass\ProductAbstract;
use App\Models\Product\Product;
use App\Models\Product\Specification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
        $preparedListProducts = $this->products->prepareProductList($products);
        if (view()->exists('admin.products'))
        {
            return view('admin.products')->with('products', $preparedListProducts);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $user_id = $user->id;

        //TEMP need add permission for roles
        if($user_id == 1) {
            return "You do not have permission to edit this brand";
        } else {
            $brand_id = $user->brand->id;
        }

        $specifications = $this->products->getSpecifications();

        return view('admin.product')->with(['user_id' => $user_id, 'brand_id' => $brand_id, 'specifications' => $specifications]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $product = new Product();
        $product->name         = $request['product']['name'];
        $product->main_sku     = $request['product']['main_sku'];
        $product->product_type = $request['product']['product_type'];
        $product->description  = $request['product']['description'];
        $product->gallery      = $request['product']['gallery'];
        $product->brand_id     = $request['product']['brand_id'];
        $product->user_id      = $request['product']['user_id'];
        $product->save();

        foreach ($input['variation'] as $variationData){
            $specificationsData = array_pop($variationData);
            $variation = new Variation($variationData);
            $product->variations()->save($variation);
            foreach ($specificationsData as $key => $value){
                $specifications = new Specification(['attribute_id' => $key, 'value_id' => $value]);
                $variation->specifications()->save($specifications);
            }
        }

        return redirect()->route('admin.product.edit', $product->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = $this->products->getOneById($id);
        if($this->products->hasVariations($product)){
            $specifications = $this->products->getSpecifications($product);
        } else {
            $specifications = '';
        }

        return view('admin.product')->with(['product' => $product, 'specifications' => $specifications]);
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
        $i = 0;
        $user = Auth::user();
        $brand = $user->brand->slug;
        $input = $request->all();
//        dd($input);
        $files = $request->file();
        $product = $this->products->getOneById($id);
        $product->update($input['product']);

        foreach ($input['variation'] as $variation) {
            $name = $variation['sku'];
            foreach ($variation as $key => $value) {
                if($key == 'specifications'){
                    $j = 0;
                    foreach ($value as $key => $value){
                        $product->variations[$i]->specifications[$j]->attribute_id = $key;
                        $product->variations[$i]->specifications[$j]->value_id = $value;
                        $j++;
                    }
                } elseif($key == 'image'){
                    $file = $files['variation'][$i]['image'];
                    $ext = $file->getClientOriginalExtension();
                    $path = $file->storeAs('products/'.$brand, $name.'.'.$ext);
                    $path = str_replace('products/','', $path);
                    $product->variations[$i]->image = $path;
                } else {
                    $product->variations[$i]->$key = $value;
                }
            }
            $i++;
            $product->push();
        }

        return redirect()->back();
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = $this->products->getOneById($id);
        $product->deleted = 1;
        $product->save();
        return redirect()->back();
    }
}

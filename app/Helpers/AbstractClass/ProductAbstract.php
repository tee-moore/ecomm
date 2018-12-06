<?php
/**
 * Created by PhpStorm.
 * User: tee
 * Date: 03.12.18
 * Time: 19:06
 */

namespace App\Helpers\AbstractClass;

use App\Models\Product\Product;
use App\Models\Brand;

abstract class ProductAbstract
{
    public function getAll()
    {
//        return Product::with(['variations.specifications.attribute', 'variations.specifications.value'])->get();
        return Brand::with(['products.variations.specifications.attribute', 'products.variations.specifications.value'])->get();
    }

    public function getList()
    {
        return Product::all();
    }

    public function getName($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        return $product->name;
    }

    abstract public function getType();
}

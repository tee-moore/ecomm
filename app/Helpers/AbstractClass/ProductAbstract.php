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
        return Product::with(['variations.specifications.attribute', 'variations.specifications.value'])->get();
    }

    public function getOne($slug)
    {
        return Product::with(['variations.specifications.attribute', 'variations.specifications.value'])->where('slug', $slug)->firstOrFail();
    }
}

<?php

namespace App\Helpers\Contracts;

use Illuminate\Http\Request;
use App\Models\Product\Product;

interface SpecificationInterface
{
    public function getAll();
    public function getByProduct(Product $product);
}

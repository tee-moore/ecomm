<?php

namespace App\Helpers\Contracts;

use Illuminate\Http\Request;
use App\Models\Product\Product;

interface ProductInterface
{
    public function getAll();
    public function getOneById($id);
    public function getOneBySlug($slug);
    public function create(Request $request, Product $product);
    public function update(Request $request, $id);
    public function delete($id);
    public function getAllWithDeleted();
    public function hasVariations($product);
    public function prepareProductList($products);
    public function prepareProduct($product);
    public function getMinMaxVariatonQuantity($product);
    public function getMinMaxVariatonPrice($product);
    public function getFirstVariationImage($product);
    public function getProductsImageFolderPath();
    public function getDefaultProductImage();
    public function getCurrency();
    public function getMeasure();
}
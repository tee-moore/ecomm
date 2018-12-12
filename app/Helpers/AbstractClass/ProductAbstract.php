<?php

namespace App\Helpers\AbstractClass;

use App\Models\Product\Product;
use App\Models\Product\Attribute;
use App\Models\Product\AttributeValue;

abstract class ProductAbstract
{
    /**
     * @param $slug
     * @return Product|\Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model
     */
    public function getOneById($id)
    {
        return Product::with(['variations.specifications.attribute', 'variations.specifications.value'])->where('id', $id)->firstOrFail();
    }

    /**
     * @param $slug
     * @return Product|\Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model
     */
    public function getOneBySlug($slug)
    {
        return Product::with(['variations.specifications.attribute', 'variations.specifications.value'])->where('slug', $slug)->firstOrFail();
    }

    /**
     * @return Product[]|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection3
     */
    public function getAll()
    {
        return Product::with(['variations.specifications.attribute', 'variations.specifications.value'])->where('deleted', 0)->get();
    }

    /**
     * @return Product[]|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection3
     */
    public function getAllWithDeleted()
    {
        return Product::with(['variations.specifications.attribute', 'variations.specifications.value'])->get();
    }

    /**
     * @param $products
     * @return bool
     */
    public function hasVariations($product){
        return count($product->variations);
    }

    /**
     * @param $products
     * @return mixed
     */
    public function prepareProductList($products)
    {
        foreach ($products as $product) {

            if (empty($product->gallery)) {
                $image =   $this->getFirstVariationImage($product);
                $default = $this->getDefaultProductImage();
                $product->gallery = ($image) ? $image : $default;
            }
            $product->gallery = $this->getProductsImageFolderPath() . $product->gallery;

            if (empty($product->price)) {
                $product->price = $this->getMinMaxVariatonPrice($product);
            }

            if (empty($product->quantity)) {
                $product->quantity = $this->getMinMaxVariatonQuantity($product);
            }

            $product->product_type = ($product->product_type == 1) ? 'Variant' : 'Simple';

            $product->disabled = ($product->disabled == 1) ? 'Yes' : 'No';

        }

        return $products;
    }

    public function getSpecifications($product = null){

        if($product == null){
            $attributes = Attribute::all();
            foreach ($attributes as $attribute){
                $values = AttributeValue::where( 'attribute_id',$attribute->id)->get();
                foreach ($values as $value){
                    $specifications[$attribute->id][$attribute->name][$value->id] = $value->value;
                }
            }

            return $specifications;
        }

        foreach ($product->variations as $variation){
            foreach ($variation->specifications as $specification){
                $attribute_id[] = $specification->attribute_id;
            }
        }

        $attribute_id = array_unique($attribute_id);

        foreach ($attribute_id as $id){
            $attribute_name = Attribute::where('id', $id)->firstOrFail();
            $attribute_values = AttributeValue::where('attribute_id', $id)->get();
            foreach ($attribute_values as $value){
                $specifications[$attribute_name->name][$value->id] = $value->value;
            }
        }
        return $specifications;
    }

    public function getMinMaxVariatonQuantity($product){
        $min = $product->variations[0]->quantity;
        $max = $product->variations[0]->quantity;
        $measure = $this->getMeasure();

        foreach ($product->variations as $variation) {
            if($variation->quantity > $max){
                $max = $variation->quantity;
            }
            if($variation->quantity < $min){
                $min = $variation->quantity;
            }
        }

        if($min == $max){
            return $min.$measure;
        } else {
            return $min . '-' . $max.$measure;
        }
    }

    public function getMinMaxVariatonPrice($product){
        $min = $product->variations[0]->price;
        $max = $product->variations[0]->price;
        $currency = $this->getCurrency();

        foreach ($product->variations as $variation) {
            if($variation->price > $max){
                $max = $variation->price;
            }
            if($variation->price < $min){
                $min = $variation->price;
            }
        }

        if($min == $max){
            return $min.$currency;
        } else {
            return $min . '-' . $max.$currency;
        }
    }

    /**
     * @param $product
     * @return mixed
     */
    public function getFirstVariationImage($product){
        if($product->variations){
            foreach ($product->variations as $variation) {
                if($variation->image != null){
                    return $variation->image;
                }
                return false;
            }
        }

        return false;
    }

    /**
     * @return \Illuminate\Config\Repository|mixed
     */
    public function getProductsImageFolderPath(){
        return config('settings.folder.products');
    }

    /**
     * @return \Illuminate\Config\Repository|mixed
     */
    public function getDefaultProductImage(){
        return config('settings.defaultProductImage');
    }

    /**
     * @return string
     */
    public function getCurrency(){
        return ' грн';
    }

    /**
     * @return string
     */
    public function getMeasure(){
        return ' шт';
    }
}

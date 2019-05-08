<?php

namespace App\Helpers;

use App\Helpers\Contracts\ProductInterface;
use App\Models\Product;
use App\Models\Attribute;
use App\Models\AttributeValue;
use App\Models\Variation;
use App\Models\Specification;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class ProductHelper implements ProductInterface
{
    /**
     * @return Product[]|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getAll()
    {
        return Product::with(['variations.specifications.attribute', 'variations.specifications.value'])->get();
    }

    /**
     * @param $id
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


    public function create(Request $request, Product $product){

        $product->name         = $request['product']['name'];
        $product->slug         = Str::slug($request['product']['name']);
        $product->main_sku     = $request['product']['main_sku'];
        $product->product_type = $request['product']['product_type'];
        $product->description  = $request['product']['description'];
        $product->gallery      = (isset($request['product']['gallery'])) ? $request['product']['gallery']: null;
        $product->brand_id     = $request['product']['brand_id'];
        $product->user_id      = $request['product']['user_id'];

        $product->save();

        $input = $request->all();
        foreach ($input['variation'] as $variationData){
            $specificationsData = array_pop($variationData);
            $variation = new Variation($variationData);
            $product->variations()->save($variation);
            foreach ($specificationsData as $key => $value){
                $specifications = new Specification(['attribute_id' => $key, 'value_id' => $value]);
                $variation->specifications()->save($specifications);
            }
        }
    }

    public function update(Request $request, $id){
        $i = 0;
        $user = Auth::user();
        $brand = $user->brand->slug;
        $input = $request->all();
        $files = $request->file();
        $product = $this->getOneById($id);
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
    }

    public function delete($id){
        $product = $this->getOneById($id);
        $product->deleted = 1;
        $product->save();
    }

    /**
     * @return Product[]|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection3
     */
    public function getAllWithDeleted()
    {
        return Product::with(['variations.specifications.attribute', 'variations.specifications.value'])->get();
    }

    /**
     * @param $product
     * @return bool
     */
    public function hasVariations($product){
        return count($product->variations);
    }

    /**
     * @param $products
     *
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

    /**
     * @param $product
     * @return mixed
     */
    public function prepareProduct($product){

        foreach ($product->variations as $variation){
            if (empty($variation->image)) {
                $variation->image = $this->getDefaultProductImage();
            }    else {
                $variation->image = $this->getProductsImageFolderPath() . $variation->image;
            }
        }

        return $product;
    }

    public function getAllSpecifications(){
        return Specification::with(['attribute', 'value'])->get()->toArray();
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
<?php

namespace App\Helpers;

use App\Helpers\Contracts\SpecificationInterface;
use App\Models\Product;
use App\Models\Specification;
use App\Models\Attribute;
use App\Models\AttributeValue;

class SpecificationHelper implements SpecificationInterface
{
    /**
     * @return mixed
     */
    public function getAll()
    {
        $attributes = Attribute::all();
        return $this->getSpecificationArray($attributes);
    }

    /**
     * @param Product $product
     * @return mixed
     */
    public function getByProduct(Product $product)
    {

        $attributes = collect([]);
        foreach ($product->variations as $variation){
            foreach ($variation->specifications as $specification){

                $id = $specification->attribute->id;
                $check = $attributes->where('id', $id);

                if($check->count() == 0){
                    $attributes = $attributes->push($specification->attribute);
                }
            }
        }

        return $this->getSpecificationArray($attributes);
    }

    /**
     * @param $attributes
     * @return mixed
     */
    public function getSpecificationArray($attributes)
    {
        foreach ($attributes as $attribute) {
            $values = AttributeValue::where( 'attribute_id',$attribute->id)->get();
            foreach ($values as $value){
                $specifications[$attribute->id][$attribute->name][$value->id] = $value->value;
            }
        }

        return $specifications;
    }
}
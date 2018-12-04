<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model
{
    use Sluggable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'slug', 'shop_id', 'author_id', 'description', 'gallery', 'disabled', 'deleted', 'product_type'
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function variations()
    {
        return $this->hasMany(Variation::class);
    }

    public function getProducts(Product $product)
    {

    }
}

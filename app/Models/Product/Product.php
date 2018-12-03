<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";

    protected $fillable = [
        'name', 'slug', 'shop_id', 'author_id', 'description', 'gallery', 'disabled', 'deleted', 'product_type'
    ];

    /**
     * Get the variations for the blog post.
     */
    public function variations()
    {
        return $this->hasMany(Variation::class);
    }

    public function getProducts(Product $product)
    {

    }
}

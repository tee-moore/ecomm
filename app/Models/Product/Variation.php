<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;

class Variation extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id', 'sku', 'image', 'price', 'discount_price', 'quantity', 'disabled', 'deleted'
    ];

    /**
     * Get the product that owns the variation.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * Get the specifications for the variation.
     */
    public function  specifications()
    {
        return $this->hasMany(Specification::class);
    }

    /**
     * The taxonomies that belong to the variation.
     */
    public function taxonomies()
    {
        return $this->belongsToMany(Taxonomy::class);
    }
}

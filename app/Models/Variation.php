<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Variation extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id', 'sku', 'price', 'discount_price', 'quantity', 'description', 'active', 'status'
    ];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get the product associated with the variation.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * Get the specifications associated with the variation.
     */
    public function  specifications()
    {
        return $this->hasMany(Specification::class);
    }

    /**
     * Get the taxonomies associated with the variation.
     */
    public function taxonomies()
    {
        return $this->belongsToMany(Taxonomy::class);
    }

    /**
     * Get the media associated with the variation.
     */
    public function media()
    {
        return $this->morphMany(Media::class, 'parent');
    }
}

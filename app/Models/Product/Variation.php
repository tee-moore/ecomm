<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;

class Variation extends Model
{
    protected $table = 'variations';

    protected $fillable = [
        'product_id', 'sku', 'image', 'price', 'discount_price', 'quantity', 'disabled', 'deleted'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function  specifications()
    {
        return $this->hasMany(Specification::class);
    }
}

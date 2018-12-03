<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;

class Specification extends Model
{
    protected $table = 'specifications';

    protected $fillable = [
        'variation_id', 'attribute_id', 'value_id'
    ];

    public function variation()
    {
        return $this->belongsTo(Variation::class);
    }

    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }

    public function value()
    {
        return $this->belongsTo(AttributeValue::class);
    }
}

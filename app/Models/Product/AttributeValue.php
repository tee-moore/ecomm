<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;

class AttributeValue extends Model
{
    protected $table = 'attribute_values';

    protected $fillable = [
        'attribute_id', 'value'
    ];

    public function specifications()
    {
        return $this->hasMany(Specification::class);
    }
}

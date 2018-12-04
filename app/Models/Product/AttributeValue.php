<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;

class AttributeValue extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'attribute_id', 'value'
    ];

    /**
     * Get the specifications for the attribute value.
     */
    public function specifications()
    {
        return $this->hasMany(Specification::class);
    }
}

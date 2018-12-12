<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;

class AttributeValue extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'attribute_id', 'value'
    ];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get the specifications for the attribute value.
     */
    public function specifications()
    {
        return $this->hasMany(Specification::class);
    }
}

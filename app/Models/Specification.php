<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Specification extends Model
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
        'variation_id', 'attribute_id', 'value_id'
    ];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get the variation that owns the specification.
     */
    public function variation()
    {
        return $this->belongsTo(Variation::class);
    }

    /**
     * Get the attribute that owns the specification.
     */
    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }

    /**
     * Get the value that owns the specification.
     */
    public function value()
    {
        return $this->belongsTo(AttributeValue::class);
    }
}

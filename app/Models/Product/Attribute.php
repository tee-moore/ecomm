<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    protected $table = 'attributes';

    protected $fillable = [
        'name'
    ];

    public function specifications()
    {
        return $this->hasMany(Specification::class);
    }
}

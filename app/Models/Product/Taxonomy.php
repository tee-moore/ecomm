<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;

class Taxonomy extends Model
{
    protected $table = "taxonomies";

    protected $fillable = [
        'name', 'type', 'parent_id'
    ];

    public function variations()
    {
        return $this->belongsToMany(Variation::class);
    }
}

<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;

class Taxonomy extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'type', 'parent_id'
    ];

    /**
     * The variations that belong to the taxonomy.
     */
    public function variations()
    {
        return $this->belongsToMany(Variation::class);
    }
}

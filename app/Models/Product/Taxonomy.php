<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;

class Taxonomy extends Model
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
        'name', 'type', 'parent_id'
    ];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The variations that belong to the taxonomy.
     */
    public function variations()
    {
        return $this->belongsToMany(Variation::class);
    }
}

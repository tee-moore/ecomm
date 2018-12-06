<?php

namespace App\Models;

use App\Models\Product\Product;
use App\Models\User\User;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Brand extends Model
{
    use Sluggable;

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
        'name', 'slug', 'logo', 'description'
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    /**
     * Get the owner that owns the brand.
     */
    public function owner()
    {
        return $this->belongsTo(User::class, 'owner');
    }

    /**
     * Get the manager of the brand.
     */
    public function manager()
    {
        return $this->belongsTo(User::class, 'manager');
    }

    /**
     * Get the products for the shop.
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    /**
     * Get the specifications for the attribute.
     */
    public function specifications()
    {
        return $this->hasMany(Specification::class);
    }
}

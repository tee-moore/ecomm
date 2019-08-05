<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'sku',
        'brand_id',
        'gallery',
        'description',
        'product_type',
        'active',
        'status',
    ];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get the brand that associated with the product.
     */
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    /**
     * Get the variations associated with the product.
     */
    public function variations()
    {
        return $this->hasMany(Variation::class);
    }

    /**
     * Get the all pictures associated with the product.
     */
    public function gallery()
    {
        return $this->morphToMany(Media::class, 'attached_to', 'attachments')
            ->using(Attachment::class)
            ->withPivot('main', 'hover', 'order', 'options')->orderBy('order', 'asc');
    }

    /**
     * Get the main picture associated with the product.
     */
    public function mainPicture()
    {
        return $this->morphToMany(Media::class, 'attached_to', 'attachments')
            ->using(Attachment::class)
            ->wherePivot('main', true);
    }

    /**
     * Get the picture for hover effect associated with the product.
     */
    public function hoverPicture()
    {
        return $this->morphToMany(Media::class, 'attached_to', 'attachments')
            ->using(Attachment::class)
            ->wherePivot('hover', true);
    }
}

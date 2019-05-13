<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'alt',
        'url',
        'description',
        'type',
        'parent_id',
        'parent_type',
    ];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get the products associated with the media.
     */
    public function attachedToProducts()
    {
        return $this->morphedByMany(Product::class, 'attached_to', 'attachments');
    }

    /**
     * Get the variations associated with the media.
     */
    public function attachedToVariations()
    {
        return $this->morphedByMany(Variation::class, 'attached_to', 'attachments');
    }

    /**
     * Get the brands associated with the media.
     */
    public function attachedLogoTo()
    {
        return $this->morphedByMany(Brand::class, 'attached_to', 'attachments');
    }

    /**
     * Get the users associated with the media.
     */
    public function attachedAvatarTo()
    {
        return $this->morphedByMany(User::class, 'attached_to', 'attachments');
    }
}

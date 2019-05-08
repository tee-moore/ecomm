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
        'parent_type'
    ];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get the products|variations|brands|users associated with the media.
     */
    public function parent()
    {
        return $this->morphTo();
    }
}

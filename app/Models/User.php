<?php

namespace App\Models;

use App\Models\Product\Brand;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id', 'brand_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The model's default values for attributes = "USER".
     *
     * @var array
     */
    protected $attributes = [
        'role_id' => 4,
    ];


    /**
     * Get the brand record associated with the user as manager.
     */
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}

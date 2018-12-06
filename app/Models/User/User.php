<?php

namespace App\Models\User;

use App\Models\Brand;
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
        'name', 'email', 'password', 'role_id'
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
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'role_id' => 4,
    ];

    /**
     * Get the brand record associated with the user as ownre.
     */
    public function BrandOwner()
    {
        return $this->hasOne(Brand::class, 'owner');
    }

    /**
     * Get the brand record associated with the user as manager.
     */
    public function BrandManeger()
    {
        return $this->hasOne(Brand::class, 'manager');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class Company extends Authenticatable
{
    use HasFactory, HasRoles;

    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'password' => 'hashed',
    ];

    protected $guard_name = 'company';

    public function webinars()
    {
        return $this->hasMany(Webinar::class);
    }

    public function lowongans()
    {
        return $this->hasMany(Lowongan::class);
    }
}

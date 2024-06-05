<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Company extends Model
{
    use HasFactory, HasRoles;

    protected $guarded = ['id'];

    protected $guard_name = 'web';

    protected $casts = [
        'password' => 'hashed',
    ];
}

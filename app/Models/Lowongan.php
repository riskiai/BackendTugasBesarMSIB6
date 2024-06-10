<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    use HasFactory;

    // belongs to company
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}

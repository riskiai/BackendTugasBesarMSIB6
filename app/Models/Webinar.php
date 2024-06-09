<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Webinar extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];

    // belongs to company
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}

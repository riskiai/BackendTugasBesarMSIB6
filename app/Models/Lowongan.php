<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // belongs to company
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    // has many simpan lowongan
    public function simpanLowongans()
    {
        return $this->hasMany(SimpanLowongan::class);
    }

    // has many apply lowongan
    public function applyLowongans()
    {
        return $this->hasMany(ApplyLowongan::class);
    }
}

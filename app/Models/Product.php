<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function prices()
    {
        return $this->hasMany(Price::class);
    }

    public function model()
    {
        return $this->belongsTo(Model::class);
    }

    public function shops()
    {
        return $this->belongsToMany(Shop::class);
    }
}

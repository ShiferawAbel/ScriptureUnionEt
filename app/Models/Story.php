<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function carousels()
    {
        return $this->hasMany(Carousel::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}

<?php

namespace App\Models;
use App\Models\Image;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function image()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}

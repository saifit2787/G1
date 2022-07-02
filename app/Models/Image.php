<?php

namespace App\Models;
use App\Models\User;
use App\Models\Post;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

class Image extends Model
{
    use HasFactory;

    public function imageable()
    {
        return $this->morphTo();
    }

    // Relation::morphMap([
    //     'posts' => 'App\Post',
    //     'videos' => 'App\Video',
    // ]);
}

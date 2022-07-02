<?php

namespace App\Models;
use App\Models\Activity_feed;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public function accessComment()
    {
        
    return $this->morphTo(__FUNCTION__, 'imageable_type', 'imageable_id');
    }

}

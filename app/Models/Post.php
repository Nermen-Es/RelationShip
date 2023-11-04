<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Post extends Model
{
    use HasFactory;

    /**
     * Get all of the comments for the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

     //in Post table
    //foreign key( coments table) : post_id
    //local id  (Post table) : id
    public function comments(): HasMany
    {
        return $this->hasMany(Coment::class, 'post_id', 'id');
    }

    public function images()
    {
        return $this->morphMany(Images::class, 'imageable');
    }
}

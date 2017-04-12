<?php

namespace App;

use App\Post;
use App\Comment;


class Comment extends Model
{
    //
    public function post()
    {
      return $this->belongsTo(Post::class);
    }


    public function user()
    {
      return $this->belongsTo(User::class);
    }



}

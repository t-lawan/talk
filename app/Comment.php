<?php

namespace App;

use App\Post;
use App\Comment;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    //
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    
    public function post()
    {
      return $this->belongsTo(Post::class);
    }


    public function user()
    {
      return $this->belongsTo(User::class);
    }



}

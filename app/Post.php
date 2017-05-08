<?php

namespace App;

use App\Comment;
use Illuminate\Database\Eloquent\SoftDeletes;
class Post extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function comments()
    {
      return $this->hasMany(Comment::class);
    }

    public function addComment(Comment $comment)
    {
        $this->comments()->save($comment);
    }
}

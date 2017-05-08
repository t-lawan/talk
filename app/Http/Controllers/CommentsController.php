<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Comment;


class CommentsController extends Controller
{
    //
    public function store(Post $post)
    {
      $comment = new Comment(request(['body']));
      $comment->user_id = auth()->id();
      $post->addComment($comment);

      //redirect to page
      return back();
    }
}

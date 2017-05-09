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

      $this->validate(request(),[
        'body' => 'required'
      ]);

      $comment = new Comment(request(['body']));
      $comment->user_id = auth()->id();
      $post->addComment($comment);

      //redirect to page
      return back();
    }

    public function update(Comment $comment)
    {
      $this->validate(request(),[
        'body' => 'required'
      ]);

      $comment->body = request('body');
      $comment->save();
      return back();
    }

    public function destroy(Comment $comment)
    {
      $comment->delete();
      return back();
    }


}

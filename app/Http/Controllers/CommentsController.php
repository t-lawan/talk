<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;


class CommentsController extends Controller
{
    //
    public function store(Post $post)
    {
      $this->validate(request(),['body' => 'required']);
      $post->addComment(auth()->id(),request('body'));
      return $post->comments();
      //redirect to page
      return back();
    }
}

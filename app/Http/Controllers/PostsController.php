<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Image;



class PostsController extends Controller
{
    //

    public function __constructor()
    {
      $this->middleware('auth')->except(['index','show']);
    }

    public function index()
    {
      $posts = Post::orderBy('created_at','desc')->get();

      $images = Image::all();

      return view('posts.index',compact('posts','images'));
    }

    public function show(Post $post)
    {
      return view('posts.show',compact('post'));
    }


    public function store()
    {
      $this->validate(request(),[
        'body' => 'required',
        'private' => 'required'

      ]);

      auth()->user()->publish(new Post(request(['body','private'])));

      session()->flash('message', 'Your post was successfully uploaded');
      //redirect to page
      return redirect('/');
    }
}

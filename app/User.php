<?php

namespace App;


use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Post;
use App\Comment;
use App\Image;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','image_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts()
    {
      return $this->hasMany(Post::class);
    }

    public function comments()
    {
      return $this->hasMany(Comment::class);
    }
    public function image()
    {
       return $this->belongsTo(Image::class);
    }

    public function publish(Post $post)
    {
      $this->posts()->save($post);
    }


    public function edit(User $user)
    {
      $this->save($user);
    }
    //getters
    public function getid(User $user)
    {
      return $this->id;
    }




}

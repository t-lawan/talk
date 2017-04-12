<?php

namespace App;


use App\User;

class Image extends Model
{
    //
    public function users()
    {
      return $this->hasMany(User::class);
    }


}

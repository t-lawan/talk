<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth;
use App\Http\Requests\ChangeUserInfo;
use App\User;


class UsersController extends Controller
{
    //
    public function show(User $user)
    {
      return view('user.profile', compact('user'));
    }



    public function edit(User $user)
    {
      return view('user.settings',compact('user'));
    }



    public function update(ChangeUserInfo $request)
    {

        $user = auth()->user();
        $user->name = $request['name'];
        $user->email = $request['email'];

        if(!$request('password')== '')
        {
          $user->password = $request('password');
        }

        auth()->user()->edit($user);

        return back();
    }


}

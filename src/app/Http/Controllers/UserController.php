<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;

class UserController extends Controller
{
    public function register()
    {
        return view('register');   
    }

    public function login(UserRequest $request)
    {
        $user = $request->only(['name', 'email', 'password']);
        User::create($user);
        return view('login');

    }

    public function admin(UserRequest $request)
    {
        $user = $request->only(['email', 'password']);
        User::create($user);
        return view('login');
        return view('admin');
    }


}

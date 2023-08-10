<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create(){
        return view('register.create');
    }

    public function store(){

   
        $attributes = request()->validate([
            'name'=> 'required|min:3|max:7',
            'username'=> 'required|min:4|max:25|unique:users,username',
            'email'=> 'required|max:25|unique:users,email',
            'password'=> 'required:min:4|max:30'
        ]);


        $user = User::create($attributes);


        auth()->login($user);


        // session()->flash('success', 'Your account has been created Successfully!');


        return redirect('/')->with('success', 'Your account has been created Successfully!');


    }
}

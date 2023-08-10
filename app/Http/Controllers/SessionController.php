<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;

class SessionController extends Controller
{



    public function create(){
        return view('sessions.create');
    }

    public function store(Request $request){

        // Validate the request 
        $attributes = request()->validate([
            'email'=> 'required|email',
            'password'=> 'required'
        ]);


        // Based on the provided credentials
        if (!auth()->attempt($attributes)) {
            return back()
            ->withInput()
            ->withErrors(['error' => 'Your provided credentials does not Matched !']);
        }

        // Display an error toast with no title


        session()->regenerate();
        

        return redirect('/')->with('success', 'Welcome Back !');




    }
    
    public function destroy(){
        auth()->logout();


        return redirect('/')->with('success', 'Logged Out, Goodbye!');
    }


}

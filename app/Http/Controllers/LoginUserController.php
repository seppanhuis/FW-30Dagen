<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginUserController extends Controller
{
    public function create(){
        return view('auth.login');
    }

    public function store(){
        $validated = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(auth()->attempt($validated)){
            session()->regenerate();
            return redirect('/jobs');
        }

        return back()->withErrors(['email'=>'invalid credentials'])->onlyInput('email');
    }
}

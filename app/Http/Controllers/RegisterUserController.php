<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterUserController extends Controller
{
    public function create(){
        return view('auth.register');
    }

    public function store(){
        $validated = request()->validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed'
        ]);

        \App\Models\User::create([
            'email' => $validated['email'],
            'password' => bcrypt($validated['password'])
        ]);

        return redirect('/jobs');
    }
}

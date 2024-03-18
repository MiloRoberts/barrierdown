<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request; 
use Illuminate\Validation\ValidationException; 

class SessionController extends Controller
{
    public function create() {
        return view('login.create');
    }

    public function store() {
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (auth()->attempt($attributes)) {
            
            session()->flash('success', 'Welcome back.');
            return redirect('/');
        }

        throw ValidationException::withMessages([
            'email' => 'Your credentials could not be verified'
        ]);

        // return back()
        //     ->withInput()
        //     ->withErrors(['email' => 'Your credentials could not be verified']);
    }

    public function destroy() {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye');
    }
}
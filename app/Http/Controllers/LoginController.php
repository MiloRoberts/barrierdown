<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException; 

class LoginController extends Controller
{
    public function create() {
        return view('login.create');
    }

    public function store() {
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($attributes)) {
            request()->session()->regenerate();            
            session()->flash('success', 'Welcome back.');
            return redirect('/dashboard');
        }

        throw ValidationException::withMessages([
            'email' => 'Your credentials could not be verified'
        ]);

        // return back()
        //     ->withInput()
        //     ->withErrors(['email' => 'Your credentials could not be verified']);
    }

    public function destroy(Request $request) {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Goodbye');
    }
}

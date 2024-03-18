<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function create() {
        return view('register.create');
    }

    public function store() {
        $attributes = request()->validate([
            'username' => ['required','min:3','max:30', Rule::unique('user', 'username')],
            'email' => ['required','email','max:255', Rule::unique('user', 'email')],
            'password' => ['required','min:10','max:255']
        ]);

        $user = User::create($attributes);
        
        auth()->login($user);
        
        session()->flash('success', 'Your account has been created.');
        
        return redirect('/');
    }
}

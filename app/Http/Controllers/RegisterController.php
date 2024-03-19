<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        
        $this->insertUserLexeme($user);
        $this->insertUserGameSection($user);

        auth()->login($user);
        
        session()->flash('success', 'Your account has been created.');
        
        return redirect('/dashboard');
    }

    private function insertUserGameSection($user) {
        error_reporting(E_ERROR);
        try {
            $sqlQuery = "SELECT id FROM game_section;";
            $result = DB::select($sqlQuery);
            foreach($result as $row) {
                $sqlQuery = "INSERT INTO user_game_section(game_section_id, user_id) VALUES(" . $row->id . ", " . $user->id . ");";
                $loopResult = DB::statement($sqlQuery);
            }
        } catch (Exception $exceptionError) {
            echo $exceptionError->getMessage();
        }
    }

    private function insertUserLexeme($user) {
        error_reporting(E_ERROR);
        try {
            $sqlQuery = "SELECT id FROM lexeme;";
            $result = DB::select($sqlQuery);
            foreach($result as $row) {
                $sqlQuery = "INSERT INTO user_lexeme(user_id, lexeme_id) VALUES(" . $user->id . ", " . $row->id . ");";
                $loopResult = DB::statement($sqlQuery);
            }
        } catch (Exception $exceptionError) {
            echo $exceptionError->getMessage();
        }
    }
}

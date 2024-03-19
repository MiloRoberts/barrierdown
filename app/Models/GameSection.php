<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameSection extends Model
{
    use HasFactory;

    protected $fillable = [];
    protected $table = 'game_section';

    public $timestamps = false;

    public function game() {
        return $this->belongsTo(GameClass::class);
    }

    public function lexeme() {
        return $this->belongsToMany(LexemeClass::class);
    }

    public function user() {
        return $this->belongsToMany(User::class)
            ->withPivot('is_learning');
    }
}

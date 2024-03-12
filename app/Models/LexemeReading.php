<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LexemeReading extends Model
{
    use HasFactory;

    protected $fillable = [];
    protected $table = 'lexeme_reading';

    public $timestamps = false;

    public function lexeme() {
        return $this->hasMany(Lexeme::class);
    }
}

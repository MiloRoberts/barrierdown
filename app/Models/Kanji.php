<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kanji extends Model
{
    use HasFactory;

    protected $table = 'kanji';
    protected $fillable = [];
    
    public function kanji_characters() {
        return $this->belongsTo(KanjiCharacter::class);
    }

    public function kanji_meanings() {
        return $this->belongsTo(KanjiMeaning::class);
    }

    public function kanji_readings() {
        return $this->belongsTo(KanjiReading::class);
    }

    public function lexemes() {
        return $this->belongsToMany(LexemeClass::class);
    }
}

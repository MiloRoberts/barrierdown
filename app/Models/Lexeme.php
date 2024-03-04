<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lexeme extends Model
{
    use HasFactory;

    protected $table = 'lexeme';
    protected $fillable = [];

    public function lexeme_items() {
        return $this->belongsTo(LexemeItem::class);
    }

    public function lexeme_meanings() {
        return $this->belongsTo(LexemeMeaning::class);
    }
    
    public function lexeme_readings() {
        return $this->belongsTo(LexemeReading::class);
    }

    public function lexical_classes() {
        return $this->belongsToMany(LexicalClass::class);
    }

    public function kanji() {
        return $this->belongsToMany(KanjiClass::class);
    }

    public function games() {
        return $this->belongsToMany(Game::class);
    }

    public function users() {
        return $this->belongsToMany(User::class)
            ->withPivot('is_learning');
    }
}

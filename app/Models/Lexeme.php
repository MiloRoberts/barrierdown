<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lexeme extends Model
{
    use HasFactory;

    protected $table = 'lexeme';
    protected $fillable = [];

    public $timestamps = false;

    
    public function game_section() {
        return $this->belongsToMany(Game::class);
    }
    
    public function kanji() {
        return $this->belongsToMany(KanjiClass::class);
    }
    
    public function lexeme_item() {
        return $this->belongsTo(LexemeItem::class);
    }

    public function lexeme_meaning() {
        return $this->belongsTo(LexemeMeaning::class);
    }
    
    public function lexeme_reading() {
        return $this->belongsTo(LexemeReading::class);
    }

    public function lexical_class() {
        return $this->belongsToMany(LexicalClass::class);
    }
    
    public function user() {
        return $this->belongsToMany(User::class)
            ->withPivot('is_learning');
    }
}

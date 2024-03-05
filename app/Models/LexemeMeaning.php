<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LexemeMeaning extends Model
{
    use HasFactory;

    protected $fillable = [];
    protected $table = 'lexeme_meaning';

    public $timestamps = false;
    
    public function lexemes() {
        return $this->hasMany(Lexeme::class);
    }
}

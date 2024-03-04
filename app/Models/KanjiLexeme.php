<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KanjiLexeme extends Model
{
    use HasFactory;

    protected $fillable = [];
    protected $table = 'kanji_lexeme';
}

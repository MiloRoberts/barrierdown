<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameSectionLexeme extends Model
{
    use HasFactory;

    protected $fillable = [];
    protected $table = 'game_section_lexeme';

    public $timestamps = false;
}

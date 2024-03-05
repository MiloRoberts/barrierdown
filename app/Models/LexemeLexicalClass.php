<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LexemeLexicalClass extends Model
{
    use HasFactory;
    protected $fillable = [];
    protected $table = 'lexeme_lexical_class';

    public $timestamps = false;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LexemeItem extends Model
{
    use HasFactory;

    protected $fillable = [];
    protected $table = 'lexeme_item';

    public function lexemes() {
        return $this->hasMany(Lexeme::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LexicalClass extends Model
{
    use HasFactory;

    protected $fillable = [];
    protected $table = 'lexical_class';

    public $timestamps = false;

    public function lexemes() {
        return $this->belongsToMany(LexemeClass::class);
    }
}

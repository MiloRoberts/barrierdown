<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLexeme extends Model
{
    use HasFactory;

    protected $fillable = [];
    protected $table = 'user_lexeme';

    public $timestamps = false;
}

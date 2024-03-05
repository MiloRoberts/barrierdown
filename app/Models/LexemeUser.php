<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LexemeUser extends Model
{
    use HasFactory;

    protected $fillable = [];
    protected $table = 'lexeme_user';

    public $timestamps = false;
}

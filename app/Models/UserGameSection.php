<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserGameSection extends Model
{
    use HasFactory;

    protected $fillable = [];
    protected $table = 'user_game_section';

    public $timestamps = false;
}

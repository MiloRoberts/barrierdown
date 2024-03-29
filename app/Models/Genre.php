<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = [];
    protected $table = 'genre';

    public $timestamps = false;

    public function game() {
        return $this->belongsToMany(Game::class);
    }
}

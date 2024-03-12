<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VocabSize extends Model
{
    use HasFactory;

    protected $fillable = [];
    protected $table = 'vocab_size';

    public $timestamps = false;

    public function game() {
        return $this->hasMany(Game::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    use HasFactory;

    protected $fillable = [];
    protected $table = 'title';

    public function games() {
        return $this->hasMany(Game::class);
    }
}

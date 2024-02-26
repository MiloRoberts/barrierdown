<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    use HasFactory;

    protected $fillable = [];

    public function games() {
        return $this->hasMany(Game::class);
    }

    protected $table = 'platform';
}

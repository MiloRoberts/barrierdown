<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    use HasFactory;

    protected $fillable = [];
    protected $table = 'platform';

    public function games() {
        return $this->hasMany(Game::class);
    }
}

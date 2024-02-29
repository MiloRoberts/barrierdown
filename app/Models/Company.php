<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [];
    protected $table = 'company';

    public function game() {
        return $this->belongsToMany(Game::class)
            ->withPivot('is_developer', 'is_publisher');
    }
}
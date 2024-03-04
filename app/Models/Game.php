<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [];
    protected $table = 'game';

    public function platforms() {
        return $this->belongsTo(Platform::class);
    }
    
    public function titles() {
        return $this->belongsTo(Title::class);
    }

    public function companies() {
        return $this->belongsToMany(Company::class)
            ->withPivot('is_developer', 'is_publisher');
    }

    public function lexemes() {
        return $this->belongsToMany(LexemeClass::class);
    }

    public function users() {
        return $this->belongsToMany(User::class)
            ->withPivot('is_learning');
    }
}

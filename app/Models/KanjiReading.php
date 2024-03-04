<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KanjiReading extends Model
{
    use HasFactory;

    protected $fillable = [];
    protected $table = 'kanji_reading';

    public function kanji() {
        return $this->hasMany(Kanji::class);
    }
}

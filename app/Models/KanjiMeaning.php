<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KanjiMeaning extends Model
{
    use HasFactory;

    protected $fillable = [];
    protected $table = 'kanji_meaning';

    public $timestamps = false;

    public function kanji() {
        return $this->hasMany(Kanji::class);
    }
}

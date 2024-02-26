<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [];
    
    public function platform() {
        return $this->belongsTo(Platform::class);
    }
    
    public function title() {
        return $this->belongsTo(Title::class);
    }

    protected $table = 'game';
}

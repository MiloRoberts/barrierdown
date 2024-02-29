<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [];
    protected $table = 'game';

    public function platform() {
        return $this->belongsTo(Platform::class);
    }
    
    public function title() {
        return $this->belongsTo(Title::class);
    }

    public function company() {
        return $this->belongsToMany(Company::class)
            ->withPivot('is_developer', 'is_publisher');
    }
}

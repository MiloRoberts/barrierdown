<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [];
    protected $table = 'game';  

    public function developerCompany() {
        return $this->belongsToMany(Company::class, 'company_id', 'id');
    }

    public function difficulty() {
        return $this->belongsTo(Difficulty::class);
    }

    public function genre() {
        return $this->belongsToMany(Genre::class);
    }
    
    public function lexeme() {
        return $this->belongsToMany(LexemeClass::class);
    }

    public function platform() {
        return $this->belongsTo(Platform::class);
    }

    public function publisherCompany() {
        return $this->belongsTo(Company::class, 'company_id', 'as_publisher_company_id');
    }

    public function title() {
        return $this->belongsTo(Title::class);
    }

    public function user() {
        return $this->belongsToMany(User::class)
            ->withPivot('is_learning');
    }
}

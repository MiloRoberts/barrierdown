<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameDeveloperCompany extends Model
{
    use HasFactory;

    protected $fillable = [];
    protected $table = 'game_developer_company';

    public $timestamps = false;
}

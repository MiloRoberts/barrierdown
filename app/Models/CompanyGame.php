<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyGame extends Model
{
    use HasFactory;

    protected $fillable = [];
    protected $table = 'company_game';

    public $timestamps = false;

}

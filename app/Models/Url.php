<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Url extends Model
{
    protected $guarded = [];
    
    public static function generateShortUrl() {
        return Str::random(6);
    }
}

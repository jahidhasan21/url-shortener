<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Models\Scopes\FilterByUser;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Url extends Model
{
    protected $guarded = [];
    
    public static function generateShortUrl() {
        return Str::random(6);
    }
    public static function boot()
    {
        parent::boot();
        static::addGlobalScope(new FilterByUser);
    }
}

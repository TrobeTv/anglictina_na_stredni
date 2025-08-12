<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegionCity extends Model
{
    use HasFactory;

    protected $table = 'regions_cities';

    protected $fillable = [
        'region',
        'city',
    ];

    // Virtual "name" attribute for Filament/Eloquent
    public function getNameAttribute()
    {
        return "{$this->region}, {$this->city}";
    }
}

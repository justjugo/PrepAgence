<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    
    protected $fillable =
    [
        'sold',
        'code_postal',
        'adress',
        'city',
         'price',
         'floor',
         'bedrooms',
         'rooms',
         'surface',
         'description',
         'title',

    ];
}

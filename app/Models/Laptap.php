<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laptap extends Model
{
    use HasFactory;

    protected $function =
    [
        'name_lap_tap',
        'model',
        'price',
        'display_size',
        'ram',
        'storage',
        'cpu',
        'gpn',

    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'city',
        'secteur',
        'phone',
        'address',
        'objectifs',
    ];
}

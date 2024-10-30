<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gurux extends Model
{
    use HasFactory;


    protected $fillable = [
        'yunalish_id',
        'name',
        'kurs_id',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Talaba extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'gurux_id',
        'phone',
        'manzil_id',
    ];
}

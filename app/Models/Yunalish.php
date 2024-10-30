<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yunalish extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'fakulty_id',
    ];

    public function faculty()
    {
        return $this->belongsTo(Fakulty::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tabel_room extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'status',
        'roomType',
        'pricePerNights'
    ];
}

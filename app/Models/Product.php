<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    //untunk menhubungkan dengan database, menunjukan bahwa ketiga data tersebut fillable
    protected $fillable = [
        'title',
        'description',
        'price' 
    ];
}

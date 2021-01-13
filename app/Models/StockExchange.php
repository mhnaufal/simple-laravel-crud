<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StockExchange extends Model
{
    /* WE ARE NOT USING SOFT DELETE ANYMORE */
    /* BECAUSE IT MAKE THE DATA STICK */
    /* IN THE DATABASE */
    // use SoftDeletes; 
    
    use HasFactory;
    protected $fillable = [
        'name',
        'buy',
        'sell',
        'lot'
    ];
}

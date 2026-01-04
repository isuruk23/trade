<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coin extends Model
{
     protected $fillable = ['symbol', 'name', 'price', 'total_supply'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trade extends Model
{
   protected $fillable = [
        'user_id',
        'coin_id',
        'type',
        'amount',
        'margin',
        'leverage',
        'price',
        'close_price',
        'status',
        'profit_loss'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // ✅ Relation to Coin
    public function coin()
    {
        return $this->belongsTo(Coin::class);
    }
}

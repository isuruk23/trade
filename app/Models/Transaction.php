<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
     protected $fillable = [
        'user_id','type','currency','amount','wallet_address',
        'tx_reference','status','admin_note'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
   
}

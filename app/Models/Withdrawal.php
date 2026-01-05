<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Withdrawal extends Model
{
    protected $fillable = [
        'user_id','currency','amount',
        'wallet_address','status','admin_note'
    ];
}

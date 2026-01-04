<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KycSubmission extends Model
{
   protected $fillable = [
        'user_id','full_name','document_type','document_number',
        'document_front','document_back','selfie','status','admin_note'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

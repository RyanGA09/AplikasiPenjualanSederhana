<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ['buyer_id', 'total_price', 'status'];

    public function buyer()
    {
        return $this->belongsTo(User::class, 'buyer_id');
    }
}

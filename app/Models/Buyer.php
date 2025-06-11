<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    // protected $fillable = ['user_id', 'address', 'phone'];
    protected $fillable = ['name', 'email', 'address', 'phone'];
}

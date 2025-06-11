<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Authenticatable {
    use HasFactory, Notifiable;

    protected $fillable = ['name', 'email', 'password', 'role'];

    public function products() {
        return $this->hasMany(Product::class, 'seller_id');
    }

    public function isAdmin() {
        return $this->role === 'admin';
    }

    public function purchases() {
        return $this->hasMany(Purchase::class, 'buyer_id');
    }
}

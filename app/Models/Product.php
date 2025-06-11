<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'price', 'stock', 'seller_id'];

    public function seller() {
        return $this->belongsTo(User::class, 'seller_id');
    }

    public function purchaseItems() {
        return $this->hasMany(PurchaseItem::class);
    }
}

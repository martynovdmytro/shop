<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function address()
    {
        return $this->hasOne(Address::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}

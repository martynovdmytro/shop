<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function category()
    {

        return $this->belongsTo(Category::class);

    }

    public function attributes()
    {

        return $this->hasMany(Attribute::class);

    }

    public function getProduct($request)
    {

        return Product::all()->where('title', $request);

    }

}

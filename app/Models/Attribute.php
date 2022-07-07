<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;

    public function attribute_description()
    {
        return $this->hasMany(AttributeDescription::class, 'attribute_id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}

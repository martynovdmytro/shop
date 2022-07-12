<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'description', 'price', 'amount', 'image', 'category_id'];

    protected $guarded = [];

    public function category()
    {

        return $this->belongsTo(Category::class);

    }

    public function attributes()
    {

        return $this->hasMany(Attribute::class);

    }



}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name', 'brand_name', 'price', 'description'];

    protected static function boot()
    {
        parent::boot();

        static::created(function ($product) {
            $price = $product->price;
            $product->rs = $price * 80;
            $product->save();
        });

        static::updated(function ($product) {
            $price = $product->price;
            $product->rs = $price * 80;
            $product->updateQuietly();
        });
    }
}

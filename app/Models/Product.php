<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
       'status',
       'name',
       'sku',
       'price',
       'special_price',
       'special_price_from',
       'special_price_to',
       'category',
       'short_description',
       'description',
       'url_key'
    ];

    public function categories() {
        return $this->belongsToMany(Category::class, 'product_has_category');
    }
}

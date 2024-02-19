<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $with = ['images'];

    protected $fillable = [
        'name',
        'price',
        'sale_price',
        'quantity',
        'status',
        'on_sale',

        'slug',
        'dimensions',
        'sku',

        'long_description',
        'short_description',
        'material_finish',

        'meta_title',
        'meta_keyword',
        'meta_description',
    ];

    public function images():HasMany{
        return $this->hasMany(ProductImage::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ProductCategory;

class Product extends Model
{

    protected $fillable = ['name', 'description', 'price', 'product_category_id', 'image', 'stock'];
    
    public function category() {
        return $this->belongsTo(ProductCategory::class);
    }
}

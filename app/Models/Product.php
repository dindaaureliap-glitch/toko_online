<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model // Ubah 'is' menjadi 'extends'
{
    use HasFactory;

    // Menentukan primary key kustom
    protected $primaryKey = 'product_id';

    public $incrementing = true;
    protected $keyType = 'int';

    // Relasi ke brand
    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id', 'brand_id');
    }

    // Relasi ke category
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'category_id');
    }
}
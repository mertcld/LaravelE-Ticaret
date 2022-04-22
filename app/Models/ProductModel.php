<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;
    
    protected $table="products";
    protected $fillable = [
        'name',
        'price',
        'quantity',
        'description',
        'picture',
        'haveStock',
        'isSale',
        'isDeleted',
        'categoryId'
    ];
}

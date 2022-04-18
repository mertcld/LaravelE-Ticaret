<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdersModel extends Model
{
    use HasFactory;
    protected $table="orders";
    protected $fillable = [
        'productId',
        'totalAmount',
        'quantity',
        'userId',
        'orderStatusId',
   
    ];
}

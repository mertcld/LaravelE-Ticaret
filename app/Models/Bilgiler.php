<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bilgiler extends Model
{
    use HasFactory;
    protected $table='bilgiler2';
    protected $fillable=["metin","created_at"];//eklencek satırları


}

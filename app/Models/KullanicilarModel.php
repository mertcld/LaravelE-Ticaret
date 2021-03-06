<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class KullanicilarModel extends Authenticatable
{
    use HasFactory;
    protected $table="kullanicilar";
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}

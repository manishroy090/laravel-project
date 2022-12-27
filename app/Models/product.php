<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
     protected $table = 'products';
    protected $primaryKey = 'Product_id';
    protected $casts = [
        'category'=>'array'

    ];


    use HasFactory;
}

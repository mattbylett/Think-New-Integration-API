<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
      'code', 'title', 'stock', 'price', 'brand', 'supplier',
     ];
}

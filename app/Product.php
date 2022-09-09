<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = [
    'category_id',
    'brand_id',
    'title',
    /* 'alias', */
    'content',
    'price',
    'old_price',
    'status',
    'description',
    'img',
    'hit'
  ];

  public function category(){
    return $this->belongsTo('App\Category');
  }
}

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
    'gallery',
    'hit',
    'related'
  ];

  public function category()
  {
    return $this->belongsTo('App\Category');
  }

  public function attributes()
  {
    return $this->belongsToMany(AttributeValue::class, 'product_attribute', 'product_id', 'attr_id');
  }
}

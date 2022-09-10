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
    'hit'
  ];

  public function category()
  {
    return $this->belongsTo('App\Category');
  }

  public function related()
  {
    return $this->belongsToMany(Related::class);
  }

  public function attributes()
  {
    return $this->belongsToMany(Attribute::class, 'product_attribute', 'product_id', 'attr_id');
  }
}

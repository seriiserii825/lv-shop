<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
  protected $table = 'attribute_groups';
  protected $fillable = ['title', 'attr_group_id'];

  public function values()
  {
    return $this->hasMany(AttributeValue::class, 'attr_group_id');
  }

  public function products()
  {
    return $this->belongsToMany(Product::class, 'product_attribute', 'attr_id', 'product_id');
  }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttributeValue extends Model
{
  protected $table = 'attribute_values';
  protected $fillable = ['attr_group_id', 'title'];
}

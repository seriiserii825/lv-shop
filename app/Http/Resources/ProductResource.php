<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;

class ProductResource extends JsonResource
{
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array
   */
  public function toArray($request)
  {
    $attributes = array_map(function ($item) {
      $group_title = DB::table('attribute_groups')->where('id', $item['attr_group_id'])->first()->title;
      $item['group_title'] = $group_title;
      return $item;
    }, $this->attributes->toArray());

    return [
      'id' => $this->id,
      'category_id' => $this->category_id,
      'category' => $this->category->title,
      'brand_id' => $this->brand_id,
      'title' => $this->title,
      /* 'alias' => $this->alias, */
      'content' => $this->content,
      'price' => $this->price,
      'old_price' => $this->old_price,
      'status' => $this->status,
      'description' => $this->description,
      'img' => $this->img,
      'gallery' => $this->gallery,
      'hit' => $this->hit,
      'related' => $this->related,
      'attributes' => $attributes,
    ];
  }
}

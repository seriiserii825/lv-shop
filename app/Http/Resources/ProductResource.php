<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

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
    ];
  }
}

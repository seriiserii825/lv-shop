<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
  public function toArray($request)
  {
    return [
      'id' => $this->id,
      'parent_id' => $this->parent_id,
      'title' => $this->title,
      'alias' => $this->alias,
      'parent' => $this->parent,
    ];
  }
}

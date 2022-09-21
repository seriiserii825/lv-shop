<?php

namespace App\Http\Resources;

use App\User;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
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
      'user_id' => $this->user_id,
      'status' => $this->status,
      'currency' => $this->currency,
      'note' => $this->note,
      'sum' => $this->sum,
      'user' => User::query()->where('id', $this->user_id)->first(),
      'cart' => $this->cart,
      'updated_at' => $this->updated_at,
      'created_at' => $this->created_at,
    ];
  }
}

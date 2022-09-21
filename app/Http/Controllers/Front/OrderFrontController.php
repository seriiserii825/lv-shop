<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateOrderRequest;
use App\Http\Resources\OrderResource;
use App\Order;

class OrderFrontController extends Controller
{
  public function store(UpdateOrderRequest $request)
  {
    $order = Order::create($request->validated());
    return new OrderResource($order);
  }
}

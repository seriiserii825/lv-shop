<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateOrderRequest;
use App\Http\Resources\OrderResource;
use App\Order;
use Illuminate\Http\Request;

class OrderFrontController extends Controller
{
  public function store(UpdateOrderRequest $request)
  {
    $order = Order::create($request->validated());
    return new OrderResource($order);
  }

  public function getOrder(Request $request, $id)
  {
    $order = Order::where('user_id', $id)->where('status', 2)->orderBy('created_at', 'desc')->get();
    return OrderResource::collection($order);
  }
}

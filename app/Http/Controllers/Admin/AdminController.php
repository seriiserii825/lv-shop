<?php

namespace App\Http\Controllers\Admin;

use App\Order;
use Illuminate\Support\Facades\DB;

class AdminController extends AdminBaseController
{
  public function index()
  {
    $orders_count = DB::table('orders')->count();
    $products_count = DB::table('products')->count();
    $users_count = DB::table('users')->count();
    $categories_count = DB::table('categories')->count();
    return response()->json([
      'orders_count' => $orders_count,
      'products_count' => $products_count,
      'users_count' => $users_count,
      'categories_count' => $categories_count,
    ]);
  }
}

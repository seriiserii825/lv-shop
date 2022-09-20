<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Product;
use Illuminate\Http\Request;

class ProductFrontController extends Controller
{
  /**
   * undocumented function
   *
   * @return void
   */
  public function lastProducts()
  {
    return ProductResource::collection(Product::orderBy('created_at', 'desc')->take(4)->get());
  }
}

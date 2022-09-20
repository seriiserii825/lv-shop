<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

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

  public function index(Request $request)
  {
    $categories = json_decode($request->categories);

    return ProductResource::collection(Product::when($categories, function (Builder $query, $categories) {
      return $query->whereHas('category', function (Builder $query) use ($categories) {
        $query->whereIn('id', $categories);
      });
    })->orderBy('created_at', 'desc')->get());
  }

  public function show(Request $request, $id)
  {
    return new ProductResource(Product::find($id));
  }

  public function relatedProducts(Request $request)
  {
    $related = json_decode($request['related']);
    return ProductResource::collection(Product::orderBy('created_at', 'desc')->whereIn('id', $related)->get());
  }
}

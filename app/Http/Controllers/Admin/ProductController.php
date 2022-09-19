<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Resources\ProductResource;
use App\Http\Resources\ProductSearchResource;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  public function index()
  {
    return ProductResource::collection(Product::query()->orderBy('updated_at', 'desc')->get());
  }

  public function search()
  {
    $search = request()->get('search');
    $products = Product::where('title', 'like', "%$search%")->limit(10)->get();
    return ProductSearchResource::collection($products);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(StoreProductRequest $request)
  {
    $attributes = json_decode($request['attributes']);
    $product = Product::create($request->validated());
    $product->attributes()->sync($attributes);
    return new ProductResource($product);
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $product = Product::findOrFail($id);
    return new ProductResource($product);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(UpdateProductRequest $request, $id)
  {
    $attributes = json_decode($request['attributes']);
    $product = Product::findOrFail($id);
    $product->update($request->validated());
    $product->attributes()->sync($attributes);
    return new ProductResource($product);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    //
  }
}

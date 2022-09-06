<?php

namespace App\Http\Controllers\Admin;

use App\AttributeValue;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAttributeValueRequest;
use App\Http\Requests\UpdateAttributeValueRequest;
use App\Http\Resources\AttributeValueResource;
use Illuminate\Http\Request;

class AttributeValueController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    //
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
  public function store(StoreAttributeValueRequest $request)
  {
    $attribute_value = AttributeValue::create($request->validated());
    return new AttributeValueResource($attribute_value);
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $attribute_value = AttributeValue::findOrFail($id);
    return new AttributeValueResource($attribute_value);
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
  public function update(UpdateAttributeValueRequest $request, $id)
  {
    $attribute_value = AttributeValue::findOrFail($id);
    $attribute_value->update($request->validated());
    return new AttributeValueResource($attribute_value);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $attribute_value = AttributeValue::findOrFail($id);
    $attribute_value->delete();
    return response()->json(null, 204);
  }
}

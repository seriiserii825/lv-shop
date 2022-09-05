<?php

namespace App\Http\Controllers\Admin;

use App\Attribute;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAttributeRequest;
use App\Http\Resources\AttributeResource;
use Illuminate\Http\Request;

class AttributeController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return AttributeResource::collection(Attribute::all());
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create(Request $request)
  {
    /* return new AttributeResource($attribute); */
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(StoreAttributeRequest $request)
  {
    $attribute = Attribute::create($request->validated());
    return response()->json([
      'message' => 'Attribute created successfully',
      'attribute' => new AttributeResource($attribute)
    ]);
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $attribute = Attribute::findOrFail($id);
    return new AttributeResource($attribute);
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
  public function update(Request $request, $id)
  {
    $attribute = Attribute::findOrFail($id);
    $attribute->update($request->all());
    return response()->json([
      'message' => 'Attribute updated successfully',
      'attribute' => new AttributeResource($attribute)
    ]);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $attribute = Attribute::findOrFail($id);
    $attribute->delete();
    return response()->json([
      'message' => 'Attribute deleted successfully',
    ]);
  }
}

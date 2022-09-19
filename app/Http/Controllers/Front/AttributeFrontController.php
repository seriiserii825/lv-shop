<?php

namespace App\Http\Controllers\Front;

use App\Attribute;
use App\Http\Controllers\Controller;
use App\Http\Resources\AttributeResource;

class AttributeFrontController extends Controller
{
  public function index()
  {
    return AttributeResource::collection(Attribute::all());
  }
}

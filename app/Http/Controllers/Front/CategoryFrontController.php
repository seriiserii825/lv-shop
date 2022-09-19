<?php

namespace App\Http\Controllers\Front;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;

class CategoryFrontController extends Controller
{
  public function index()
  {
    return CategoryResource::collection(Category::all());
  }
}

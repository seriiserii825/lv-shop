<?php

namespace App\Http\Controllers\Admin;

class AdminController extends AdminBaseController
{
  public function index()
  {
    return response()->json(['message' => 'Admin index']);
  }
}

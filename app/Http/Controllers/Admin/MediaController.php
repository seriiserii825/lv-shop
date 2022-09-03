<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Media;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MediaController extends Controller
{
  public function index(Request $request)
  {
    $s = $request->get('search') ? $request->get('search') : '';
    return response()->json([
      "count" => Media::count(),
      "data" => Media::where('url', 'like', '%' . $s . '%')->get()
    ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    if ($request->hasFile("files")) {
      foreach ($request->file('files') as $file) {
        $upload_path = public_path('uploads/');
        $file_name = $file->getClientOriginalName();
        $file->move($upload_path, $file_name);
        Media::create([
          "name" => $file_name,
          "url" => "/uploads/" . $file_name
        ]);
      }
      return response()->json([
        "message" => "messages was uploaded"
      ]);
    }
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    //
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
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $media = Media::findOrFail($id);
    $media->delete();
    return response()->json([
      "message" => "Image was deleted"
    ]);
  }
}

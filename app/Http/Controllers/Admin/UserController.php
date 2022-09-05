<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Resources\UserResource;
use App\User;
use App\UserRole;
use Illuminate\Http\Request;

class UserController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $users = User::whereHas('roles', function ($q) {
      $q->where('name', 'user');
    })->get();

    return UserResource::collection($users);
  }

  public function getAll()
  {
    $users = User::all();

    return UserResource::collection($users);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(StoreUserRequest $request)
  {
    $name = $request['name'];
    $email = $request['email'];
    $password = bcrypt($request['password']);
    $user = User::create([
      'name' => $name,
      'email' => $email,
      'password' => $password,
    ]);

    $user_id = $user->id;

    UserRole::create([
      'user_id' => $user_id,
      'role_id' => 2,
    ]);

    return response()->json(['message' => 'User created successfully', 'user' => $user], 201);
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $user = User::findOrFail($id);
    return new UserResource($user);
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
  public function update(UpdateUserRequest $request, $id)
  {
    $user = User::findOrFail($id);
    $name = $request['name'];
    $email = $request['email'];
    $password = bcrypt($request['password']);

    $user_id = $user->id;

    $user->update([
      'name' => $name,
      'email' => $email,
      'password' => $password,
    ]);

    UserRole::create([
      'user_id' => $user_id,
      'role_id' => 2,
    ]);

    return response()->json(['message' => 'User updated successfully', 'user' => $user], 200);
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLoginRequest;
use App\Http\Requests\StoreRegisterRequest;
use App\User;
use App\UserRole;

class AuthController extends Controller
{
  /**
   * Create a new AuthController instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('auth:api', ['except' => ['login', 'index', 'register']]);
  }

  public function index()
  {
    return response()->json(['message' => 'Login page']);
  }

  /**
   * Get a JWT via given credentials.
   *
   * @return \Illuminate\Http\JsonResponse
   */
  public function login(StoreLoginRequest $request)
  {
    $credentials = request(['email', 'password']);

    $token = auth()->attempt($credentials);
    if (!$token) {
      return response()->json(['error' => 'Email or password are wrong'], 400);
    }

    return $this->respondWithToken($token);
  }

  public function register(StoreRegisterRequest $request)
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
   * Get the authenticated User.
   *
   * @return \Illuminate\Http\JsonResponse
   */
  public function me()
  {
    $user_id = Auth::user()->id;
    $user = User::query()->where('id', $user_id)->first();
    $user = $user->roles;
    return response()->json([
      'user' => auth()->user(),
      'role' => $user
    ]);
  }

  /**
   * Log the user out (Invalidate the token).
   *
   * @return \Illuminate\Http\JsonResponse
   */
  public function logout()
  {
    auth()->logout();

    return response()->json(['message' => 'Successfully logged out']);
  }

  /**
   * Refresh a token.
   *
   * @return \Illuminate\Http\JsonResponse
   */
  public function refresh()
  {
    return $this->respondWithToken(auth()->refresh());
  }

  /**
   * Get the token array structure.
   *
   * @param  string $token
   *
   * @return \Illuminate\Http\JsonResponse
   */
  protected function respondWithToken($token)
  {
    return response()->json([
      'access_token' => $token,
      'token_type' => 'bearer',
      'expires_in' => auth()->factory()->getTTL() * 60
    ]);
  }
}

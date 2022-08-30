<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class User extends Model
{
  use SoftDeletes;
  use Notifiable;

  protected $fillable = [
    'name',
    'login',
    'email',
    'password',
  ];

  protected $hidden = [
    'password',
  ];

  protected $casts = [
    'email_verified_at' => 'datetime',
  ];

  public function roles()
  {
    return $this->belongsToMany('App\Role', 'user_roles', 'user_id', 'role_id');
  }
}

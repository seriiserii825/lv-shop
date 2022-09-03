<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $data = [
      [
        'id' => 1,
        'name' => 'admin',
        'email' => 'a@a.ru',
        'password' => bcrypt(12345678),
      ],
      [
        'id' => 2,
        'name' => 'serii',
        'email' => 'u@u.ru',
        'password' => bcrypt(12345678),
      ],
      [
        'id' => 3,
        'name' => 'radu',
        'email' => 'r@r.ru',
        'password' => bcrypt(12345678),
      ],
      [
        'id' => 4,
        'name' => 'nixon',
        'email' => 'n@n.ru',
        'password' => bcrypt(12345678),
      ],
    ];
    DB::table('users')->insert($data);
  }
}

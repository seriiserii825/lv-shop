<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $data = [
      ['id' => '1', 'title' => 'Men', 'parent_id' => '0'],
      ['id' => '2', 'title' => 'Women', 'parent_id' => '0'],
      ['id' => '3', 'title' => 'Kids', 'parent_id' => '0'],
      ['id' => '5', 'title' => 'Blouse', 'parent_id' => '2'],
      ['id' => '7', 'title' => 'Men Shirts', 'parent_id' => '1'],
      ['id' => '8', 'title' => 'Women Skirt', 'parent_id' => '1'],
    ];

    DB::table('categories')->insert($data);
  }
}

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
      ['id' => '4', 'title' => 'Pants', 'parent_id' => '1'],
      ['id' => '5', 'title' => 'Pants', 'parent_id' => '2'],
      ['id' => '6', 'title' => 'Pants', 'parent_id' => '3'],
      ['id' => '7', 'title' => 'Shirts', 'parent_id' => '1'],
      ['id' => '8', 'title' => 'Shirts', 'parent_id' => '2'],
      ['id' => '9', 'title' => 'Shirts', 'parent_id' => '3'],
      ['id' => '10', 'title' => 'T-shirts', 'parent_id' => '1'],
      ['id' => '11', 'title' => 'T-shirts', 'parent_id' => '2'],
      ['id' => '12', 'title' => 'T-shirts', 'parent_id' => '3'],
    ];

    DB::table('categories')->insert($data);
  }
}

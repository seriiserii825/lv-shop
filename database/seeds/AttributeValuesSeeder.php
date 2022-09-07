<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;


class AttributeValuesSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $data = [
      ['id' => '1', 'title' => 'red', 'attr_group_id' => '1'],
      ['id' => '2', 'title' => 'green', 'attr_group_id' => '1'],
      ['id' => '3', 'title' => 'blue', 'attr_group_id' => '1'],
      ['id' => '4', 'title' => 'biege', 'attr_group_id' => '1'],
      ['id' => '5', 'title' => 'XS', 'attr_group_id' => '2'],
      ['id' => '6', 'title' => 'S', 'attr_group_id' => '2'],
      ['id' => '7', 'title' => 'M', 'attr_group_id' => '2'],
      ['id' => '8', 'title' => 'L', 'attr_group_id' => '2'],
    ];
    DB::table('attribute_values')->insert($data);
  }
}

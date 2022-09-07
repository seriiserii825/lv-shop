<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;


class AttributeGroupsSeeder extends Seeder
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
        'id' => '1',
        'title' => 'Color',
      ],
      [
        'id' => '2',
        'title' => 'Size',
      ],
    ];
    DB::table('attribute_groups')->insert($data);
  }
}

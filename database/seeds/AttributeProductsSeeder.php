<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttributeProductsSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $data = [
          'attr_id' => 1,
          'product_id' => 1,
    ];

    DB::table('product_attribute')->insert($data);
  }
}

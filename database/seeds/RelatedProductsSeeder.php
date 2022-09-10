<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RelatedProductsSeeder extends Seeder
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
        'product_id' => 1,
        'related_id' => 2,
      ]
    ];


    DB::table('product_related')->insert($data);
  }
}

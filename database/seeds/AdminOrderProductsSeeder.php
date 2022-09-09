<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AdminOrderProductsSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {

    $data = [];


    $data[] = [
      'order_id' => 1,
      'product_id' => 1,
      'qty' => rand(1, 4),
      'title' => 'Casio Test Prod',
      'price' => rand(40, 200),
    ];


    DB::table('order_products')->insert($data);
  }
}

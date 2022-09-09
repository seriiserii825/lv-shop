<?php

use App\Order;
use Illuminate\Database\Seeder;

class OrdersSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    factory(Order::class, 1)->create();
  }
}

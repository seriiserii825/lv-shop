<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
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
        'category_id' => '2',
        'brand_id' => '1',
        'title' => 'Vero Moda Casual',
        'alias' => 'casio-mrp-700-1avef',
        'content' => 'some',
        'price' => 189,
        'old_price' => 0,
        'status' => '1',
        'keywords' => 'blouse',
        'description' => '',
        'img' => 'vero-moda-1.jpg',
        'hit' => '1',
      ],
      [
        'id' => '2',
        'category_id' => '2',
        'brand_id' => '1',
        'title' => 'Jennyfer Casual',
        'alias' => 'casio-mq-24-7bul',
        'content' => '',
        'price' => 190,
        'old_price' => 0,
        'status' => '1',
        'keywords' => 'blouse',
        'description' => '',
        'img' => 'Jennyfer-Casual-1.jpg',
        'hit' => '1',
      ],
      [
        'id' => '3',
        'category_id' => '8',
        'brand_id' => '1',
        'title' => 'Skirt H&M Casual',
        'alias' => 'casio-mq-24-7bul',
        'content' => '',
        'price' => 429,
        'old_price' => 0,
        'status' => '1',
        'keywords' => 'skirt',
        'description' => '',
        'img' => 'Юбкa-H-M-Casual-1.jpg',
        'hit' => '1',
      ],
      [
        'id' => '4',
        'category_id' => '8',
        'brand_id' => '1',
        'title' => 'Top Shop Casual ',
        'alias' => 'casio-mq-24-7bul',
        'content' => '',
        'price' => 260,
        'old_price' => 0,
        'status' => '1',
        'keywords' => 'skirt',
        'description' => '',
        'img' => 'Top-Shop-Casual-1.jpg',
        'hit' => '1',
      ],
    ];
    DB::table('products')->insert($data);
  }
}

<?php

use App\AttributeValue;
use App\Product;
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
        'category_id' => '5',
        'brand_id' => '1',
        'title' => 'Vero Moda Casual',
        'alias' => 'casio-mrp-700-1avef',
        'content' => 'some',
        'price' => 189,
        'old_price' => 0,
        'status' => '1',
        'keywords' => 'blouse',
        'description' => '',
        'img' => '/uploads/vero-moda-1.jpg',
        'hit' => '1',
        "related" => "[{\"id\":4,\"title\":\"Top Shop Casual \"},{\"id\":3,\"title\":\"Skirt H&M Casual\"},{\"id\":6,\"title\":\"Top Men\"}]",
      ],
      [
        'id' => '2',
        'category_id' => '5',
        'brand_id' => '1',
        'title' => 'Jennyfer Casual',
        'alias' => 'casio-mq-24-7bul',
        'content' => '',
        'price' => 190,
        'old_price' => 0,
        'status' => '1',
        'keywords' => 'blouse',
        'description' => '',
        'img' => '/uploads/Jennyfer-Casual-1.jpg',
        'hit' => '1',
        "related" => "[{\"id\":4,\"title\":\"Top Shop Casual \"},{\"id\":3,\"title\":\"Skirt H&M Casual\"},{\"id\":6,\"title\":\"Top Men\"}]",
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
        'img' => '/uploads/Юбкa-H-M-Casual-1.jpg',
        'hit' => '1',
        "related" => "[{\"id\":4,\"title\":\"Top Shop Casual \"},{\"id\":3,\"title\":\"Skirt H&M Casual\"},{\"id\":6,\"title\":\"Top Men\"}]",

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
        'img' => '/uploads/Top-Shop-Casual-1.jpg',
        'hit' => '1',
        "related" => "[{\"id\":4,\"title\":\"Top Shop Casual \"},{\"id\":3,\"title\":\"Skirt H&M Casual\"},{\"id\":6,\"title\":\"Top Men\"}]",

      ],
      [
        'id' => '5',
        'category_id' => '7',
        'brand_id' => '1',
        'title' => 'Celio',
        'alias' => 'casio-mq-24-7bul',
        'content' => '',
        'price' => 299,
        'old_price' => 0,
        'status' => '1',
        'keywords' => 'skirt',
        'description' => '',
        'img' => '/uploads/celio-1.jpg',
        'hit' => '1',
        "related" => "[{\"id\":4,\"title\":\"Top Shop Casual \"},{\"id\":3,\"title\":\"Skirt H&M Casual\"},{\"id\":6,\"title\":\"Top Men\"}]",
      ],
      [
        'id' => '6',
        'category_id' => '7',
        'brand_id' => '1',
        'title' => 'Top Men',
        'alias' => 'casio-mq-24-7bul',
        'content' => '',
        'price' => 429,
        'old_price' => 0,
        'status' => '1',
        'keywords' => 'skirt',
        'description' => '',
        'img' => '/uploads/top-man-1.jpg',
        'hit' => '1',
        "related" => "[{\"id\":4,\"title\":\"Top Shop Casual \"},{\"id\":3,\"title\":\"Skirt H&M Casual\"},{\"id\":6,\"title\":\"Top Men\"}]",

      ],
    ];

    DB::table('products')->insert($data);

    DB::table('product_attribute')->insert(
      [
        [
          'product_id' => 1,
          'attr_id' => 5
        ],
        [
          'product_id' => 2,
          'attr_id' => 3
        ],
        [
          'product_id' => 2,
          'attr_id' => 6
        ],
      ]
    );
  }
}

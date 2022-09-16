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
        'img' => 'vero-moda-1.jpg',
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
        'img' => 'Jennyfer-Casual-1.jpg',
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
        'img' => 'Юбкa-H-M-Casual-1.jpg',
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
        'img' => 'Top-Shop-Casual-1.jpg',
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
        'img' => 'celio-1.jpg',
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
        'img' => 'top-man-1.jpg',
        'hit' => '1',
        "related" => "[{\"id\":4,\"title\":\"Top Shop Casual \"},{\"id\":3,\"title\":\"Skirt H&M Casual\"},{\"id\":6,\"title\":\"Top Men\"}]",

      ],
    ];
    DB::table('products')->insert($data);

    DB::table('product_attribute')->insert(
      [
        'product_id' => 1,
        'attr_id' => AttributeValue::query()->where('id', 2)->value('id')
      ],
      [
        'product_id' => 1,
        'attr_id' => AttributeValue::query()->where('id', 5)->value('id')
      ],
    );
    //[2, 4]
  }
}

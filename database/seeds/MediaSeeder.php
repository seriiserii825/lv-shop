<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $media = [
        [
          'name' => 'Vero Moda Casual',
          'url' => '/uploads/vero-moda-1.jpg'
        ],
        [
          'name' => 'Jennyfer Casual',
          'url' => '/uploads/Jennyfer-Casual-1.jpg'
        ],
        [
          'name' => 'Юбкa H&M Casual',
          'url' => '/uploads/Юбкa-H-M-Casual-1.jpg'
        ],
        [
          'name' => 'Top Shop Casual ',
          'url' => '/uploads/Top-Shop-Casual-1.jpg'
        ],
      ];

      DB::table('media')->insert($media);
    }
}

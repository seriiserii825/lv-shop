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
      ['id' => '1', 'title' => 'Механика с автоподзаводом', 'attr_group_id' => '1'],
      ['id' => '2', 'title' => 'Механика с ручным заводом', 'attr_group_id' => '1'],
      ['id' => '3', 'title' => 'Кварцевый от батарейки', 'attr_group_id' => '1'],
      ['id' => '4', 'title' => 'Кварцевый от солнечного аккумулятора', 'attr_group_id' => '1'],
      ['id' => '5', 'title' => 'Сапфировое', 'attr_group_id' => '2'],
      ['id' => '6', 'title' => 'Минеральное', 'attr_group_id' => '2'],
      ['id' => '7', 'title' => 'Полимерное', 'attr_group_id' => '2'],
      ['id' => '8', 'title' => 'Стальной', 'attr_group_id' => '3'],
      ['id' => '9', 'title' => 'Кожаный', 'attr_group_id' => '3'],
      ['id' => '10', 'title' => 'Каучуковый', 'attr_group_id' => '3'],
      ['id' => '11', 'title' => 'Полимерный', 'attr_group_id' => '3'],
      ['id' => '12', 'title' => 'Нержавеющая сталь', 'attr_group_id' => '4'],
      ['id' => '13', 'title' => 'Титановый сплав', 'attr_group_id' => '4'],
      ['id' => '14', 'title' => 'Латунь', 'attr_group_id' => '4'],
      ['id' => '15', 'title' => 'Полимер', 'attr_group_id' => '4'],
      ['id' => '16', 'title' => 'Керамика', 'attr_group_id' => '4'],
      ['id' => '17', 'title' => 'Алюминий', 'attr_group_id' => '4'],
      ['id' => '18', 'title' => 'Аналоговые', 'attr_group_id' => '5'],
      ['id' => '19', 'title' => 'Цифровые', 'attr_group_id' => '5'],


    ];
    DB::table('attribute_values')->insert($data);
  }
}

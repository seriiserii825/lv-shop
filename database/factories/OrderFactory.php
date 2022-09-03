<?php

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
  return [
    'user_id' => $faker->numberBetween(2, 4),
    'status' => '0',
    'currency' => 'USD',
    'note' => 'Note',
    'sum' => 300,
  ];
});

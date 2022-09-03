<?php

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
  return [
    'user_id' => 2,
    'status' => '0',
    'currency' => 'USD',
    'note' => 'Note',
    'sum' => 300,
  ];
});

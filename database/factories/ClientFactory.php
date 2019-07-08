<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Client;

use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    return [
      	'name'=>$faker->name,
      	'email'=>$faker->unique()->safeEmail,
      	'description'=>$faker->text(100), 
      	'age'=>rand(0,30),
      	'status'=>rand(0,1),
      	'password'=>'$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'
    ];
});

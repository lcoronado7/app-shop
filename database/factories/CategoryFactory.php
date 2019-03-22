<?php

use Faker\Generator as Faker;
use App\Category;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name'=> ucfirst($faker->word), //ucfirst('cadena') se utiliza para iniciar la cadena con mayuscula 
        'description'=> $faker->sentence(10)
    ];
});

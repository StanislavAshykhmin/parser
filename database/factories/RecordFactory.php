<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Parser\Record::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'vote' => '0',
        'answer' => '1',
        'view' => '1000',
        'url' => $faker->url,
        'tag_id' => '10', // Laravel
    ];
});

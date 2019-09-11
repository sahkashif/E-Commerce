<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Image;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(Image::class, function (Faker $faker) {
    $now = Carbon::now()->toDateTimeString();
    return [
        'created_at' => $now,
        'updated_at' => $now
    ];
});

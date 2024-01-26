<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Post;
use App\Comment;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'content'=>$faker->text(500),
        'post_id' => mt_rand(1, App\Post::all()->count())
    ];
});

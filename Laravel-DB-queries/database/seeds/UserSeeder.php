<?php

use App\Post;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class,10)->create()->each(function ($user){
            $user->posts()->saveMany(factory(App\Post::class, mt_rand(2,6))->make());
        });
    }
}

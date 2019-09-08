<?php

use App\Article;
use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 'admin', 1)->create();

        factory(User::class, 'user', 5)->create()->each(function ($user) {
            $user->articles()->saveMany(factory(Article::class, 5)->make());
        });
    }
}

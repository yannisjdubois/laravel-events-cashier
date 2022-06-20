<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $tags = \App\Models\Tag::factory(8)->create();

        \App\Models\User::factory(10)->create()->each(function ($user){
            \App\Models\Event::factory(rand(2, 5))->create([
                'user_id' => $user->id
            ])
        });
    }
}

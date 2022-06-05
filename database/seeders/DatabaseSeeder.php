<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(25)->create()->each(function ($u) {
            for ($i=0; $i <= 3; $i++) {
                $u->posts()->save(Post::factory()->make());
            }  
        });
        // factory(App\User::class, 25)->create()->each(function ($u) {
        //     for ($i=0; $i <= 3; $i++) {
        //     $u->posts()->save(factory(App\Post::class)->make());
        //     }  
        // });
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Categories;
use App\Models\Tags;
use App\Models\Posts;
use App\Models\Posttags;

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
        User::factory(10)->create();
        Categories::factory(10)->create();
        Tags::factory(10)->create();
        Posts::factory(10)->create();
        Posttags::factory(10)->create();
    }
}

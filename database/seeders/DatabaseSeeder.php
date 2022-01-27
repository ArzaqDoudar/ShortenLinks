<?php

namespace Database\Seeders;

use App\Models\Link;
use Database\Factories\LinkFactory;
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

        Link::factory(10)->create();
        // $this->call(LinksTableSeeder::class);
    }
}

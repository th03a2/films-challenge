<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\CastSeeder;
use Database\Seeders\MovieSeeder;
use Database\Seeders\UserSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CastSeeder::class,
            MovieSeeder::class,
            UserSeeder::class,
        ]);
    }
}

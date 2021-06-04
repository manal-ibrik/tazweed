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
        $this->call([
            HomeSliderSeeder::class,
            AboutSeeder::class,
            ServiceSeeder::class,
            SolutionSeeder::class,
            ProjectSeeder::class,
            NewsSeeder::class,
            ProductSeeder::class,
            ContactUsSeeder::class,
            CategoriesSeeder::class,
        ]);
    }
}

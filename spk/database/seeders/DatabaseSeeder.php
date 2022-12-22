<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call(RoleSeeder::class);
        $this->call(CriteriaSeeder::class);
        $this->call(RatingScaleSeeder::class);
        $this->call(IndexRandomSeeder::class);
        $this->call(UsersSeeder::class);
    }
}

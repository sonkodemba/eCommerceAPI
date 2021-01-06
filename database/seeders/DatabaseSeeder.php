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
            ProductSeeder::class,
           ReviewSeeder::class,
           DepartmentSeeder::class,
           DesignationSeeder::class,
           GenderSeeder::class,
           PayGradeSeeder::class,
           UserSeeder::class
        ]);
    }
}

<?php

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
        $this->call(CategoriesSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ColorsSeeder::class);
        $this->call(SubCategoriesSeeder::class);
        $this->call(ReviewSeeder::class);
        $this->call(ImgsSeeder::class);
        // $this->call(UsersTableSeeder::class);
    }
}

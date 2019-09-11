<?php

use Illuminate\Database\Seeder;

class ImgsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Image::class, 55)->create();
    }
}

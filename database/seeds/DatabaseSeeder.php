<?php

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
     //$this->call(PlansTableSeeder::class);
     //$this->call(PlacesTableSeeder::class);
     //$this->call(ShopsTableSeeder::class);
     $this->call(DetailsTableSeeder::class);
    }
}

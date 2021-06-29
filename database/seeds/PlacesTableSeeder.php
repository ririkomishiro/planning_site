<?php

use Illuminate\Database\Seeder;

class PlacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // $this->call(UsersTableSeeder::class);
        DB::table('places')->insert([
    ['id' => '1',
    'place' => '東京',
    ],
    ['id' => '2',
    'place' => '大阪',
    ],
    ['id' => '3',
    'place' => '横浜',
    ],
   ]);
}
}
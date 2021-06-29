<?php

use Illuminate\Database\Seeder;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     // $this->call(UsersTableSeeder::class);
        DB::table('shops')->insert([
        ['id' => '1',
        'name' => 'apish',
        'plan_id' => '1',
        'place_id' => '1',
        ],
        ['id' => '2',
        'name' => 'hotel prince',
        'plan_id' => '2',
        'place_id' => '2',
        ],
        ['id' => '3',
        'name' => 'yoohama guide center',
        'plan_id' => '3',
        'place_id' => '3',
         ],
         ['id' => '4',
        'name' => '焼肉　虎二',
        'plan_id' => '1',
        'place_id' => '1',
         ],
         
    ]); 
    }
}

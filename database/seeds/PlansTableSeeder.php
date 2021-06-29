<?php

use Illuminate\Database\Seeder;

class PlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
{
      // $this->call(UsersTableSeeder::class);
        DB::table('plans')->insert([
    ['id' => '1',
    'plan' => '食事',
    ],
    ['id' => '2',
    'plan' => '宿泊',
    ],
    ['id' => '3',
    'plan' => 'イベント',
    ],
   ]);
}
}

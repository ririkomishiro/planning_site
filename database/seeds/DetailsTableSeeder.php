//Laravel/database/seeds/DetailsTableSeeder.php
<?php

use Illuminate\Database\Seeder;

class DetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('details')->insert([
        ['id' => '1',
        'shop_id' => '1',
        'course' => 'フレンチディナーコース',
        'price' => '5000',
        'open' => '17:00',
        'close' => '20:00',
        'day' => '2021,11,5',
        ],
        ['id' => '2',
        'shop_id' => '2',
        'course' => '大阪１日素泊まりコース',
        'price' => '4000',
        'open' => '15:00',
        'close' => '11:00',
        'day' => '2021,12,1',
        ],
        ['id' => '3',
        'shop_id' => '3',
        'course' => '横浜観光案内',
        'price' => '2500',
        'open' => '10:00',
        'close' => '20:00',
        'day' => '2021,11,5',
        ],
        ['id' => '4',
        'shop_id' => '3',
        'course' => '高級焼肉コース',
        'price' => '2500',
        'open' => '10:00',
        'close' => '20:00',
        'day' => '2021,11,5',
        ],
        ['id' => '5',
        'shop_id' => '1',
        'course' => 'アフタヌーンティお二人コース',
        'price' => '2500',
        'open' => '10:00',
        'close' => '15:00',
        'day' => '2021,11,6',
        ],
        ['id' => '6',
        'shop_id' => '1',
        'course' => 'フレンチランチコース',
        'price' => '3000',
        'open' => '10:00',
        'close' => '15:00',
        'day' => '2021,11,6',
        ],
        ]);
       
    }
}

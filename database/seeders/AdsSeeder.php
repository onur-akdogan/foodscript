<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AdCategory;

class AdsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdCategory::insert([

            0 =>    ['id' => 1,

                'title' => 'reklam1'],

            1 =>   ['id' => 2,

                'title' => 'reklam2'],

            2 =>  ['id' => 3,
                'title' => 'reklam3'],


        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Category::insert([  
         0=>[
            'id'=>1,
            'title' => 'Kahvaltı',
            'text' => 'en güncel tarifler burada',
            'description' => 'kahvaltı tarif yemek tarifleri',
            'keywords' => 'kahvaltı tarif yemek',
            'status' => 1
            ],
            
        1=>[
            'id'=>2,
            'title' => 'Ara Sıcaklar',
            'text' => 'en güncel tarifler burada',
            'description' => 'kahvaltı tarif yemek tarifleri',
            'keywords' => 'kahvaltı tarif yemek,Ara Sıcaklar',
            'status' => 1
            ],
        2=>[
            'id'=>3,
            'title' => 'Tatlılar',
            'text' => 'en güncel tarifler burada',
            'description' => 'Tatlılar tarif yemek tarifleri',
            'keywords' => 'Tatlılar tarif yemek',
            'status' => 1
            ],
        3=>[
            'id'=>4,
            'title' => 'Çorbalar',
            'text' => 'en güncel tarifler burada',
            'description' => 'Çorbalar tarif yemek tarifleri',
            'keywords' => 'Çorbalar  tarif yemek',
            'status' => 1
            ],
        4=>[
            'id'=>5,
            'title' => 'Ana Yemek',
            'text' => 'en güncel tarifler burada',
            'description' => 'Ana Yemek tarif yemek tarifleri',
            'keywords' => 'Ana Yemek tarif yemek',
            'status' => 1
            ],
            5=>[
            'id'=>6,
            'title' => 'Yöresel',
            'text' => 'en güncel tarifler burada',
            'description' => 'Yöresel tarif yemek tarifleri',
            'keywords' => 'Yöresel tarif yemek',
            'status' => 1
            ],
            6=>[
                'id'=>7,
                'title' => 'İçecekler',
                'text' => 'en güncel tarifler burada',
                'description' => 'İçecekler tarif yemek tarifleri',
                'keywords' => 'İçecekler tarif yemek',
                'status' => 1
                 ]
            ]);
        }
    }
    
<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Subcategory;
use App\Product;

class CategoryTableSeeder extends Seeder
{

    protected $data = [
        'Kartu Nama' => [
            'Kartu Nama',
            'Square Card'
        ],
        'Office Stationery' => [
            'Amplop',
            'Kop Surat',
            'Stempel',

        ],
        'Marketing Material' => [
            'Kalender',
            'Brosur',
            'Stiker',
            'Poster',

        ],
        'Promotional Gifts' => [
            'Goodle Bag',
            'Mug',
            'Bantal Foto'

        ],
        'Banner & Signs' => [
            'Spanduk',
            'X-banner',
            'Roll Up Banner',

        ],
        'Clothings' => [
            'Kaos',
            'Polo Shirt'
        ]
    ];

    
    /**
     * Run the database seeds.
     *
     * @return void
     */
     
    public function run()
    {
       
        foreach($this->data as $categories => $subcategories){
            $id = Category::create(['name' => $categories])->id;

            foreach($subcategories as $subcategory){
                Subcategory::create([
                    'category_id' => $id,
                    'name' => $subcategory
                ]);
            }
        }
       
    }
}

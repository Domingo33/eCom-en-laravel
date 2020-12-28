<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//
        DB::table('products')->insert([
	        [ 
	           'name' => 'Oppo mobile',
	            'price' => '300',
	            'description' => 'A smartphone with 8gb ram and much more fearure',
	            'category' => 'mobile',
	            'gallery' => 'https://thumb.pccomponentes.com/w-530-530/articles/24/246829/oppo-a9-2020-4-128gb-marine-green-libre-33e1f1c7-4200-40e3-9f57-2dd1f609ce6e.jpg',
	        ],
	    	[
	            'name' => 'Panasonic Tv',
	            'price' => '400',
	            'description' => 'A smart tv and much more fearure',
	            'category' => 'tv',
	            'gallery' => 'https://images-na.ssl-images-amazon.com/images/I/71ch6dhckZL._AC_SL1500_.jpg',
	        ],
	    	[
	            'name' => 'Soni Tv',
	            'price' => '500',
	            'description' => 'A tv with much more fearure',
	            'category' => 'tv',
	            'gallery' => 'https://images-na.ssl-images-amazon.com/images/I/71%2BeUQr6lQL._AC_SL1500_.jpg',
	        ],
	    	[
	            'name' => 'LG fridge',
	            'price' => '200',
	            'description' => 'A fridge with 4gb ram and much more fearure',
	            'category' => 'fridge',
	            'gallery' => 'https://img.pccomponentes.com/articles/17/174391/h1.jpg',
	        ]
    	]);
    }
}

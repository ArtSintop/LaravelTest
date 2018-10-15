<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for($i = 0 ; $i < 10 ; $i++){
	         DB::table('products')->insert([
	        	'productName' => str_random(10),
	        	'quantity' => rand(1, 100),
	        	'price' => rand(1, 100),
	        	'created_at' => Carbon::now(),
	        ]);
     	}
    }
}

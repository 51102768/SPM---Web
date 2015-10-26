<?php

use Illuminate\Database\Seeder;
use App\Image;
use App\Shop;

class ImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->delete();
		//2
		$shop = Shop::where("name","Kujuz Coffee")->firstOrFail();
        Image::create([
			"url"		=>"images/palarax2.jpg",
			"shop_id"	=> $shop->id
		]);
    }
}

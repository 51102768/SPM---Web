<?php

use Illuminate\Database\Seeder;
use App\Shop as Shop;

class ShopTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->delete();

        Shop::create([
			"name"		=>"Urban Station",
			"address"	=>"160 Sư Vạn Hạnh",
			"district"	=>"Quận 10",
			"city"		=>"Hồ Chí Minh",
			"main_image"=>"images/2.jpg",
			"price"		=>"20000",
			"information"=> "asbafsafasfbakbfabskfbaskbf",
			"open_time"	=>"7:00:00",
			"close_time"=>"10:00:00",

		]);
    }
}

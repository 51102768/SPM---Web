<?php

use Illuminate\Database\Seeder;
use App\Slider;

class SliderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('slider')->delete();
		//2
        Slider::create([
			"url"		=>"images/palarax2.jpg"
		]);

		Slider::create([
			"url"		=>"images/paralax3.jpg"
		]);

		Slider::create([
			"url"		=>"images/paralax4.jpg"
		]);
    }
}

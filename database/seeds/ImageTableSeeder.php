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
            "url"       =>"images/kujuzcoffee1.jpg",
            "shop_id"   => $shop->id
        ]);

        Image::create([
            "url"       =>"images/kujuzcoffee2.jpg",
            "shop_id"   => $shop->id
        ]);
        $shop = Shop::where("name","BJ Coffee Lounge")->firstOrFail();
        Image::create([
            "url"       =>"images/bjcoffeelounge1.jpg",
            "shop_id"   => $shop->id
        ]);

        Image::create([
            "url"       =>"images/bjcoffeelounge2.jpg",
            "shop_id"   => $shop->id
        ]);
        $shop = Shop::where("name","PNC Book Cafe")->firstOrFail();
        Image::create([
            "url"       =>"images/bookcafe1.jpg",
            "shop_id"   => $shop->id
        ]);

        Image::create([
            "url"       =>"images/bookcafe2.jpg",
            "shop_id"   => $shop->id
        ]);
        $shop = Shop::where("name","City House Cafe")->firstOrFail();
        Image::create([
            "url"       =>"images/cityhousecafe1.png",
            "shop_id"   => $shop->id
        ]);
 
        Image::create([
            "url"       =>"images/cityhousecafe2.png",
            "shop_id"   => $shop->id
        ]);
        $shop = Shop::where("name","Cõi Mơ")->firstOrFail();
        Image::create([
            "url"       =>"images/coimo1.jpg",
            "shop_id"   => $shop->id
        ]);

        Image::create([
            "url"       =>"images/coimo2.jpg",
            "shop_id"   => $shop->id
        ]);
        $shop = Shop::where("name","Cooku’s Nest Cafe")->firstOrFail();
        Image::create([
            "url"       =>"images/cookusnest1.jpg",
            "shop_id"   => $shop->id
        ]);

        Image::create([
            "url"       =>"images/cookusnest2.jpg",
            "shop_id"   => $shop->id
        ]);
        $shop = Shop::where("name","Country House Cafe")->firstOrFail();
        Image::create([
            "url"       =>"images/countryhousecafe1.jpg",
            "shop_id"   => $shop->id
        ]);

        Image::create([
            "url"       =>"images/countryhousecafe2.jpg",
            "shop_id"   => $shop->id
        ]);
        $shop = Shop::where("name","Cúcuta Coffee")->firstOrFail();
        Image::create([
            "url"       =>"images/cucuta1.jpg",
            "shop_id"   => $shop->id
        ]);

        Image::create([
            "url"       =>"images/cucuta2.jpg",
            "shop_id"   => $shop->id
        ]);

        $shop = Shop::where("name","Đà Lạt Phố")->firstOrFail();
        Image::create([
            "url"       =>"images/dalat1.jpg",
            "shop_id"   => $shop->id
        ]);

        Image::create([
            "url"       =>"images/dalat2.jpg",
            "shop_id"   => $shop->id
        ]);
        $shop = Shop::where("name","Đã từng thấy")->firstOrFail();
        Image::create([
            "url"       =>"images/datungthay1.jpg",
            "shop_id"   => $shop->id
        ]);

        Image::create([
            "url"       =>"images/datungthay2.jpg",
            "shop_id"   => $shop->id
        ]);
        $shop = Shop::where("name","Du Miên")->firstOrFail();
        Image::create([
            "url"       =>"images/dumien1.jpg",
            "shop_id"   => $shop->id
        ]);

        Image::create([
            "url"       =>"images/dumien2.jpg",
            "shop_id"   => $shop->id
        ]);
        $shop = Shop::where("name","Effoc Cafe")->firstOrFail();
        Image::create([
            "url"       =>"images/effoc1.jpg",
            "shop_id"   => $shop->id
        ]);

        Image::create([
            "url"       =>"images/effoc2.jpg",
            "shop_id"   => $shop->id
        ]);
        $shop = Shop::where("name","Fig Lounge & cafe")->firstOrFail();
        Image::create([
            "url"       =>"images/figloungecafe1.jpg",
            "shop_id"   => $shop->id
        ]);

        Image::create([
            "url"       =>"images/figloungecafe2.jpg",
            "shop_id"   => $shop->id
        ]);
        $shop = Shop::where("name","Gloria Jean’s Coffee Hồ Con Rùa")->firstOrFail();
        Image::create([
            "url"       =>"images/gloriajeancoffee1.jpg",
            "shop_id"   => $shop->id
        ]);
        
        Image::create([
            "url"       =>"images/gloriajeancoffee2.jpg",
            "shop_id"   => $shop->id
        ]);
        $shop = Shop::where("name","Hawaii Kìa")->firstOrFail();
        Image::create([
            "url"       =>"images/hawaii1.jpg",
            "shop_id"   => $shop->id
        ]);
        
        Image::create([
            "url"       =>"images/hawaii2.jpg",
            "shop_id"   => $shop->id
        ]);
        $shop = Shop::where("name","Legend Cafe")->firstOrFail();
        Image::create([
            "url"       =>"images/legendcafe1.jpg",
            "shop_id"   => $shop->id
        ]);
        
        Image::create([
            "url"       =>"images/legendcafe2.jpg",
            "shop_id"   => $shop->id
        ]);
        $shop = Shop::where("name","Lu's Coffee Phạm Hùng")->firstOrFail();
        Image::create([
            "url"       =>"images/luscoffee1.jpg",
            "shop_id"   => $shop->id
        ]);
        
        Image::create([
            "url"       =>"images/luscoffee2.jpg",
            "shop_id"   => $shop->id
        ]);
        $shop = Shop::where("name","Miền Đồng Thảo")->firstOrFail();
        Image::create([
            "url"       =>"images/miendongthao1.jpg",
            "shop_id"   => $shop->id
        ]);
        
        Image::create([
            "url"       =>"images/miendongthao2.jpg",
            "shop_id"   => $shop->id
        ]);
        $shop = Shop::where("name","Miền Thảo Mộc")->firstOrFail();
        Image::create([
            "url"       =>"images/mienthaomoc1.jpg",
            "shop_id"   => $shop->id
        ]);
       
        Image::create([
            "url"       =>"images/mienthaomoc2.jpg",
            "shop_id"   => $shop->id
        ]);
        $shop = Shop::where("name","Monkey In Black Cafe")->firstOrFail();
        Image::create([
            "url"       =>"images/monkeyinblackcafe1.jpg",
            "shop_id"   => $shop->id
        ]);
        
        Image::create([
            "url"       =>"images/monkeyinblackcafe2.jpg",
            "shop_id"   => $shop->id
        ]);
        $shop = Shop::where("name","Oromia Coffee")->firstOrFail();
        Image::create([
            "url"       =>"images/oromiacoffee1.jpg",
            "shop_id"   => $shop->id
        ]);
        
        Image::create([
            "url"       =>"images/oromiacoffee2.jpg",
            "shop_id"   => $shop->id
        ]);
        $shop = Shop::where("name","S-Cafe")->firstOrFail();
        Image::create([
            "url"       =>"images/scafe1.jpg",
            "shop_id"   => $shop->id
        ]);
       
        Image::create([
            "url"       =>"images/scafe2.jpg",
            "shop_id"   => $shop->id
        ]);
        $shop = Shop::where("name","S'morin Coffee")->firstOrFail();
        Image::create([
            "url"       =>"images/smorin1.jpg",
            "shop_id"   => $shop->id
        ]);
        
        Image::create([
            "url"       =>"images/smorin2.jpg",
            "shop_id"   => $shop->id
        ]);
        $shop = Shop::where("name","Story M Cafe - Retro Modern")->firstOrFail();
        Image::create([
            "url"       =>"images/storymcafe1.jpg",
            "shop_id"   => $shop->id
        ]);
        
        Image::create([
            "url"       =>"images/storym2.jpg",
            "shop_id"   => $shop->id
        ]);
        $shop = Shop::where("name","The Cafe - Star Kitchen")->firstOrFail();
        Image::create([
            "url"       =>"images/thecafe1.jpg",
            "shop_id"   => $shop->id
        ]);
        
        Image::create([
            "url"       =>"images/thecafe2.jpg",
            "shop_id"   => $shop->id
        ]);
        $shop = Shop::where("name","The Myth")->firstOrFail();
        Image::create([
            "url"       =>"images/themyth1.jpg",
            "shop_id"   => $shop->id
        ]);
        
        Image::create([
            "url"       =>"images/themyth2.jpg",
            "shop_id"   => $shop->id
        ]);
        $shop = Shop::where("name","Thị Trấn 3 Cây Chổi")->firstOrFail();
        Image::create([
            "url"       =>"images/thitranbacaychoi1.jpg",
            "shop_id"   => $shop->id
        ]);
        
        Image::create([
            "url"       =>"images/thitranbacaychoi2.jpg",
            "shop_id"   => $shop->id
        ]);
        $shop = Shop::where("name","Tiamo Caffee")->firstOrFail();
        Image::create([
            "url"       =>"images/tiamo1.jpg",
            "shop_id"   => $shop->id
        ]);
        
        Image::create([
            "url"       =>"images/tiamo2.jpg",
            "shop_id"   => $shop->id
        ]);
        $shop = Shop::where("name","Tino Coffee House")->firstOrFail();
        Image::create([
            "url"       =>"images/tino1.jpg",
            "shop_id"   => $shop->id
        ]);
        
        Image::create([
            "url"       =>"images/tino2.jpg",
            "shop_id"   => $shop->id
        ]);
        $shop = Shop::where("name","Up")->firstOrFail();
        Image::create([
            "url"       =>"images/up1.jpg",
            "shop_id"   => $shop->id
        ]);
        
        Image::create([
            "url"       =>"images/up2.jpg",
            "shop_id"   => $shop->id
        ]);
        $shop = Shop::where("name","Urban Station")->firstOrFail();
        Image::create([
            "url"       =>"images/urban1.jpg",
            "shop_id"   => $shop->id
        ]);

        Image::create([
            "url"       =>"images/urban2.jpg",
            "shop_id"   => $shop->id
        ]);
        $shop = Shop::where("name","Cafe Vườn Đá")->firstOrFail();
        Image::create([
            "url"       =>"images/vuonda1.jpg",
            "shop_id"   => $shop->id
        ]);
        
        Image::create([
            "url"       =>"images/vuonda2.jpg",
            "shop_id"   => $shop->id
        ]);
        $shop = Shop::where("name","Windmill Saigon Coffee")->firstOrFail();
        Image::create([
            "url"       =>"images/windmill1.jpg",
            "shop_id"   => $shop->id
        ]);
        
        Image::create([
            "url"       =>"images/windmill2.jpg",
            "shop_id"   => $shop->id
        ]);
        $shop = Shop::where("name","Watcha Cafe")->firstOrFail();
        Image::create([
            "url"       =>"images/watcha1.jpg",
            "shop_id"   => $shop->id
        ]);
       
        Image::create([
            "url"       =>"images/watcha2.jpg",
            "shop_id"   => $shop->id
        ]);
    }
}

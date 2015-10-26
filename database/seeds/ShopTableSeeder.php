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
		//2
        Shop::create([
			"name"		=>"Kujuz Coffee",
			"slug"		=> str_slug("Kujuz Coffee", "-"),
			"address"	=>"5 Trần Quý Khoách",
			"district"	=>"Quận 1",
			"city"		=>"Hồ Chí Minh",
			"main_image"=>"images/kujuzcoffee.jpg",
			"price"		=>"20000",
			"information"=> "coffee tu phuc vu",
			"open_time"	=>"7:00:00",
			"close_time"=>"23:00:00",

		]);
		//3
        Shop::create([
			"name"		=>"BJ Coffee Lounge",
			"slug"		=> str_slug("BJ Coffee Lounge", "-"),
			"address"	=>"9 Nguyễn Thời Trung",
			"district"	=>"Quận 5",
			"city"		=>"Hồ Chí Minh",
			"main_image"=>"images/bjcoffeelounge.jpg",
			"price"		=>"65000",
			"information"=> "kha dat, trang tri nhu 1 lau dai kieu....An Do ! ôi than linh oi !!",
			"open_time"	=>"7:00:00",
			"close_time"=>"23:00:00",

		]);
		//4
        Shop::create([
			"name"		=>"The Myth",
			"slug"		=> str_slug("The Myth", "-"),
			"address"	=>"176 Điện Biên Phủ",
			"district"	=>"Quận 3",
			"city"		=>"Hồ Chí Minh",
			"main_image"=>"images/themyth.jpg",
			"price"		=>"40000",
			"information"=> "phong cach than thoai bi an",
			"open_time"	=>"7:00:00",
			"close_time"=>"23:00:00",

		]);
		//5
        Shop::create([
			"name"		=>"Thị Trấn 3 Cây Chổi",
			"slug"		=> str_slug("Thị Trấn 3 Cây Chổi", "-"),
			"address"	=>"Đường Phan Xích Long",
			"district"	=>"Quận Phú Nhuận",
			"city"		=>"Hồ Chí Minh",
			"main_image"=>"images/thitranbacaychoi.jpg",
			"price"		=>"50000",
			"information"=> "phong cach Trung Co - phu thuy",
			"open_time"	=>"9:00:00",
			"close_time"=>"21:30:00",

		]);
		//6
        Shop::create([
			"name"		=>"Legend Cafe",
			"slug"		=> str_slug("Legend Cafe", "-"),
			"address"	=>" 39 Nhất Chi Mai",
			"district"	=>"Quận Tân Bình",
			"city"		=>"Hồ Chí Minh",
			"main_image"=>"images/legendcafe.jpg",
			"price"		=>"30000",
			"information"=> "phong cach lau dai Chau Au",
			"open_time"	=>"7:00:00",
			"close_time"=>"22:00:00",

		]);
		//7
        Shop::create([
			"name"		=>"Country House Cafe",
			"slug"		=> str_slug("Country House Cafe", "-"),
			"address"	=>"18C Phan Văn Trị",
			"district"	=>"Quận Gò Vấp",
			"city"		=>"Hồ Chí Minh",
			"main_image"=>"images/countryhousecafe.jpg",
			"price"		=>"30000",
			"information"=> "chụp hình dep",
			"open_time"	=>"7:00:00",
			"close_time"=>"23:00:00",

		]);
		//8
        Shop::create([
			"name"		=>"Up",
			"address"	=>"269 Nguyễn Trọng Tuyển",
			"slug"		=> str_slug("Up", "-"),
			"district"	=>"Quận Phú Nhuận",
			"city"		=>"Hồ Chí Minh",
			"main_image"=>"images/up.jpg",
			"price"		=>"25000",
			"information"=> "moi thu bi dao nguoc ;) ",
			"open_time"	=>"7:00:00",
			"close_time"=>"22:30:00",

		]);
		//9
        Shop::create([
			"name"		=>"City House Cafe",
			"slug"		=> str_slug("City House Cafe", "-"),
			"address"	=>"21 Huỳnh Khương An",
			"district"	=>"Quận Gò Vấp",
			"city"		=>"Hồ Chí Minh",
			"main_image"=>"images/cityhousecafe.png",
			"price"		=>"25000",
			"information"=> "kien truc lau dai",
			"open_time"	=>"7:00:00",
			"close_time"=>"22:00:00",

		]);
		//10
        Shop::create([
			"name"		=>"Fig Lounge & cafe",
			"slug"		=> str_slug("Fig Lounge & cafe", "-"),
			"address"	=>"15 Nguyễn Thị Huỳnh",
			"district"	=>"Quận Phú Nhuận",
			"city"		=>"Hồ Chí Minh",
			"main_image"=>"images/figloungecafe.jpg",
			"price"		=>"20000",
			"information"=> "khong gian thien dinh, gan gui thien nhien",
			"open_time"	=>"7:00:00",
			"close_time"=>"22:00:00",

		]);
		//11
        Shop::create([
			"name"		=>"Tiamo Caffee",
			"slug"		=> str_slug("Tiamo Caffee", "-"),
			"address"	=>"139/44D Đinh Bộ Lĩnh",
			"district"	=>"Quận Bình Thạnh",
			"city"		=>"Hồ Chí Minh",
			"main_image"=>"images/tiamo.jpg",
			"price"		=>"15000",
			"information"=> "phong cach co xua",
			"open_time"	=>"6:00:00",
			"close_time"=>"22:00:00",

		]);
		//12
        Shop::create([
			"name"		=>"Cúcuta Coffee",
			"slug"		=> str_slug("Cúcuta Coffee", "-"),
			"address"	=>"2D Nguyễn Thành Ý",
			"district"	=>"Quận 1",
			"city"		=>"Hồ Chí Minh",
			"main_image"=>"images/cucuta.jpg",
			"price"		=>"30000",
			"information"=> "binh dung caffee dep, la",
			"open_time"	=>"7:00:00",
			"close_time"=>"23:00:00",

		]);
		//13
        Shop::create([
			"name"		=>"Monkey In Black Cafe",
			"slug"		=> str_slug("Monkey In Black Cafe", "-"),
			"address"	=>"263 Trần Quang Khải",
			"district"	=>"Quận 1",
			"city"		=>"Hồ Chí Minh",
			"main_image"=>"images/monkeyinblackcafe.jpg",
			"price"		=>"25000",
			"information"=> "uong caffee, an luon ca ly ;)",
			"open_time"	=>"8:00:00",
			"close_time"=>"22:00:00",

		]);
		//14
        Shop::create([
			"name"		=>"Watcha Cafe",
			"slug"		=> str_slug("Watcha Cafe", "-"),
			"address"	=>"28/1 Tôn Thất Tùng",
			"district"	=>"Quận 1",
			"city"		=>"Hồ Chí Minh",
			"main_image"=>"images/watcha.jpg",
			"price"		=>"30000",
			"information"=> "trang tri dep",
			"open_time"	=>"11:00:00",
			"close_time"=>"22:30:00",

		]);
		//15
        Shop::create([
			"name"		=>"Oromia Coffee",
			"slug"		=> str_slug("Oromia Coffee", "-"),
			"address"	=>"193A/D3 Nam Kỳ Khởi Nghĩa",
			"district"	=>"Quận 3",
			"city"		=>"Hồ Chí Minh",
			"main_image"=>"images/oromiacoffee.jpg",
			"price"		=>"36000",
			"information"=> "quan caffee sang chanh :))) ",
			"open_time"	=>"7:00:00",
			"close_time"=>"22:30:00",

		]);
		//16
        Shop::create([
			"name"		=>"Story M Cafe - Retro Modern",
			"slug"		=> str_slug("Story M Cafe - Retro Modern", "-"),
			"address"	=>"51 Trần Nhật Duật",
			"district"	=>"Quận 1",
			"city"		=>"Hồ Chí Minh",
			"main_image"=>"images/storymcafe.jpg",
			"price"		=>"30000",
			"information"=> "co dien ket hop hien dai",
			"open_time"	=>"7:00:00",
			"close_time"=>"23:00:00",

		]);
		//17
        Shop::create([
			"name"		=>"The Cafe - Star Kitchen",
			"slug"		=> str_slug("The Cafe - Star Kitchen", "-"),
			"address"	=>"193/61 Nam Kỳ Khởi Nghĩa",
			"district"	=>"Quận 3",
			"city"		=>"Hồ Chí Minh",
			"main_image"=>"images/thecafe.png",
			"price"		=>"20000",
			"information"=> "cute :'> ",
			"open_time"	=>"10:00:00",
			"close_time"=>"22:00:00",

		]);
		//18
        Shop::create([
			"name"		=>"S-Cafe",
			"slug"		=> str_slug("S-Cafe", "-"),
			"address"	=>"48/17A Hồ Biểu Chánh",
			"district"	=>"Quận Phú Nhuận",
			"city"		=>"Hồ Chí Minh",
			"main_image"=>"images/scafe.jpg",
			"price"		=>"30000",
			"information"=> "phong canh dep",
			"open_time"	=>"7:00:00",
			"close_time"=>"22:00:00",

		]);
		//19
        Shop::create([
			"name"		=>"S'morin Coffee",
			"slug"		=> str_slug("S'morin Coffee", "-"),
			"address"	=>" 240 Cao Thắng (nối dài)",
			"district"	=>"Quận 10",
			"city"		=>"Hồ Chí Minh",
			"main_image"=>"images/smorin.jpg",
			"price"		=>"20000",
			"information"=> "phong cach dep, rong rai",
			"open_time"	=>"7:00:00",
			"close_time"=>"22:00:00",

		]);
		//20
        Shop::create([
			"name"		=>"Gloria Jean’s Coffee Hồ Con Rùa",
			"slug"		=> str_slug("Gloria Jean’s Coffee - Hồ Con Rùa", "-"),
			"address"	=>"2 bis Công Trường Quốc Tế",
			"district"	=>"Quận 3",
			"city"		=>"Hồ Chí Minh",
			"main_image"=>"images/gloriajeanscoffee.jpg",
			"price"		=>"60000",
			"information"=> "note : chi mo buoi sang thoi nhe ;) gan ho con rua ;)",
			"open_time"	=>"7:00:00",
			"close_time"=>"11:00:00",

		]);
		//21
        Shop::create([
			"name"		=>"Lu's Coffee Phạm Hùng",
			"slug"		=> str_slug("Lu's Coffee - Phạm Hùng", "-"),
			"address"	=>"229B Phạm Hùng",
			"district"	=>"Quận 8",
			"city"		=>"Hồ Chí Minh",
			"main_image"=>"images/luscoffee.jpg",
			"price"		=>"20000",
			"information"=> "quan phu hop voi sinh vien, cung dep !",
			"open_time"	=>"8:00:00",
			"close_time"=>"22:00:00",

		]);
		//22
        Shop::create([
			"name"		=>"Cooku’s Nest Cafe",
			"slug"		=> str_slug("Cooku’s Nest Cafe", "-"),
			"address"	=>"13 Tú Xương",
			"district"	=>"Quận 3",
			"city"		=>"Hồ Chí Minh",
			"main_image"=>"images/cookusnest.jpg",
			"price"		=>"30000",
			"information"=> "quan nay co gac lung ne :v",
			"open_time"	=>"8:00:00",
			"close_time"=>"22:00:00",

		]);
		//23
        Shop::create([
			"name"		=>"Đã từng thấy",
			"slug"		=> str_slug("Đã từng thấy", "-"),
			"address"	=>"89/15 Hàm Nghi",
			"district"	=>"Quận 1",
			"city"		=>"Hồ Chí Minh",
			"main_image"=>"images/datungthay.jpg",
			"price"		=>"35000",
			"information"=> "quan nay khong gian yen tinh :), co sach :v",
			"open_time"	=>"7:00:00",
			"close_time"=>"23:00:00",

		]);
		//24

    }
}

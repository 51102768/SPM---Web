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
			"information"=> "Nếu hầu hết các quán cà phê khác, cửa luôn mở hay chỉ khép hờ thì Kujuz Coffee lại khác. Không gian bên trong tách biệt với bên ngoài bằng một chiếc cửa luôn khóa kín. Khác đến quán, phải bấm chuông, chủ quán mới ra mở cửa cho vào. Không chỉ khác biệt ở cách đón tiếp, quán có hàng trăm cửa sổ này cũng để khách tự pha chế, tự phục vụ",
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
			"information"=> "Với gam vàng vương giả, trần nhà cao vút, cột trụ trạm trổ, dải lụa mềm mại, tiếng nhạc du dương, BJ Coffee Lounge mang đến cho bạn cảm giác như đang lạc vào một lâu đài.",
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
			"information"=> "Như tên gọi, The Myth không khác nơi ở của các vị thần trong một tòa lâu đài cổ kính và vĩ đại nổi lên từ mặt nước thật cổ kính và vĩ đại… Trong không gian đó, những chú bò thần khổng lồ, bức tượng nữ thần của truyền thuyết thần thoại xa xưa khiến nơi đây càng huyền ảo và mê hoặc.",
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
			"information"=> "Cafe Thị Trấn 3 Cây Chổi sở hữu một thiết kế đậm chất trung cổ châu Âu. Thiết kế và trang trí của quán được lấy theo ý tưởng của bộ truyện Harry Potter. Bên cạnh không gian, quán cũng có nhiều dịch vụ để bạn hòa mình vào bộ truyện yêu thích.",
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
			"information"=> "Huyền thoại Café mang dáng dấp tòa lâu đài châu Âu Chateau De Chillon cổ xưa, với những đường cong mềm mại đan xen vẻ thô sơ của những phiến đá không mài giũa.",
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
			"information"=> "Country House Cafe được chia thành nhiều khu với nhiều tiểu cảnh. Mỗi tiểu cảnh có một điểm nhấn khác nhau. Những ngôi nhà trên cao mang đến cảm giác về ngày nắng ấm. Những con đường mòn uốn cong cùng hoa mang đến một Đà Lạt dịu mát. những chiếc cối xay gió khiến người ta liên tưởng đến Don Quixote.",
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
			"information"=> "Up, quán cà phê up ngược mang đến cho bạn những trải nghiệm lý thú trong ý tưởng và thiết kế.",
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
			"information"=> "Nằm trên con đường Huỳnh Khương An, City House Cafe hút du khách với vẻ ngoài sang trọng, thu hút doanh nhân, bạn bè, gia đình, cặp đôi… đến nghỉ ngơi, thư giãn, thưởng thức cafe…Quán  được thiết kế với 9 phố theo phong cách châu Âu, mỗi phố mang tên một loại hoa khác nhau. với nhiều ống khói đặc trưng giữa khu rừng đầy cây xanh bóng mát.",
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
			"information"=> "Fig Lounge & cafe được thiết kế, trang trí lấy ý tưởng từ cây bồ đề. Tất cả vật dụng trang trí nội thất của quán đều làm bằng vật liệu có nguồn gốc thiên nhiên mang đến cảm giác nhẹ nhàng, thân thiện và thư giãn.",
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
			"information"=> "Được thiết kế theo phong cách của Ý, với 2 gam màu nổi bật đó là đỏ và trắng
Thực đơn đa dạng thức uống, giá bình dân
Hợp với các buổi thư giãn, hẹn hò, họp nhóm",
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
			"information"=> "Quán cafe Cúcuta có không gian thoáng mát, trang trí xinh xắn thích hợp để các bạn trẻ hẹn hò, họp nhóm, thư giãn, menu phong phú các loại thức uống.",
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
			"information"=> "Monkey In Black có không gian ấm cúng, tính tế là địa chỉ thư giãn thích hợp cho mỗi khách. Với châm ngôn '"'Nghĩ điên làm chất'"' hương vị cafe nơi đây đậm đà.",
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
			"information"=> "Một quán cafe phục vụ các món tráng miệng và nước uống kiểu Nhật như Matcha từ Shizuoka, bánh Honey Toast, Panna Cotta, Warabi Mochi, Mocktails, Oreo..",
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
			"information"=> "Quán cafe xinh xắn có không gian bài trí ấm cúng, hiện đại với menu đa dạng từ cafe cho đến soda, đá xay...",
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
			"information"=> "StoryM Cafe được ra đời tháng 6/2013 với phong cách Retro. Quán hi vọng sẽ là nơi lý tưởng dành cho những ai đam mê sách, yêu âm nhạc",
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
			"information"=> "The Cafe có không gian đơn giản, mộc mạc, khéo léo là địa điểm lý tưởng cho bạn thưởng thức cafe và các loại bánh hấp dẫn đáp ứng nhu cầu khẩu vị của bạn.",
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
			"information"=> "S Cafe Sài gòn rất đẹp với thiết kế mở độc đáo, hiện đại, cho bạn khoảng không gian thoáng đãng, một tầm nhìn rộng mở để tận hưởng thiên nhiên xanh má",
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
			"information"=> "Quán thiết kế cổ điển xen lẫn những nét hiện đại, nổi bật với gam màu nâu sẽ làm các bạn hài lòng khi đến với S morin Coffee.",
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
			"information"=> "Khác biệt với lối thiết kế truyền thống của hệ thống cửa hàng, Gloria Jean’s Coffees có không gian mở với nội thất hiện đại được bố trí một cách sáng tạo nhằm tạo cho khách hàng nhiều trải nghiệm mới mẻ, đồng thời, cung cấp kiến thức và chuyên môn cho khách hàng tại các điểm tiếp xúc.",
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
			"information"=> "Lu's Coffee có không gian ấm cúng, thoải mái là địa điểm lý tưởng cho bạn thưởng thức cafe và các loại nước giải khát độc đáo, Phục vụ nhiệt tình, vui vẻ.",
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
			"information"=> "Quán có phong cách mộc, kiến trúc giống một ngôi nhà trên thảo nguyên khiến cho khách đến đây luôn cảm thấy bình dị, thoải mái.",
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
			"information"=> "Đã Từng Thấy Cafe có không gian ấm cúng, yên tĩnh với kiểu thiết kế hoài cổ tạo cảm giác nhẹ nhàng, thư thái. Hợp với các buổi hẹn hò, thư giãn.",
			"open_time"	=>"7:00:00",
			"close_time"=>"23:00:00",

		]);
		//24
		Shop::create([
			"name"		=>"Cafe Vườn Đá",
			"slug"		=> str_slug("Cafe Vườn Đá", "-"),
			"address"	=>"3 Hòa Bình",
			"district"	=>"Quận 11",
			"city"		=>"Hồ Chí Minh",
			"main_image"=>"images/vuonda.jpg",
			"price"		=>"60000",
			"information"=> "Quán cafe sân vường rộng rãi nằm ngay cạnh Đầm Sen, thiết kế với khung cảnh thiên nhiên tuyệt đẹp, quán có sức chứa lên đến hơn 150 người.",
			"open_time"	=>"7:00:00",
			"close_time"=>"23:00:00",

		]);
		//25
		Shop::create([
			"name"		=>"Tino Coffee House",
			"slug"		=> str_slug("Tino Coffee House", "-"),
			"address"	=>"462 Lũy Bán Bích",
			"district"	=>"Quận Tân Phú",
			"city"		=>"Hồ Chí Minh",
			"main_image"=>"images/tino.jpg",
			"price"		=>"45000",
			"information"=> "Tino Cafe Nằm trong chuỗi hệ thống cà phê Tinô, Tinô House được ví như nốt nhạc trầm đầy ấn tượng trong bản hợp ca mang sắc màu của phong cách.",
			"open_time"	=>"7:00:00",
			"close_time"=>"23:00:00",

		]);
		//26
		Shop::create([
			"name"		=>"Cõi Mơ",
			"slug"		=> str_slug("Cõi Mơ", "-"),
			"address"	=>"416 Lũy Bán Bích",
			"district"	=>"Quận Tân Phú",
			"city"		=>"Hồ Chí Minh",
			"main_image"=>"images/coimo.jpg",
			"price"		=>"45000",
			"information"=> "Cafe Cõi Mơ - Lũy Bán Bích, Phú Thạnh, Tân Phú, Hồ Chí Minh. Cafe Cõi Mơ được thiết kế theo phong cách Cafe sân vườn có nhiều cây xanh, có tầng lầu.",
			"open_time"	=>"7:00:00",
			"close_time"=>"23:00:00",

		]);
		//27
		Shop::create([
			"name"		=>"Windmill Saigon Coffee",
			"slug"		=> str_slug("Windmill Saigon Coffee", "-"),
			"address"	=>"34 Ngô Thời Nhiệm",
			"district"	=>"Quận 3",
			"city"		=>"Hồ Chí Minh",
			"main_image"=>"images/windmill.jpg",
			"price"		=>"50000",
			"information"=> "Windmills Coffee - chuỗi cafe số 1 Đà Lạt, dành cho giới trẻ với không gian cùng hoa, cây. Cảm giác như đang ở một nhà kính.",
			"open_time"	=>"7:00:00",
			"close_time"=>"22:30:00",

		]);
		//28
		Shop::create([
			"name"		=>"PNC Book Cafe",
			"slug"		=> str_slug("PNC Book Cafe", "-"),
			"address"	=>"3 Nguyễn Oanh"
			"district"	=>"Quận Gò Vấp",
			"city"		=>"Hồ Chí Minh",
			"main_image"=>"images/bookcafe.jpg",
			"price"		=>"50000",
			"information"=> "Cafe Phương Nam là sự kết hợp tuyệt vời giữa cafe và sách. Với hàng ngàn đầu sách hay và menu thực đơn đa dạng các món ăn nhẹ cùng thức uống ngon.",
			"open_time"	=>"7:00:00",
			"close_time"=>"22:00:00",

		]);
		//29
		Shop::create([
			"name"		=>"Effoc Cafe",
			"slug"		=> str_slug("Effoc Cafe", "-"),
			"address"	=>"499 Sư Vạn Hạnh",
			"district"	=>"Quận 10",
			"city"		=>"Hồ Chí Minh",
			"main_image"=>"images/effoc.jpg",
			"price"		=>"40000",
			"information"=> "Effoc Cafe luôn khẳng định mình với không gian tươi mới tràn đầy sức sống cùng hương vị pha chế thức uống tuyệt vời.",
			"open_time"	=>"7:00:00",
			"close_time"=>"22:00:00",

		]);
		//30
		Shop::create([
			"name"		=>"Hawaii Kìa",
			"slug"		=> str_slug("Hawaii Kìa", "-"),
			"address"	=>"401 Sư Vạn Hạnh",
			"district"	=>"Quận 10",
			"city"		=>"Hồ Chí Minh",
			"main_image"=>"images/hawaii.jpg",
			"price"		=>"50000",
			"information"=> "Quán cafe Hawaii có không gian rộng rãi, thoáng mát, lịch sự, cafe và thức uống pha chế hương vị thơm ngon, hấp dẫn, phục vụ nhanh nhẹn. Có nơi nằm nghỉ.",
			"open_time"	=>"7:00:00",
			"close_time"=>"22:00:00",

		]);
		//31
		Shop::create([
			"name"		=>"Urban Station",
			"slug"		=> str_slug("Urban Station", "-"),
			"address"	=>"175 Bình Thới",
			"district"	=>"Quận 11",
			"city"		=>"Hồ Chí Minh",
			"main_image"=>"images/urban.jpg",
			"price"		=>"35000",
			"information"=> "Urban Station Coffee Takeaway là một trong những thương hiệu cafe takeaway nổi tiếng ở Sài Gòn. Menu đa dạng với nhiều loại cafe đá xay, sinh tố, sorbet, ...",
			"open_time"	=>"7:00:00",
			"close_time"=>"22:00:00",

		]);
		//32
		Shop::create([
			"name"		=>"Du Miên",
			"slug"		=> str_slug("Du Miên", "-"),
			"address"	=>"7 Phan Văn Trị",
			"district"	=>"Quận Gò Vấp",
			"city"		=>"Hồ Chí Minh",
			"main_image"=>"images/dumien.jpg",
			"price"		=>"60000",
			"information"=> "Quán nằm trong hệ thống cà phê Du Miên, thiết kế độc đáo mang đậm chất Tây Ban Nha, hài hoà cùng thiên nhiên, thưởng thức một loại thức uống thơm ngon.",
			"open_time"	=>"7:00:00",
			"close_time"=>"22:00:00",

		]);
		//33
		Shop::create([
			"name"		=>"Miền Thảo Mộc",
			"slug"		=> str_slug("Miền THảo Mộc", "-"),
			"address"	=>"519 Minh Phụng",
			"district"	=>"Quận 11",
			"city"		=>"Hồ Chí Minh",
			"main_image"=>"images/mienthaomoc.jpg",
			"price"		=>"50000",
			"information"=> "Quán cafe Miền Thảo Mộc có không gian sân vườn rộng rãi thích hợp để hẹn hò, thư giãn hay họp nhóm với bạn bè, menu phong phú các loại thức uống.",
			"open_time"	=>"7:00:00",
			"close_time"=>"22:00:00",

		]);
		//34
		Shop::create([
			"name"		=>"Miền Đồng Thảo",
			"slug"		=> str_slug("Miền Đồng Thảo", "-"),
			"address"	=>"221 Nguyễn Trọng Tuyển",
			"district"	=>"Quận Phú Nhuận",
			"city"		=>"Hồ Chí Minh",
			"main_image"=>"images/miendongthao.jpg",
			"price"		=>"50000",
			"information"=> "Miền Đồng Thảo cafe là nơi lý tưởng để thư giãn và ngắm cảnh thơ mộng, quán có wifi, khu vực hút thuốc và hỗ trợ hội thảo.",
			"open_time"	=>"7:00:00",
			"close_time"=>"22:00:00",

		]);
		//35
		Shop::create([
			"name"		=>"Đà Lạt Phố",
			"slug"		=> str_slug("Đà Lạt Phố", "-"),
			"address"	=>"70 Lữ Gia",
			"district"	=>"Quận 11",
			"city"		=>"Hồ Chí Minh",
			"main_image"=>"images/dalatpho.jpg",
			"price"		=>"50000",
			"information"=> "Quán cafe Đà Lạt Phố có không gian rộng rãi, thoáng mát, lịch sự với gam màu tím mộng mơ, cafe pha chế hương vị thơm ngon, đậm đà, phục vụ nhanh nhẹn.",
			"open_time"	=>"7:00:00",
			"close_time"=>"22:00:00",

		]);
		//36

    }
}

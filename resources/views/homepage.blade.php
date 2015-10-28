	
@extends('master')
@section('content')
<div class="parallax-container">
  <div class="parallax"><img style="width:100%" src="{{asset('images/coffee-bg.jpg')}}"></div>
</div>
<div class="row">
	<div class="col s12 m12">
		<ul class="tabs">
			<li class="tab col s3 m3"><a class="active" href="#mainpage">Trang chủ</a></li>
			<li class="tab col s3 m3"><a href="asdasd">Tin tức</a></li>
			<li class="tab col s3 m3"><a href="#test3">Trải nghiệm</a></li>
			<li class="tab col s3 m3"><a href="#test4">Các loại cafe</a></li>
		</ul>
	</div>
</div>
<div class="parallax-container">
	<div class="parallax slide"><img id="slideWrap" style="width:100%" src="{{asset('images/palarax2.jpg')}}"></div>
</div>
<div id="mainpage" class="section no-pad-bot">
	<div class="container">
		<div class="row">
        <div class="col s12 m12">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text filerWrapper">
              <span class="card-title">Bộ lọc: </span>
            </div>
          </div>
        </div>
      </div>
		<div class="row right-align">

			<a class="waves-effect waves-light btn" id="removeFilter">Xóa bộ lọc</a>
			<!-- Modal Trigger -->
			<a class="waves-effect waves-light btn modal-trigger" href="#filtermodal">Thêm bộ lọc</a>
			
			<a class='dropdown-button btn brown' id="typeShow" href='#' data-activates='dropdown1'>Tất cả</a>

			<ul id='dropdown1' class='dropdown-content'>
				<li class="btnType" data-type="0"><a href="#!">Tất cả</a></li>
				<li class="divider"></li>
				<li class="btnType" data-type="1"><a href="#!">Lượt xem</a></li>
				<li class="divider"></li>
				<li class="btnType" data-type="2"><a href="#!">Mới nhất</a></li>
			</ul>
		</div>
		<div class="row masonry-grid">
			
      	</div>
      	<div class="waitingIcon">
		<div class="preloader-wrapper big active">
		<div class="spinner-layer spinner-yellow-only">
		  <div class="circle-clipper left">
		    <div class="circle"></div>
		  </div><div class="gap-patch">
		    <div class="circle"></div>
		  </div><div class="circle-clipper right">
		    <div class="circle"></div>
		  </div>
		</div>
		</div>
	</div>
    </div>
    

	<!-- Modal Structure -->
	<div id="filtermodal" class="modal bottom-sheet">
		<div class="modal-content">
			<h4>Tìm kiếm theo vị trí</h4>
			<div class="row">
				@foreach($filter['districts'] as $district)
					<a href="#" data-filter="{{$district->district}}" class="chipFilter">
						<div class="chip">
							{{$district->district}}
						</div>
					</a>
				@endforeach
			</div>
		</div>
		<div class="modal-footer">
			<a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Đóng</a>
		</div>
	</div>
</div>


@endsection

@section('script')
<script>
	var type = 0;
	var $container = $('.masonry-grid');
	var sliders = {!!json_encode($sliders)!!};
	var count_slider = 1;
	var count = 0;
	var displayedElements = 0;
	var stop_scroll = false;
	var district = [];

	$(document).ready(function(){
		// the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
		$('.modal-trigger').leanModal();

		
		$('.chipFilter').on("click",function(e){
			e.preventDefault();
			


			var index = district.indexOf($(this).attr("data-filter"));
			if (index > -1) {
			}
			else{
				var element = $(this).attr("data-filter") + '<i class="material-icons removeDistrict" data-filter="'+$(this).attr("data-filter")+'">close</i>';	
				$('.filerWrapper').append('<div class="chip" style="margin-left: 10px">'+element+'</div>');
				district.push($(this).attr("data-filter"));
			}

			$('#filtermodal').closeModal();

			displayedElements = 0;
			stop_scroll = false;
			$container.html("");
			$container.css("height","0");
			getData();

		});

		$(document).on("click",".removeDistrict",function(){
			var index = district.indexOf($(this).attr("data-filter"));
			if (index > -1) {
			    district .splice(index, 1);
			}

			displayedElements = 0;
			stop_scroll = false;
			$container.html("");
			$container.css("height","0");
			getData();
		});

		$("#removeFilter").click(function(e){
			e.preventDefault();
			district = [];

			$(".filerWrapper").find(".chip").remove();
			displayedElements = 0;
			stop_scroll = false;
			$container.html("");
			$container.css("height","0");
			getData();
		});
	});

	jQuery(window).on('load', function(){
	 	$('.parallax').parallax();
	 	$(".button-collapse").sideNav();
		var $container = $('.masonry-grid');
		// initialize
		$container.masonry({
		columnWidth: 2,
		itemSelector: '.col',
		});

		$.each(sliders,function(index,slider){
				count++;
		});
		getData();

		$(window).scroll(function(){
			//When we reach the bottom of the page we will call the getData function
			//to execude the ajax
			if($(window).scrollTop() + $(window).height() === ($(document).height()) ){
				if(!stop_scroll){
					getData();
				}
			}
		});
	

		$("li.tab").click(function(){
			$("#slideWrap").attr("src",sliders[count_slider].url);
			count_slider++;
			if(count_slider == count){
				count_slider = 0;
			}
		});

		$("li.btnType").on("click",function(){
			type = $(this).attr("data-type");
			displayedElements = 0;
			stop_scroll = false;
			$container.html("");
			$container.css("height","0");
			$('#typeShow').html($(this).find("a").html());
			getData();
		});
	});

	

	//the ajax function which will get the data from the server
	function getData(){
		//the container where we will be placing the data
		$(".waitingIcon").show();

		//counter for the displayed elements
		//at first this will be 0

		//the actual ajax function
		$.ajax({
			type: "POST",
			url: "get-shop",
			data: {num:displayedElements, type:type, district: district},
			beforeSend: function (xhr) {
	            var token = $('meta[name="csrf_token"]').attr('content');
	            if (token) {
	                  return xhr.setRequestHeader('X-CSRF-TOKEN', token);
	            }
	        },
		}).done(function(response){
				//if everything is ok the server (PHP getData function)
			//will return response with the remaining data
			var dataElement = '';
			displayedElements = response.num;
			var count = 0;

			//foreach loop where for every element in the returned array
			//we display li element with the data
			$.each(response.shop, function(key,value){
				count++;

				dataElement +='<div class="col s6 m4">';
          		dataElement +='<div class="card">';
		    	dataElement +='<div class="card-image waves-effect waves-block waves-light">';
		      	dataElement +='<img class="activator" src="'+ value.main_image +'">';
		    	dataElement +='</div>';
		    	dataElement +='<div class="card-content">';
		      	dataElement +='<span class="card-title activator grey-text text-darken-4">'+value.name+'<i class="material-icons right">more_vert</i></span>';
		      	dataElement +='<a class="waves-effect waves-light btn" href="{{asset('shop')}}'+"/"+value.slug+'"><i class="material-icons right">view_module</i>xem chi tiết</a>';
		    	dataElement +='</div>';
		    	dataElement +='<div class="card-reveal">';
		      	dataElement +='<span class="card-title grey-text text-darken-4">'+value.name+'<i class="material-icons right">close</i></span>';
		      	dataElement +='<p>'+truncateText(value.information, 50)+'</p>';
		      	dataElement +='<p>Giá: '+formatNumber(value.price)+'<sup>đ</sup></p>';
		      	dataElement +='<p>Giờ mở cửa:'+value.open_time+' đến '+value.close_time+'</p>';
		    	dataElement +='</div>';
		  		dataElement +='</div>';
        		dataElement +='</div>';    		
			});

			if(count==0){
				stop_scroll = true;
			}

			var $dataElement = jQuery(dataElement);	
			//last we will append the li elements to the container
			$container.append( $dataElement);
			$container.imagesLoaded(function() {
				$container.masonry();
				$container.masonry('appended',$dataElement); //as told above
			});
			$(".waitingIcon").hide();
		});

		function formatNumber (num) {
			return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.")
		}
		function truncateText(text, maxLength) {
		    var truncated = text;

		    if (truncated.length > maxLength) {
		        truncated = truncated.substr(0,maxLength) + '...';
		    }
		    return truncated;
		}
	}
</script>
@endsection
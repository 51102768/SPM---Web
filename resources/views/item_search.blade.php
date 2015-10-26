@extends('master')
@section('content')
<div id="mainpage" class="section no-pad-bot">
	<div class="container">
		@if(count($shops) != 0)
		<h3>Có tất cả {{count($shops)}} kết quả</h3>
		<div class="row masonry-grid">
			@foreach($shops as $shop)
			<div class="col s6 m4">
          		<div class="card">
		    		<div class="card-image waves-effect waves-block waves-light">
		      			<img class="activator" src="{{$shop->main_image}}">
		    		</div>
			    	<div class="card-content">
			      		<span class="card-title activator grey-text text-darken-4">{{$shop->name}}<i class="material-icons right">more_vert</i></span>
			      		<a class="waves-effect waves-light btn" href="{{asset('shop'.$shop->slug)}}"><i class="material-icons right">view_module</i>xem chi tiết</a>
			    	</div>
			    	<div class="card-reveal">
			      		<span class="card-title grey-text text-darken-4">{{$shop->name}}<i class="material-icons right">close</i></span>
			      		<p>{{$shop->information}}</p>
			      		<p>Giá: {{$shop->price}}<sup>đ</sup></p>
			      		<p>Giờ mở cửa:{{$shop->open_time}} đến {{$shop->close_time}}</p>
			    	</div>
		  		</div>
        	</div>
        	@endforeach
      	</div>
      	@else
      	<h3>Không có kết quả nào được tìm thấy</h3>
      	<div class="row">
      		<img src="{{asset('images/search.gif')}}">
      	</div>
      	@endif
    </div>
@endsection

@section('script')
	<script>
	$(document).ready(function(){
		$('.masonry-grid').imagesLoaded(function() {
			$('.masonry-grid').masonry({
				columnWidth: 2,
				itemSelector: '.col',
			});
		});
		// initialize
	});
	</script>
@endsection
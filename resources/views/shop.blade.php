@extends('master')
@section('content')
<div class="parallax-container">
  <div class="parallax"><img style="width:100%" src="{{asset('images/paralax3.jpg')}}"></div>
</div>
<div class="section no-pad-bot">
	<div class="container">
		<h3>{{$shop->name}}</h3>
		<div class="card-panel white imgWrapper">
			<div class="row">
				<div class="col s4 m4 ">
					<img class="responsive-img" src="{{asset($shop->main_image)}}">
				</div>
				<div class="col s8 m8">
					<ul class="collection">
				    <li class="collection-item avatar">
				      <i class="material-icons circle blue">contacts</i>
				      <span class="title">Địa chỉ</span>
				      <p>{{$shop->address}}, {{$shop->district}}, {{$shop->city}}.
				      </p>
				      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
				    </li>
				    <li class="collection-item avatar">
				      <i class="material-icons circle">stay_current_portrait</i>
				      <span class="title">Số điện thoại</span>
				      <p>{{$shop->phone}}
				      </p>
				      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
				    </li>
				    <li class="collection-item avatar">
				      <i class="material-icons circle green">shopping_cart</i>
				      <span class="title">Giá</span>
				      <p>{{number_format((int)$shop->price, '0', ',', '.')}} <sup>đ</sup>
				      </p>
				      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
				    </li>
				    <li class="collection-item avatar">
				      <i class="material-icons circle red">snooze</i>
				      <span class="title">Giờ phục vụ</span>
				      <p>{{$shop->open_time}} đến {{$shop->close_time}}
				      </p>
				      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
				    </li>
				    <li class="collection-item avatar">
				      <i class="material-icons circle yellow">subject</i>
				      <span class="title">Miêu tả</span>
				      <p>{{$shop->information}}
				      </p>
				      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
				    </li>
				  </ul>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

@section('script')
<script>
	jQuery(window).on('load', function(){
	 	$('.parallax').parallax();
	 });
</script>
@endsection
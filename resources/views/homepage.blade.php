@extends('master')
@section('content')
<div class="parallax-container">
	<div class="parallax"><img style="width:100%" src="{{asset('images/coffee-bg.jpg')}}"></div>
</div>
<div class="content">
	<div class="container">
		Có tất cả: {{count($shop)}}
	</div>
</div>
@endsection

@section('script')
<script>
	 $(document).ready(function(){
      $('.parallax').parallax();
    });
</script>
@endsection
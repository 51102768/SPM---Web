<!DOCTYPE html>

<html lang="en">
	<head>
		<!-- Website Title & Description for Search Engine purposes -->
		<title>{{isset($title)?$title:'no title yet'}}</title>
		<meta name="description" content="">
		
		<!-- Mobile viewport optimized -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

		<link rel="stylesheet" type="text/css" href="{{asset('includes/css/materialize.min.css')}}">

		<link href="{{URL::asset('includes/css/style.css')}}" rel="stylesheet">

		@yield('css-link')

	</head>
    <!--[if IE 6 ]><body class="ie6 old_ie"><![endif]-->
    <!--[if IE 7 ]><body class="ie7 old_ie"><![endif]-->
    <!--[if IE 8 ]><body class="ie8"><![endif]-->
    <!--[if IE 9 ]><body class="ie9"><![endif]-->
    <!--[if !IE]><!-->
    <body><!--<![endif]-->
		<meta name="csrf_token" content="{{ csrf_token() }}" />
		@include('default.header')
		<main>
		@yield('content')
		</main>
		@include('default.footer')

		<script src="{{asset('includes/js/jquery-1.11.3.min.js')}}"></script>

		<script src="{{asset('includes/js/materialize.min.js')}}"></script>

		<script src="{{asset('includes/js/imagesloaded.pkgd.min.js')}}"></script>

		<script src="{{asset('includes/js/masonry.pkgd.min.js')}}"></script>

		<script>
			$('.modal-trigger').leanModal();
			$(".search-btn").mouseover(function(){
				$(".search-bar").fadeIn(350);
			});
			$(".close-search").click(function(){
				$(".search-bar").fadeOut(350);
			});
			$("body").on("click",function(evt){    
					if(evt.target.class == "search-bar")
						return;
					//For descendants of menu_content being clicked, remove this check if you do not want to put constraint on descendants.
					if($(evt.target).closest('.search-bar').length)
						return;             

					//Do processing of click event here for every element except with id menu_content
					$(".search-bar").fadeOut(350);
			});

		</script>
		@if(Session::has('message'))
			<script>
				Materialize.toast('{!!Session::get("message")!!}', 4000)
			</script>
		@endif
		@if(Session::has('registerfailed'))
			<script>
				$('#registermodal').openModal();
			</script>
		@endif
		@if(Session::has('loginfailed'))
			<script>
				$('#loginmodal').openModal();
			</script>
		@endif
		@yield('script')
	</body>
</html>
		
		
			
    
    
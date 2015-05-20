<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Medpark - Premium Template</title>
	<meta name="description" content="Here goes description">
	<meta name="author" content="author name">

	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- Stylesheets -->
	<link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Montserrat:400,700'>
	<link rel="stylesheet" href="{{url('src/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{url('src/css/screen.css')}}" media="screen, projection">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<style type="text/css">

	.main-header > .container {
	  background: url(src/img/menu_corner.png) right 0 no-repeat #18A6CF !important;
	  height: 126px !important;
	  position: relative !important;
	}
	</style>

</head>
<body>
<div class="webpage-wrapper">
	@yield('content')
</div>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>
	<script src="{{url('src/js/tweetable.jquery.js')}}"></script>
	<script src="{{url('src/js/data.js')}}"></script>
	<script src="{{url('src/js/jquery.calendario.js')}}"></script>
	<script src="{{url('src/js/jquery.swipebox.js')}}"></script>
	<script src="{{url('src/js/moment.js')}}"></script>
	<script src="{{url('src/js/daterangepicker.js')}}"></script>
	<script src="{{url('src/js/parsley.js')}}"></script>
	<script src="{{url('src/js/jquery.textPlaceholder.js')}}"></script>
	<script src="{{url('src/js/project.js')}}"></script>
	@yield('script')
	
</body>
</html>
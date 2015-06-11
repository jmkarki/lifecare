<!DOCTYPE html>
<html lang="en" ng-app="myApp">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{csrf_token()}}" />
	<title>Lifecare</title>

	<link href="{{asset('/css/crulean.min.css') }}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" href="{{url('css/fontawesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('css/toaster.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('css/chosen.css')}}">
	<!-- <link rel="stylesheet" type="text/css" href="{{url('css/github.css')}}"> -->
	<!-- <link rel="stylesheet" type="text/css" href="{{url('css/github1.css')}}"> -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="wrapper">
		<nav class="navbar navbar-default app-nabbar-default">
			<div class="container clearfix container-centered">
			<div class="row">
				<div class="col-md-12">
					<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle Navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Life<b style="font-size: 25px;">care</b></a>
				</div>				
				<div class="collapse navbar-collapse app-navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="{{ url('/') }}"><b>Home</b></a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><b> Usage</b><span class="caret"></span></a>
							<ul class="dropdown-menu app-dropdown" role="menu">
								<div class="triangle-up"></div>
								<li><a href="{{ url('/client/create') }}">Create New</a></li>
								<li class="divider app-divider"></li>
								<li><a href="{{ url('/client/view') }}">Show All</a></li>
							</ul>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						@if (Auth::guest())
							<li><a href="{{ url('/auth/login') }}">Login</a></li>
						@else
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
								<ul class="dropdown-menu app-dropdown" role="menu">
									<div class="triangle-up"></div>
									<li><a href="{{ url('/client/account') }}"><span class="glyphicon glyphicon-user"></span> Account</a></li>
									<li class="divider app-divider"></li>
									<li><a href="{{ url('/auth/logout') }}"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
								</ul>
							</li>
						@endif
					</ul>
				</div>
				</div>

			</div>

				
			</div>
		</nav>		
		<div class="content-holder">
			@yield('content')
		</div> 
		<div class="app-footer">
	       <center>
	          <p>&copy; 2015 | All rights reserved. <!-- <a href="javascript:void(0)" class="app-terms hidden-xs">Privacy</a>  <a href="javascript:void(0)" class="app-policy hidden-xs">Terms</a> <a href="" class="app-policy hidden-xs">Security</a> --></p>
			<input type="hidden" id="_url" value="{{url('/')}}">
			<toaster-container toaster-options="{'time-out': 3000}"></toaster-container>	          
	       </center>	             
	  </div>
	</div>
<script type="text/javascript" src="{{url('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{url('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{url('js/chosen.js')}}"></script>
<script type="text/javascript" src="{{url('js/angular.min.js')}}"></script>
<script type="text/javascript" src="{{url('js/angular-route.min.js')}}"></script>
<script type="text/javascript" src="{{url('js/angular-animate.min.js')}}" ></script>
<script type="text/javascript" src="{{url('js/angular-file-upload.js')}}"></script>
<script type="text/javascript" src="{{url('js/toaster.js')}}"></script>
<script type="text/javascript" src="{{url('js/app.js')}}"></script>
<script type="text/javascript" src="{{url('js/services.js')}}"></script>
	@yield('script')
</body>
</html>

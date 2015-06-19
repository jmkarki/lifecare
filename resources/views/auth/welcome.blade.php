<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="{{asset('/css/normalize.min.css') }}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<style type="text/css">
		body{
			background-color: #F9F9F9 !important;
		}
		.welcome-content{
			background-color: #EAF0F2;
			padding: 25px;
			padding-bottom: 50px;
			margin: 15px;
			border-bottom: 2px solid #dfdfdf;
			border-top: 2px solid #dfdffd;
		}
		.content-text{
			padding: 31px 0px 31px;
			text-align: center;
			font-size: 22px;
			text-transform: uppercase;
			/*font-family: fantasy;*/
			font-family: sans-serif;
			font-size: 25px;
		}
		.btn-warning:hover, 
		.btn-warning:focus, 
		.btn-warning.focus, 
		.btn-warning:active, 
		.btn-warning.active, 
		.open>.dropdown-toggle.btn-warning {
			color: #ffffff;
			background-color: #F36B24 !important;
			border-color: #ED6016 !important;
			outline: none !important;
		}
		.address-content{
			font-family: sans-serif;
			text-align: center;
			background-color: #F9F9F9;
			border: none;
			color: #868585;
			font-size: 16px;
		}
		.go-links, 
		.go-links:hover, 
		.go-links:active, 
		.go-links:focus{
			/*color: #F47B20;*/
			color: #fff;
			/*font-size: 20px;*/
		}
		.avatar{
		  width: 213px;
		  height: 195px;
		  margin: 20px auto 25px;
		  border-radius: 100%;
		  background-image: url(../image/lifecare-final-logo.png);
		  background-size: cover;
		}
	@media(min-width: 320px) and (max-width: 768px){
		.welcome-content{
			background-color: #EAF0F2;
			padding: 10px;
			padding-bottom: 50px;
			margin: 18px;
			border-bottom: 2px solid #dfdfdf;
			border-top: 2px solid #dfdffd;
		}
		.avatar {
		  width: 150px;
		  height: 145px;
		  margin: 20px auto 25px;
		  border-radius: 100%;
		  background-image: url(../image/lifecare-final-logo.png);
		  background-size: cover;
		}
		.content-text {
		  padding: 3px 0px 31px;
		  text-align: center;
		  font-size: 22px;
		  text-transform: uppercase;
		  font-family: sans-serif;
		  font-size: 15px;
		}
	}
	</style>
</head>
<body>
<div class="container">
	<div class="welcome-content">
		<div class="row">
			<!-- <div class="col-lg-4 col-md-4 col-sm-6"></div> -->
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="avatar"></div>
			</div>
		</div>
		<div class="row">
			<!-- <div class="col-sm-6"></div> -->
			<div class="col-lg-12 col-md-12">
				<div class="content-paragraph">
					<p class="content-text">
						Lifecare Diagnostics & Research Center Pvt. Ltd.
					</p>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- <div class="col-lg-4 col-md-4 col-sm-6"></div> -->
			<div class="col-lg-8 col-lg-offset-2 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
				<div class="section-content">
					<div class="text-center">
						<p><a href="{{url('/auth/login')}}" class="go-links btn btn-warning btn-block">Primary Login</a></p>
						<p><a href="{{url('/auth/client')}}" class="go-links btn btn-warning btn-block">Secondary Login</a></p>
					</div>
					<!-- <button class="btn btn-primary btn-block"  onclick="location.href='{{url('/auth/login')}}'"> -->
					<!-- <button class="btn btn-warning btn-block"  onclick="location.href='{{url('/auth/client')}}'">Secondary Login</button> -->
				</div>
			</div>
			<!-- <div class="col-lg-4 col-md-4 col-sm-6"></div>	 -->
		</div>		
	</div>	

</div>
</body>
</html>
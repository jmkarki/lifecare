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
		.content-text{
			padding: 50px 0px 10px;
			text-align: center;
			font-size: 22px;
			text-transform: uppercase;
			font-family: fantasy;
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
			/*margin-top: 140px;*/
		}
		.welcome-content{
			/*background-image: url(image/lifecare-final-logo.png);
			background-repeat: no-repeat;
			background-size: 165px;
			background-position: center;*/
		}
		.section-content{
			/*margin-top: 15px;*/
		}
		.avatar{
			width: 170px;
			height: 155px;
			margin: -5px auto 25px;
			border-radius: 100%;
			background-image: url(../image/lifecare-final-logo.png);
			background-size: cover;
		}
	</style>
</head>
<body>
<div class="container">
	<div class="welcome-content">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-6"></div>
			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="content-paragraph">
					<p class="content-text">
						Welcome, to Lifecare Diagnostics & Research Center Pvt. Ltd.
					</p>
					<div class="address-content">
						<p>Newroad, Pokhara</p>
						<p>33700, Gandaki, Kaski, Nepal</p>
						<p></p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6"></div>	
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-6"></div>
			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="avatar"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-6"></div>
			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="section-content">
					<button class="btn btn-primary btn-block"  onclick="location.href='{{url('/auth/login')}}'">
						Primary Login
					</button>
					<p></p>
					<button class="btn btn-warning btn-block"  onclick="location.href='{{url('/auth/client')}}'">Secondary Login</button>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6"></div>	
		</div>		
	</div>	

</div>
</body>
</html>
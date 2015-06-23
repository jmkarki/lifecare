@extends('web.default')
@section('content')
<style type="text/css">
	

html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
}

/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
	display: block;
}

body {
	line-height: 1;
}

ol, ul {
	list-style: none;
}

blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}

table {
	border-collapse: collapse;
	border-spacing: 0;
}

label{
	position:absolute;
	left:-9999px;
}

input,textarea {
	font:inherit;
	resize:none;
	background:#fff;
	color:#a5a5a5;
}

[placeholder]:active,
[placeholder]:focus{
	cursor:text;
	color:#a5a5a5;
}

.clear {
	clear:both;
}



body {
	font: 12px/20px 'CopseRegular', CopseRegular, Helvetica, Arial, sans-serif;
	background:url(images/backgrounds/noise.png) repeat scroll 0 0;
	margin:0;
	padding:0;
	color:#818181;
}

#wrapper {
	width:806px;
	margin:0 auto;
	padding:100px 0;
}

a {
	text-decoration:none;
}

a:hover {
	text-decoration:none;
}

a.logo {
	text-align:center;
	display:block;
	margin-bottom:35px;
}

p.copyright {
	clear:both;
	text-align:center;
	margin:15px 0;
	text-shadow: 0 1px 1px rgba(255,255,255,0.7);
}

#book {
	position:relative;
}

.top-page {
	background:url(images/top-paper.png) no-repeat left top;
	width:806px;
	height:24px;
	position:relative;
}

.content-page {
	background:url(images/row.png) repeat-y left top;
	width:806px;
	height:435px;
	position:relative;
}

.bottom-page {
	background:url(images/bottom-paper.png) no-repeat left top;
	width:806px;
	height:55px;
}

.top-spiral {
	position:absolute;
	background:url(images/spiral.png) no-repeat scroll 0 0;
	width:38px;
	height:89px;
	left:-9px;
	top:61px;
}

.bottom-spiral {
	position:absolute;
	background:url(images/spiral.png) no-repeat scroll 0 0;
	width:38px;
	height:89px;
	left:-9px;
	top:293px;
}

.row {
	width:100%;
	height:29px;
	clear:both;
}

h2 {
	font-family: 'CopseRegular', CopseRegular, Helvetica, Arial, sans-serif;
	font-size:28px;
	text-align:center;
	height:29px;
	line-height:32px;
	font-weight:normal;
	text-shadow: 1px 1px 0px #e1e1e1;
	position:relative;
}

h3 {
	font-family:Georgia;
	font-size:18px;
	/*font-style:italic;*/
	/*text-align:center;*/
	/*height:29px;*/
	/*line-height:38px;*/
	font-weight:normal;
	color:#a5a5a5;
}

h4 {
	font-family:Georgia;
	font-size:14px;
	/*font-style:italic;*/
	text-align:center;
	height:29px;
	line-height:38px;
	font-weight:normal;
	color:#a5a5a5;
}

/*-----------------------------------------------------------------------------------*/
/*	3.	Main Content Styles
/*-----------------------------------------------------------------------------------*/

	/*----- 3.1. Countdown -----*/

#countdown {
	float:left;
	padding:21px 0 10px 105px;
	position:relative;
}

.hasCountdown {
	height:115px;
}

.item {
	float:left;
	text-align:center;
	margin:0 24px;
	width:100px;
	height:100px;
	border:1px solid #e5e5e5;	
	background:#fdfdfd url(images/form-pattern.png) repeat scroll 0 0;
	-moz-box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.1);
    -webkit-box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.1);
    box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.1);		
}

.item span {
	font-size:16px;
	clear:both;
	color:#a5a5a5;
}

.item p {
	text-align:center;
	margin-bottom:10px;
	font-size:48px;
	height:60px;
	line-height:64px;
}









  
</style>
		<div id="wrapper">
		<div id="book">				
			<div class="top-page"></div>
			
			<div class="content-page">
				<div class="top-spiral"></div>
				<div class="bottom-spiral"></div>
			
				<div id="home">
					<div class="row"></div>
					<h2>We're currently under construction!</h2>					
					<div class="row"></div>
					<div class="row"></div>
					<h3>We`re working hard and believe we`ll launch the website in:</h3>
					
					<div id="countdown"></div>	
					<div class="clear"></div>
					<div class="row"></div>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
@stop
@section('script')
	<script type="text/javascript" src="{{url('/comming/js/jquery-1.7.min.js')}}"></script>
	<script type="text/javascript" src="{{url('/comming/js/jquery.countdown.js')}}"></script>
	<script type="text/javascript" src="{{url('/comming/js/jquery.tipsy.js')}}"></script>
	<script type="text/javascript" src="{{url('/comming/js/jquery.subscribe.js')}}"></script>
	<script type="text/javascript" src="{{url('/comming/js/jquery.contact.js')}}"></script>
	<script type="text/javascript" src="{{url('/comming/js/custom.js')}}"></script>
	<script type="text/javascript" src="{{url('/comming/js/jquery.placeholder.js')}}"></script>
@stop
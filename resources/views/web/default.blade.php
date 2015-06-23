<!DOCTYPE html>
<html>
<head>
	<title>Welcome - Lifecare Diagnostics & Research Center ...</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Volkhov:400italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="{{url('/web/style/reset.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{url('/web/style/superfish.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{url('/web/style/fancybox/jquery.fancybox.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{url('/style/jquery.qtip.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{url('/web/style/jquery-ui-1.9.2.custom.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{url('/web/style/style.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{url('/web/style/responsive.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{url('/web/style/custom.css')}}">
	<link rel="shortcut icon" href="{{url('/web/images/favicon.ico')}}" />
</head>
<body>
	<div class="site_container">
		<div class="header_container">
			<div class="header clearfix">
				<div class="header_left">
					<a href="{{url('/')}}" title="Lifecare">
						<img src="{{url('/image/lifecare-final-logo.png')}}" alt="logo" class="logo-pic hidden-xs"/>
						<span class="logo visible-xs">Lifecare</span>
					</a>
				</div>
				@include('web.include.top-menu')
				<div class="mobile_menu">
					<select class="mobile-menu-select">						
						<option value="{{url('/')}}" selected="selected">HOME</option>
						<!-- <option value="home.html">- Home Style 1</option>
						<option value="home_2.html">- Home Style 2</option>
						<option value="home_3.html">- Home Style 3</option>
						<option value="home_4.html">- Home Style 4</option>
						<option value="home_5.html">- Home Style 5</option>
						<option value="home_small_slider.html">- Home Small Slider</option> -->
						<option value="{{url('/blog')}}">BLOG</option>
						<!-- <option value="blog.html">- Blog with sidebar</option>
						<option value="blog_2_columns.html">- Blog 2 columns</option>
						<option value="blog_2_columns.html">-- Right sidebar</option>
						<option value="blog_2_columns_left_sidebar.html">-- Left sidebar</option>
						<option value="post.html">- Single post</option> -->
						<option value="about.html">PAGES</option>
						<option value="about.html">- About</option>
						<option value="doctors.html">- Our Doctors</option>
						<option value="medical_care.html">- Medical Care</option>
						<option value="shortcodes.html">- Shortcodes</option>
						<option value="shortcodes.html#features-style">-- Features Style</option>
						<option value="shortcodes.html#carousel">-- Carousel</option>
						<option value="shortcodes.html#testimonials-announcement">-- Testimonials &amp; Announcement</option>
						<option value="shortcodes.html#accordiontab-notifications">-- Accordion &amp; Notifications</option>
						<option value="shortcodes.html#tabs-quote">-- Tabs &amp; Quote</option>
						<option value="shortcodes.html#lists">-- Lists</option>
						<option value="shortcodes.html#icons">-- Icons</option>
						<option value="shortcodes.html#buttons-headings">-- Buttons &amp; Headings</option>
						<option value="shortcodes.html#columns">-- Columns &amp; Code</option>
						<option value="404.html">-- 404 Not Found</option>
						<option value="departments.html">DEPARTMENTS</option>
						<option value="departments.html#primary-health-care">- Primary Health Care</option>
						<option value="departments.html#pediatric-clinic">- Pediatric Clinic</option>
						<option value="departments.html#outpatient-surgery">- Outpatient Surgery</option>
						<option value="departments.html#gynaecological-clinic">- Gynaecological Clinic</option>
						<option value="departments.html#cardiac-clinic">- Cardiac Clinic</option>
						<option value="departments.html#laryngological-clinic">- Laryngological Clinic</option>
						<option value="departments.html#ophthalmology-clinic">- Ophthalmology Clinic</option>
						<option value="departments.html#dental-clinic">- Dental Clinic</option>
						<option value="departments.html#outpatient-rehabilitation">- Outpatient Rehabilitation</option>
						<option value="timetable.html">TIMETABLE</option>
						<option value="timetable.html#all-departments">- All Departments</option>
						<option value="timetable.html#primary-health-care">- Primary Health Care</option>
						<option value="timetable.html#pediatric-clinic">- Pediatric Clinic</option>
						<option value="timetable.html#outpatient-surgery">- Outpatient Surgery</option>
						<option value="timetable.html#gynaecological-clinic">- Gynaecological Clinic</option>
						<option value="timetable.html#cardiac-clinic">- Cardiac Clinic</option>
						<option value="timetable.html#laryngological-clinic">- Laryngological Clinic</option>
						<option value="timetable.html#ophthalmology-clinic">- Ophthalmology Clinic</option>
						<option value="timetable.html#dental-clinic">- Dental Clinic</option>
						<option value="timetable.html#outpatient-rehabilitation">- Outpatient Rehabilitation</option>
						<option value="gallery_2_columns.html">GALLERY</option>
						<!-- <option value="gallery_2_columns.html">- 2 Columns</option>
						<option value="gallery_3_columns.html">- 3 Columns</option>
						<option value="gallery_4_columns.html">- 4 Columns</option>
						<option value="gallery_with_sidebar.html">- With Sidebar</option> -->
						<option value="{{url('/contact')}}">CONTACT</option>
					</select>
				</div>
			</div>
		</div>
		<div>
			@yield('content')
		</div>
		<div class="footer_container">
			<div class="footer">
				<!-- <ul class="footer_banner_box_container clearfix">
					<li class="footer_banner_box super_light_blue">
						<h2>
							Health Insurance
						</h2>
						<p>
							<a class="icon_small_arrow right_white" href="#">Here in medicenter we have individual</a>
						</p>
					</li>
					<li class="footer_banner_box light_blue">
						<h2>
							Medical Records
						</h2>
						<p>
							<a class="icon_small_arrow right_white" href="#">Here in medicenter we have individual</a>
						</p>
					</li>
					<li class="footer_banner_box blue">
						<h2>
							Online Bill Pay
						</h2>
						<p>
							<a class="icon_small_arrow right_white" href="#">Here in medicenter we have individual</a>
						</p>
					</li>
				</ul> -->
				<div class="footer_box_container clearfix">
					<div class="footer_box">
						<h3 class="box_header">
							Medicenter Clinic
						</h3>
						<p class="info">
							Mauris adipiscing mauris fringilla turpis interdum sed pulvinar nisi malesuada individual.
						</p>
						<ul class="footer_contact_info_container clearfix">
							<li class="footer_contact_info_row">
								<div class="footer_contact_info_left">
									Medicenter Clinic
								</div>
							</li>
							<li class="footer_contact_info_row">
								<div class="footer_contact_info_left">
									33 Farlane Street
								</div>
								<div class="footer_contact_info_right">
									+123 655 655
								</div>
							</li>
							<li class="footer_contact_info_row">
								<div class="footer_contact_info_left">
									Keilor East
								</div>
								<div class="footer_contact_info_right">
									+123 755 755
								</div>
							</li>
							<li class="footer_contact_info_row">
								<div class="footer_contact_info_left">
									VIC 3033, Australia
								</div>
								<div class="footer_contact_info_right">
									<a href="mailto:medicenter@mail.com" title="Send Email">
										medicenter@mail.com
									</a>
								</div>
							</li>
						</ul>
						<ul class="social_icons clearfix">
							<li>
								<a class="social_icon facebook" href="http://facebook.com/QuanticaLabs" title="" target="_blank">
									&nbsp;
								</a>
							</li>
							<li>
								<a class="social_icon twitter" href="https://twitter.com/QuanticaLabs" title="" target="_blank">
									&nbsp;
								</a>
							</li>
							<li>
								<a class="social_icon googleplus" href="#" title="">
									&nbsp;
								</a>
							</li>
							<li>
								<a class="social_icon mail" href="mailto:medicenter@mail.com" title="">
									&nbsp;
								</a>
							</li>
						</ul>
					</div>
					<div class="footer_box">
						<div class="clearfix">
							<div class="header_left">
								<h3 class="box_header">
									Latest Posts
								</h3>
							</div>
							<div class="header_right">
								<a href="#" id="footer_recent_posts_prev" class="scrolling_list_control_left icon_small_arrow left_white"></a>
								<a href="#" id="footer_recent_posts_next" class="scrolling_list_control_right icon_small_arrow right_white"></a>
							</div>
						</div>
						<div class="scrolling_list_wrapper">
							<ul class="scrolling_list footer_recent_posts">
								<li class="icon_small_arrow right_white">
									<a href="post.html">
										Mauris adipiscing mauris fringilla turpis interdum sed pulvinar nisi malesuada.
									</a>
									<abbr title="29 May 2012" class="timeago">29 May 2012</abbr>
								</li>
								<li class="icon_small_arrow right_white">
									<a href="post.html">
										Lorem ipsum dolor sit amat velum.
									</a>
									<abbr title="04 Apr 2012" class="timeago">04 Apr 2012</abbr>
								</li>
								<li class="icon_small_arrow right_white">
									<a href="post.html">
										Mauris adipiscing mauris fringilla turpis interdum sed pulvinar nisi malesuada.
									</a>
									<abbr title="02 Feb 2012" class="timeago">02 Feb 2012</abbr>
								</li>
								<li class="icon_small_arrow right_white">
									<a href="post.html">
										Lorem ipsum dolor sit amat velum, consectetur adipiscing elit.
									</a>
									<abbr title="24 Jan 2011" class="timeago">24 Jan 2011</abbr>
								</li>
							</ul>
						</div>
					</div>
					<div class="footer_box last">
						<div class="clearfix">
							<div class="header_left">
								<h3 class="box_header">
									Latest Tweets
								</h3>
							</div>
							<div class="header_right">
								<a href="#" id="latest_tweets_prev" class="scrolling_list_control_left icon_small_arrow left_white"></a>
								<a href="#" id="latest_tweets_next" class="scrolling_list_control_right icon_small_arrow right_white"></a>
							</div>
						</div>
						<div class="scrolling_list_wrapper">
							<ul class="scrolling_list latest_tweets">
							</ul>
						</div>
					</div>
				</div>
				<div class="copyright_area clearfix">
					<div class="copyright_left">
						© Copyright - <a href="" title="Lifecare Diagnonstics & Research Center" target="_blank">Lifecare Diagnostics & Research Center</a>
					</div>
					<div class="copyright_right">
						<a class="scroll_top icon_small_arrow top_white" href="#top" title="Scroll to top">Top</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="{{url('web/js/jquery-1.8.3.min.js')}}"></script>
	<script type="text/javascript" src="{{url('web/js/jquery.ba-bbq.min.js')}}"></script>
	<script type="text/javascript" src="{{url('web/js/jquery-ui-1.9.2.custom.min.js')}}"></script>
	<script type="text/javascript" src="{{url('web/js/jquery.easing.1.3.js')}}"></script>
	<script type="text/javascript" src="{{url('web/js/jquery.carouFredSel-5.6.4-packed.js')}}"></script>
	<script type="text/javascript" src="{{url('web/js/jquery.sliderControl.js')}}"></script>
	<script type="text/javascript" src="{{url('web/js/jquery.linkify.js')}}"></script>
	<script type="text/javascript" src="{{url('web/js/jquery.timeago.js')}}"></script>
	<script type="text/javascript" src="{{url('web/js/jquery.hint.js')}}"></script>
	<script type="text/javascript" src="{{url('web/js/jquery.isotope.min.js')}}"></script>
	<script type="text/javascript" src="{{url('web/js/jquery.isotope.masonry.js')}}"></script>
	<script type="text/javascript" src="{{url('web/js/jquery.fancybox-1.3.4.pack.js')}}"></script>
	<script type="text/javascript" src="{{url('web/js/jquery.qtip.min.js')}}"></script>
	<script type="text/javascript" src="{{url('web/js/jquery.blockUI.js')}}"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="{{url('web/js/main.js')}}"></script>
	@yield('script')
</body>
</html>
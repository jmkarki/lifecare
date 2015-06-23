@extends('web.default')
@section('content')
	<!-- slider -->
	<ul class="slider">
		<li style="background-image: url({{url('/web/images/slider/img1.jpg')}});">
			&nbsp;
		</li>
		<li style="background-image: url({{url('/web/images/slider/img2.jpg')}});">
			&nbsp;
		</li>
		<li style="background-image: url({{url('/web/images/slider/img3.jpg')}});">
			&nbsp;
		</li>
		<li style="background-image: url({{url('/web/images/slider/img3.jpg')}});">
			&nbsp;
		</li>
		<li style="background-image: url({{url('/web/images/slider/img3.jpg')}});">
			&nbsp;
		</li>
	</ul>
	<div class="page relative noborder">
		<div class="top_hint hidden-xs hidden-sm">
			Give us a call: +977 061 521844
		</div>
		<!-- slider content -->
		<div class="slider_content_box clearfix">
			<div class="slider_content" style="display: block;">
				<h1 class="title">
					Top notch<br />experience
				</h1>
				<h2 class="subtitle">
					Medicenter is a responsive template<br />
					perfect for all screen sizes
				</h2>
			</div>
			<div class="slider_content">
				<h1 class="title">
					Show your<br />
					schedule
				</h1>
				<h2 class="subtitle">
					Organize and visualize your week<br />
					with build-in timetable
				</h2>
			</div>
			<div class="slider_content">
				<h1 class="title">
					Build it<br />
					your way
				</h1>
				<h2 class="subtitle">
					Limitless possibilities with multiple<br />
					page layouts and different shortcodes
				</h2>
			</div>
			<div class="slider_content">
				<h1 class="title">
					Build it<br />
					your way
				</h1>
				<h2 class="subtitle">
					Limitless possibilities with multiple<br />
					page layouts and different shortcodes
				</h2>
			</div>
			<div class="slider_content">
				<h1 class="title">
					Build it<br />
					your way
				</h1>
				<h2 class="subtitle">
					Limitless possibilities with multiple<br />
					page layouts and different shortcodes
				</h2>
			</div>
			<!--<div class="slider_navigation">
				<div class="slider_bar"></div>
				<a class="slider_control" id="slide_1_control" href="#" title="1">
					<span class="top_border"></span>
					<span class="slider_control_bar"></span>
					1
				</a>
				<a class="slider_control" id="slide_2_control" href="#" title="2">
					<span class="top_border"></span>
					<span class="slider_control_bar"></span>
					2
				</a>
				<a class="slider_control" id="slide_3_control" href="#" title="3">
					<span class="top_border"></span>
					<span class="slider_control_bar"></span>
					3
				</a>
			</div>-->
		</div>
		<!-- home box -->
		<ul class="home_box_container clearfix">
			<li class="home_box light_blue">
				<h2>
					<a href="contact.html" title="Emergency Case">
						Emergency Case
					</a>
				</h2>
				<div class="news clearfix">
					<p class="text">
						If you need a doctor urgently outside of medicenter opening hours, call emergency appointment number for emergency service.
					</p>
					<a class="more light icon_small_arrow margin_right_white" href="contact.html" title="Read more">Read more</a>
				</div>
			</li>
			<li class="home_box blue">
				<h2>
					<a href="timetable.html" title="Doctors Timetable">
						Doctors Timetable
					</a>
				</h2>
				<div class="news clearfix">
					<p class="text">
						Here at medicenter we have individual doctor's lists. Click read more below to see services and current timetable for our doctors.
					</p>
					<a class="more light icon_small_arrow margin_right_white" href="timetable.html" title="Read more">Read more</a>
				</div>
			</li>
			<li class="home_box dark_blue">
				<h2>
					Opening Hours
				</h2>
				<ul class="items_list thin dark_blue opening_hours">
					<li class="clearfix">
						<span>
							Monday - Friday
						</span>
						<div class="value">
							8.00 - 17.00
						</div>
					</li>
					<li class="clearfix">
						<span>
							Saturday
						</span>
						<div class="value">
							9.30 - 17.30
						</div>
					</li>
					<li class="clearfix">
						<span>
							Sunday
						</span>
						<div class="value">
							9.30 - 15.00
						</div>
					</li>
				</ul>
			</li>
		</ul>
		<div class="page_layout page_margin_top clearfix">
			<div class="page_left">
				<h3 class="box_header">
					Latest News
				</h3>
				<div class="columns clearfix">
					<ul class="blog column_left">
						<li class="post">
							<ul class="comment_box clearfix">
								<li class="date">
									<div class="value">12 DEC 12</div>
									<div class="arrow_date"></div>
								</li>
								<li class="comments_number">
									<a href="post.html#comments_list" title="2 comments">
										2
									</a>
								</li>
							</ul>
							<div class="post_content">
								<a class="post_image" href="post.html" title="Lorem ipsum dolor sit amat velum">
									<img src="images/samples/480x300/image_03.jpg" alt="" />
								</a>
								<h2>
									<a href="post.html" title="Lorem ipsum dolor sit amat velum">
										Lorem ipsum dolor sit amat velum
									</a>
								</h2>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut volutpat rutrum eros sit amet sollicitudin. 
									Suspendisse pulvinar, velit nec pharetra interdum, ante tellus ornare mi, et mollis tellus neque vitae elit. 
									Mauris adipiscing mauris.
								</p>
								<div class="post_footer">
									<ul class="post_footer_details">
										<li>Posted in </li>
										<li>
											<a href="#" title="General">
												General,
											</a>
										</li>
										<li>
											<a href="#" title="Dental clinic">
												Dental clinic
											</a>
										</li>
									</ul>
								</div>
							</div>
						</li>
						<li class="post">
							<ul class="comment_box clearfix">
								<li class="date">
									<div class="value">11 DEC 12</div>
									<div class="arrow_date"></div>
								</li>
								<li class="comments_number">
									<a href="post.html#comments_list" title="8 comments">
										8
									</a>
								</li>
							</ul>
							<div class="post_content">
								<h2>
									<a href="post.html" title="Lorem ipsum dolor sit amat velum">
										Lorem ipsum dolor sit amat velum
									</a>
								</h2>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut volutpat rutrum eros sit amet sollicitudin. 
									Suspendisse pulvinar, velit nec pharetra interdum, ante tellus ornare mi, et mollis tellus neque vitae elit. 
									Mauris adipiscing mauris.
								</p>
								<div class="post_footer">
									<ul class="post_footer_details">
										<li>Posted in</li>
										<li>
											<a href="#" title="General">
												General,
											</a>
										</li>
										<li>
											<a href="#" title="Outpatient surgery">
												Outpatient surgery
											</a>
										</li>
									</ul>
								</div>
							</div>
						</li>
					</ul>
					<ul class="blog column_right">
						<li class="post">
							<ul class="comment_box clearfix">
								<li class="date">
									<div class="value">12 DEC 12</div>
									<div class="arrow_date"></div>
								</li>
								<li class="comments_number">
									<a href="post.html#comments_list" title="3 comments">
										3
									</a>
								</li>
							</ul>
							<div class="post_content">
								<h2>
									<a href="post.html" title="Lorem ipsum dolor sit amat velum">
										Lorem ipsum dolor sit amat velum
									</a>
								</h2>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut volutpat rutrum eros sit amet sollicitudin. 
									Suspendisse pulvinar, velit nec pharetra interdum, ante tellus ornare mi, et mollis tellus neque vitae elit. 
									Mauris adipiscing mauris.
								</p>
								<div class="post_footer">
									<ul class="post_footer_details">
										<li>Posted in </li>
										<li>
											<a href="#" title="General">
												General,
											</a>
										</li>
										<li>
											<a href="#" title="Dental clinic">
												Dental clinic
											</a>
										</li>
									</ul>
								</div>
							</div>
						</li>
						<li class="post">
							<ul class="comment_box clearfix">
								<li class="date">
									<div class="value">11 DEC 12</div>
									<div class="arrow_date"></div>
								</li>
								<li class="comments_number">
									<a href="post.html#comments_list" title="5 comments">
										5
									</a>
								</li>
							</ul>
							<div class="post_content">
								<a class="post_image" href="post.html" title="Lorem ipsum dolor sit amat velum">
									<img src="images/samples/480x300/image_02.jpg" alt="" />
								</a>
								<h2>
									<a href="post.html" title="Lorem ipsum dolor sit amat velum">
										Lorem ipsum dolor sit amat velum
									</a>
								</h2>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut volutpat rutrum eros sit amet sollicitudin. 
									Suspendisse pulvinar, velit nec pharetra interdum, ante tellus ornare mi, et mollis tellus neque vitae elit. 
									Mauris adipiscing mauris.
								</p>
								<div class="post_footer">
									<ul class="post_footer_details">
										<li>Posted in</li>
										<li>
											<a href="#" title="General">
												General,
											</a>
										</li>
										<li>
											<a href="#" title="Outpatient surgery">
												Outpatient surgery
											</a>
										</li>
									</ul>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="show_all clearfix">
					<a class="more" href="blog.html" title="Show all">
						Show all &rarr;
					</a>
				</div>
			</div>
			<div class="page_right">
				<div class="sidebar_box first">
					<h3 class="box_header">
						Departments
					</h3>
					<ul class="accordion">
						<li>
							<div id="accordion-primary-health-care">
								<h3>Primary Health Care</h3>
							</div>
							<div class="clearfix">
								<div class="item_content clearfix">
									<a class="thumb_image" href="#" title="Primary Health Care">
										<img src="images/samples/75x75/image_08.jpg" alt="" />
									</a>
									<p>
										Mauris adisciping fringila turpis intend tellus ornare etos pelim. Pulvunar est cardio neque vitae elit. Lorem vulputat paentra nunc gravida.
									</p>
								</div>
								<div class="item_footer clearfix">
									<a class="more blue icon_small_arrow margin_right_white" href="timetable.html#primary-health-care" title="Timetable">Timetable</a>
									<a class="more blue icon_small_arrow margin_right_white" href="departments.html#primary-health-care" title="Details">Details</a>
								</div>
							</div>
						</li>
						<li>
							<div id="accordion-pediatric-clinic">
								<h3>Pediatric Clinic</h3>
							</div>
							<div class="clearfix">
								<div class="item_content clearfix">
									<a class="thumb_image" href="#" title="Pediatric Clinic">
										<img src="images/samples/75x75/image_05.jpg" alt="" />
									</a>
									<p>
										Mauris adisciping fringila turpis intend tellus ornare etos pelim. Pulvunar est cardio neque vitae elit. Lorem vulputat paentra nunc gravida.
									</p>
								</div>
								<div class="item_footer clearfix">
									<a class="more blue icon_small_arrow margin_right_white" href="timetable.html#pediatric-clinic" title="Timetable">Timetable</a>
									<a class="more blue icon_small_arrow margin_right_white" href="departments.html#pediatric-clinic" title="Details">Details</a>
								</div>
							</div>
						</li>
						<li>
							<div id="accordion-outpatient-surgery">
								<h3>Outpatient Surgery</h3>
							</div>
							<div class="clearfix">
								<div class="item_content clearfix">
									<a class="thumb_image" href="#" title="Outpatient Surgery">
										<img src="images/samples/75x75/image_07.jpg" alt="" />
									</a>
									<p>
										Mauris adisciping fringila turpis intend tellus ornare etos pelim. Pulvunar est cardio neque vitae elit. Lorem vulputat paentra nunc gravida.
									</p>
								</div>
								<div class="item_footer clearfix">
									<a class="more blue icon_small_arrow margin_right_white" href="timetable.html#outpatient-surgery" title="Timetable">Timetable</a>
									<a class="more blue icon_small_arrow margin_right_white" href="departments.html#outpatient-surgery" title="Details">Details</a>
								</div>
							</div>
						</li>
						<li>
							<div id="accordion-gynaecological-clinic">
								<h3>Gynaecological Clinic</h3>
							</div>
							<div class="clearfix">
								<div class="item_content clearfix">
									<a class="thumb_image" href="#" title="Gynaecological Clinic">
										<img src="images/samples/75x75/image_01.jpg" alt="" />
									</a>
									<p>
										Mauris adisciping fringila turpis intend tellus ornare etos pelim. Pulvunar est cardio neque vitae elit. Lorem vulputat paentra nunc gravida.
									</p>
								</div>
								<div class="item_footer clearfix">
									<a class="more blue icon_small_arrow margin_right_white" href="timetable.html#gynaecological-clinic" title="Timetable">Timetable</a>
									<a class="more blue icon_small_arrow margin_right_white" href="departments.html#gynaecological-clinic" title="Details">Details</a>
								</div>
							</div>
						</li>
						<li>
							<div id="accordion-cardiac-clinic">
								<h3>Cardiac Clinic</h3>
							</div>
							<div class="clearfix">
								<div class="item_content clearfix">
									<a class="thumb_image" href="#" title="Cardiac Clinic">
										<img src="images/samples/75x75/image_04.jpg" alt="" />
									</a>
									<p>
										Mauris adisciping fringila turpis intend tellus ornare etos pelim. Pulvunar est cardio neque vitae elit. Lorem vulputat paentra nunc gravida.
									</p>
								</div>
								<div class="item_footer clearfix">
									<a class="more blue icon_small_arrow margin_right_white" href="timetable.html#cardiac-clinic" title="Timetable">Timetable</a>
									<a class="more blue icon_small_arrow margin_right_white" href="departments.html#cardiac-clinic" title="Details">Details</a>
								</div>
							</div>
						</li>
						<li>
							<div id="accordion-laryngological-clinic">
								<h3>Laryngological Clinic</h3>
							</div>
							<div class="clearfix">
								<div class="item_content clearfix">
									<a class="thumb_image" href="#" title="Laryngological Clinic">
										<img src="images/samples/75x75/image_08.jpg" alt="" />
									</a>
									<p>
										Mauris adisciping fringila turpis intend tellus ornare etos pelim. Pulvunar est cardio neque vitae elit. Lorem vulputat paentra nunc gravida.
									</p>
								</div>
								<div class="item_footer clearfix">
									<a class="more blue icon_small_arrow margin_right_white" href="timetable.html#laryngological-clinic" title="Timetable">Timetable</a>
									<a class="more blue icon_small_arrow margin_right_white" href="departments.html#laryngological-clinic" title="Details">Details</a>
								</div>
							</div>
						</li>
						<li>
							<div id="accordion-ophthalmology-clinic">
								<h3>Ophthalmology Clinic</h3>
							</div>
							<div class="clearfix">
								<div class="item_content clearfix">
									<a class="thumb_image" href="#" title="Ophthalmology Clinic">
										<img src="images/samples/75x75/image_06.jpg" alt="" />
									</a>
									<p>
										Mauris adisciping fringila turpis intend tellus ornare etos pelim. Pulvunar est cardio neque vitae elit. Lorem vulputat paentra nunc gravida.
									</p>
								</div>
								<div class="item_footer clearfix">
									<a class="more blue icon_small_arrow margin_right_white" href="timetable.html#ophthalmology-clinic" title="Timetable">Timetable</a>
									<a class="more blue icon_small_arrow margin_right_white" href="departments.html#ophthalmology-clinic" title="Details">Details</a>
								</div>
							</div>
						</li>
						<li>
							<div id="accordion-dental-clinic">
								<h3>Dental Clinic</h3>
							</div>
							<div class="clearfix">
								<div class="item_content clearfix">
									<a class="thumb_image" href="#" title="Dental Clinic">
										<img src="images/samples/75x75/image_03.jpg" alt="" />
									</a>
									<p>
										Mauris adisciping fringila turpis intend tellus ornare etos pelim. Pulvunar est cardio neque vitae elit. Lorem vulputat paentra nunc gravida.
									</p>
								</div>
								<div class="item_footer clearfix">
									<a class="more blue icon_small_arrow margin_right_white" href="timetable.html#dental-clinic" title="Timetable">Timetable</a>
									<a class="more blue icon_small_arrow margin_right_white" href="departments.html#dental-clinic" title="Details">Details</a>
								</div>
							</div>
						</li>
						<li>
							<div id="accordion-outpatient-rehabilitation">
								<h3>Outpatient Rehabilitation</h3>
							</div>
							<div class="clearfix">
								<div class="item_content clearfix">
									<a class="thumb_image" href="#" title="Outpatient Rehabilitation">
										<img src="images/samples/75x75/image_05.jpg" alt="" />
									</a>
									<p>
										Mauris adisciping fringila turpis intend tellus ornare etos pelim. Pulvunar est cardio neque vitae elit. Lorem vulputat paentra nunc gravida.
									</p>
								</div>
								<div class="item_footer clearfix">
									<a class="more blue icon_small_arrow margin_right_white" href="timetable.html#outpatient-rehabilitation" title="Timetable">Timetable</a>
									<a class="more blue icon_small_arrow margin_right_white" href="departments.html#outpatient-rehabilitation" title="Details">Details</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="sidebar_box">
					<h3 class="box_header">
						Make An Appointment
					</h3>
					<p class="info">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut volutpat rutrum eros sit amet sollicitudin.
					</p>
					<ul class="contact_data">
						<li class="clearfix">
							<span class="social_icon phone"></span>
							<p class="value">
								by phone: <strong>1-800-643-4300</strong>
							</p>
						</li>
						<li class="clearfix">
							<span class="social_icon mail"></span>
							<p class="value">
								by e-mail: <a href="mailto:medicenter@mail.com">medicenter@mail.com</a>
							</p>
						</li>
						<li class="clearfix">
							<span class="social_icon form"></span>
							<p class="value">
								or <a href="contact.html" title="Contact form">fill in the form</a> on our contact page
							</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
@stop
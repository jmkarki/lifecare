@extends('template.default')
@section('content')
	<header class="main-header">
		<div class="container">
			<div class="row">
<!-- 
				<div class="span2 helper-decor left-decor">
					<p><b></b></p>
				</div> -->

				<div class="span6 logo-box">
					<a href="index.html">
						<img src="src/img/medpark_logo.png" alt="medpark">
					</a>
				</div> <!-- /.span8 -->

				<div class="span14">
					<nav class="main-nav">
						<ul>
							<li class="current-menu-item">
								<a href="index.html">Home</a>
							</li>
							<li>
								<a href="our_doctors.html">Our doctors</a>
							</li>
							<li>
								<a href="features.html">Pages</a>
								<ul>
									<li>
										<a href="services.html">Services</a>
									</li>
									<li>
										<a href="timeline.html">Timetable</a>
									</li>
									<li>
										<a href="features.html">Features</a>
									</li>
									<li>
										<a href="error.html">404 error</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="blog.html">Blog</a>
							</li>
							<li>
								<a href="contacts.html">Contact</a>
							</li>
						</ul>
					</nav><!-- /.main-nav -->
				</div><!-- /.span16 -->
<!-- 
				<div class="span2 helper-decor">
					<p><b></b></p>
				</div> -->

			</div><!-- /.row -->
		</div><!-- /.container -->
	</header><!-- /.main-header -->

	<div class="main-content container">

		<div class="row">
			<div class="span24">
				<div class="row">

					<div class="medpak-slider span24">
						
						<ul class="slider-nav">
							<li class="prev-slider">
								<a href="#">&#8249;</a>
							</li>
							<li class="next-slider">
								<a href="#">&#8250;</a>
							</li>
						</ul><!-- /.slider-nav -->

						<ul class="slider-medics">
							<li>
								<figure>
									<img src="://placehold.it/950x420" alt="">

									<figcaption>
										<h1>
											<a href="blog_post.html">Professional Inspection</a>
										</h1>
										<div class="slider-info">
											<h3>Qualified specialists</h3>
											<p>
												The newest equipment
											</p>
										</div>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="://placehold.it/950x420" alt="">

									<figcaption>
										<h1>
											<a href="blog_post.html">Professional Inspection2</a>
										</h1>
										<div class="slider-info">
											<h3>Qualified specialists</h3>
											<p>
												The newest equipment
											</p>
										</div>
									</figcaption>
								</figure>
							</li>
						</ul><!-- /.slider-medics -->

						<ul class="slider-bullets">
							
						</ul><!-- /.slider-bullets -->
					</div><!-- /.medpak-slider -->


				</div><!-- /.row -->
			</div><!-- /.span24 -->

			<div class="span24 featured-section">
				<div class="row">
					<div class="span22 offset1">

						<ul class="row featured-services">
							<li class="span6 offset1">
								<div class="row">
									<div class="span4 offset1">
										<figure>
											<a href="single_service.html">
												<img src="src/img/services/1.png" alt="service">
											</a>
										</figure>
										<h4><a href="single_service.html">Patient care</a></h4>
										<p>
											Lorem ipsum dolor sit amet, cons elit.
										</p>
									</div>
								</div>								
							</li>

							<li class="span6 offset1">
								<div class="row">
									<div class="span4 offset1">
										<figure>
											<a href="single_service.html">
												<img src="src/img/services/2.png" alt="service">
											</a>
										</figure>
										<h4><a href="single_service.html">Emergency</a></h4>
										<p>
											Lorem ipsum dolor sit amet, cons elit.
										</p>
									</div>
								</div>								
							</li>
							
							<li class="span6 offset1">
								<div class="row">
									<div class="span4 offset1">
										<figure>
											<a href="single_service.html">
												<img src="src/img/services/3.png" alt="service">
											</a>
										</figure>
										<h4><a href="single_service.html">Stomatology</a></h4>
										<p>
											Lorem ipsum dolor sit amet, cons elit.
										</p>
									</div>
								</div>								
							</li>
							
						</ul><!-- /.featured-services -->
			
					</div><!-- /.span12 -->					
					
				</div><!-- /.row -->
			</div><!-- /.span24 -->

			<div class="span24 special-box">
				<div class="row">
					<div class="span17 offset1">
						<h3><b>Qualified specialists</b> Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</h3>
					</div>
					<div class="span5">
						<a href="#" class="button request-button">Request</a>
					</div>
				</div>
			</div>

			<div class="span24 why-us">
				<div class="row">
					<div class="span9 offset1">
						<h4 class="fantastico fan-green">Why choose medical?</h4>
						<ul class="medpark-acordion">
							<li>
								<label>
									<input type="radio" name="medpark-acordeon" checked="checked">
									<b>Lorem ipsum dolor sit.</b>
									<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</span>
								</label>
							</li>
							<li>
								<label>
									<input type="radio" name="medpark-acordeon">
									<b>Lorem ipsum dolor sit.</b>
									<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</span>
								</label>
							</li>
							<li>
								<label>
									<input type="radio" name="medpark-acordeon">
									<b>Lorem ipsum dolor sit.</b>
									<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</span>
								</label>
							</li>
							<li>
								<label>
									<input type="radio" name="medpark-acordeon">
									<b>Lorem ipsum dolor sit.</b>
									<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</span>
								</label>
							</li>
						</ul>
					</div>
					
					<div class="span12 offset1">
						<h4 class="fantastico fan-blue">Testimonials</h4>

						<div class="testimonials-widget wide-box">
							<ul class="testimonials-nav">
								<li class="prev">
									<a href="#">&#8249;</a>
								</li>
								<li class="next">
									<a href="#">&#8250;</a>
								</li>
							</ul>
							<ul class="testimonials-sliders">
								<li class="row">
									<figure class="span12">
										<a href="#">
											<img src="://placehold.it/70x70" alt="people">
										</a>
										<figcaption>
											<h4>
												<a href="#">Irene Williams</a>
											</h4>
											<em>Ophtamologist</em>
										</figcaption>
									</figure>
									<div class="testimonial-message span10 offset1">
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, illo, odio, adipisci obcaecati officia error.
										</p>
										<time datetime="2013-05-26">26 may 2013</time>
									</div>
								</li>
								<li class="row">
									<figure class="span12">
										<a href="#">
											<img src="://placehold.it/70x70" alt="people">
										</a>
										<figcaption>
											<h4>
												<a href="#">Sara Doe</a>
											</h4>
											<em>Ophtamologist</em>
										</figcaption>
									</figure>
									<div class="testimonial-message span10 offset1">
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit,
										</p>
										<time datetime="2013-05-26">26 may 2013</time>
									</div>
								</li>
								<li class="row">
									<figure class="span12">
										<a href="#">
											<img src="://placehold.it/70x70" alt="people">
										</a>
										<figcaption>
											<h4>
												<a href="#">John Doe</a>
											</h4>
											<em>Ophtamologist</em>
										</figcaption>
									</figure>
									<div class="testimonial-message span10 offset1">
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, illo, odio, adipisci obcaecati officia error.
											Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
										</p>
										<time datetime="2013-05-26">26 may 2013</time>
									</div>
								</li>
							</ul><!-- /.testimonials-sliders -->
						</div><!-- /.testimonials-widget -->
					</div><!-- /.span12 -->
				</div><!-- /.row -->
			</div><!-- /.span24 -->

			<div class="span24 our-doctors">
				<div class="row">
					<h3 class="meet-team span24">Meet our team</h3>

					<div class="span22 offset1">
						
						<ul class="row doctors-list home-show">
							<li class="span6 offset1">
								<div class="row">
									<div class="span4 offset1 content-doctors">
										<h4><a href="#">Sara Doe</a></h4>
										<i>Ophthomologist</i>
										<figure>
											<a href="#">
												<img src="://placehold.it/150x105" alt="">
											</a>
											<figcaption>
												<ul class="social-doctors">
													<li class="facebook">
														<a href="#"></a>
													</li>
													<li class="twitter">
														<a href="#"></a>
													</li>
												</ul>
											</figcaption>
										</figure>
									</div>
									<div class=" span6 about-doctors">
										<div class="row">
											<p class="span4 offset1">
												Lorem ipsum dolor sit amet, cons adipisi elit dower hen.
											</p>
										</div>
									</div>							
								</div>
							</li><!-- /.span6 -->
							
							<li class="span6 offset1">
								<div class="row">
									<div class="span4 offset1 content-doctors">
										<h4><a href="#">Robert Doe</a></h4>
										<i>Surgeon</i>
										<figure>
											<a href="#">
												<img src="://placehold.it/150x105" alt="">
											</a>
											<figcaption>
												<ul class="social-doctors">
													<li class="facebook">
														<a href="#"></a>
													</li>
													<li class="twitter">
														<a href="#"></a>
													</li>
												</ul>
											</figcaption>
										</figure>
									</div>
									<div class=" span6 about-doctors">
										<div class="row">
											<p class="span4 offset1">
												Lorem ipsum dolor sit amet, cons adipisi elit dower hen.
											</p>
										</div>
									</div>							
								</div>
							</li><!-- /.span6 -->

							<li class="span6 offset1">
								<div class="row">
									<div class="span4 offset1 content-doctors">
										<h4><a href="#">Laura Doe</a></h4>
										<i>Neorologist</i>
										<figure>
											<a href="#">
												<img src="://placehold.it/150x105" alt="">
											</a>
											<figcaption>
												<ul class="social-doctors">
													<li class="facebook">
														<a href="#"></a>
													</li>
													<li class="twitter">
														<a href="#"></a>
													</li>
												</ul>
											</figcaption>
										</figure>
									</div>
									<div class=" span6 about-doctors">
										<div class="row">
											<p class="span4 offset1">
												Lorem ipsum dolor sit amet, cons adipisi elit dower hen.
											</p>
										</div>
									</div>							
								</div>
							</li><!-- /.span6 -->
							
						</ul><!-- /.row -->
						<div class="row">
							<div class="span4 offset9 helper-button">
								<a href="our_doctors.html" class="button button-blue">View all</a>
							</div>
						</div>
					</div><!-- /.span22 -->
					
				</div><!-- /.row -->
			</div><!-- /.span24 -->

			<div id="appoiment" class="span24 appoiment-section">
				<div class="row">
					<div class="span14 offset1">
						<h4 class="fantastico fan-green">Make an appoiment</h4>

						<div class="row">
							<div class="span5">
								<figure>
									<a href="http://placehold.it/1000x800" class="show-image">
										<img src="://placehold.it/190x225" alt="">
									</a>
								</figure>
								<p>
									Lorem ipsum dolor sit amet elit.
								</p>

								<ul class="special-list">
									<li>ophthalmologist</li>
									<li>surgeon</li>
									<li>neurologist</li>
									<li>physician</li>
								</ul>
							</div>

							<div class="span8 offset1 appoiment-form">
								<form action="#">
									<p>
										<input type="text" name="name" placeholder="Name" data-required="true">
									</p>
									<p>
										<input type="text" name="name" placeholder="E-mail" data-trigger="change" data-required="true" data-type="email">
									</p>
									<p>
										<input type="text" name="name" placeholder="Phone">
									</p>
									<p>
										<input type="text" name="name" placeholder="Date" id="reservation" autocomplete="off" data-trigger="change" data-required="true">
									</p>
									<p>
										<input type="text" name="name" placeholder="Time" id="reservationtime"  autocomplete="off" data-trigger="change" data-required="true">
									</p>
									<p class="styled-select">
										<select name="doctors" data-required="true">
											<option value="0">Choose doctor</option>
											<option value="1">Ophthalmologist</option>
											<option value="2">Surgeon</option>
											<option value="3">Neurologist</option>
											<option value="4">Physician</option>
										</select>
									</p>
									<p>
										<textarea name="message" placeholder="Message" data-trigger="keyup" data-rangelength="[20,200]" data-required="true"></textarea>
									</p>
									<p>
										<button type="submit" class="button button-blue">Submit</button>
									</p>
								</form>
							</div>
						</div>
					</div>

					<div class="span7 offset1">
						<h4 class="fantastico fan-blue">Helth news</h4>

						<ul class="medpark-tabs">
							<li>
								<input type="radio" name="medpark-tabs"  id="medpark-tabs" checked="checked">
								<label for="medpark-tabs"><b>Posts</b></label>
								<ul>
									<li class="row-fluid">
										<figure class="span10">
											<a href="blog_post.html">
												<img src="://placehold.it/100x100" alt="post">
											</a>
										</figure>
										<p class="span14">
											<a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a>
										</p>
									</li>
									<li class="row-fluid">
										<figure class="span10">
											<a href="blog_post.html">
												<img src="://placehold.it/100x100" alt="post">
											</a>
										</figure>
										<p class="span14">
											<a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a>
										</p>
									</li>
									<li class="row-fluid">
										<figure class="span10">
											<a href="blog_post.html">
												<img src="://placehold.it/100x100" alt="post">
											</a>
										</figure>
										<p class="span14">
											<a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a>
										</p>
									</li>

									<li class="row-fluid">
										<figure class="span10">
											<a href="blog_post.html">
												<img src="://placehold.it/100x100" alt="post">
											</a>
										</figure>
										<p class="span14">
											<a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a>
										</p>
									</li>
								</ul>
							</li>
							<li>
								<input type="radio" name="medpark-tabs"  id="medpark-tabs2">
								<label for="medpark-tabs2"><b>Comments</b></label>
								<ul>
									<li class="row-fluid">
										<figure class="span10">
											<a href="blog_post.html">
												<img src="://placehold.it/100x100" alt="post">
											</a>
										</figure>
										<p class="span14">
											<a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a>
										</p>
									</li>
									<li class="row-fluid">
										<figure class="span10">
											<a href="blog_post.html">
												<img src="://placehold.it/100x100" alt="post">
											</a>
										</figure>
										<p class="span14">
											<a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a>
										</p>
									</li>
								</ul>
							</li>
						</ul>
					</div>

					
					
				</div><!-- /.row -->
			</div><!-- /.span24 -->

			<div class="span24 subscribe-box">
				<div class="row">
					<div class="span11 offset1">
						<h2>Sign up for our newsletter</h2>
					</div><!-- /.span11 -->
					<div class="span11 subscribe-form">
						<form action="#">
							<p>
								<input type="text" placeholder="E-mail">
								<button type="submit" class="button button-submit">Submit</button>
							</p>
						</form>
					</div><!-- /.span11 -->
				</div><!-- /.row -->
			</div><!-- /.span24 -->

			<footer class="span24 main-footer">
				<div class="row">
					<div class="span5 offset1">
						<div class="footer-logo">
							<a href="#">
								<img src="src/img/medpark_logo_footer.png" alt="medpark">
							</a>
						</div>
						<nav class="footer-nav">
							<ul>
								<li class="current-menu-item">
									<a href="index.html">Home</a>
								</li>
								<li>
									<a href="our_doctors.html">Our doctors</a>
								</li>
								<li>
									<a href="features.html">Pages</a>
								</li>
								<li>
									<a href="blog.html">Blog</a>
								</li>
								<li>
									<a href="contact.html">Contact</a>
								</li>
							</ul>
						</nav>
					</div><!-- /.span5 -->

					<div class="span8">
						<h4>Contact Us</h4>
						<ul class="footer-contact">
							<li class="phone">
								<b>Phone</b>
								<span>000 222 333 444</span>
							</li>
							<li class="fax">
								<b>Fax</b>
								<span>000 222 663 554</span>
							</li>
							<li class="email">
								<b>E-mail</b>
								<span>medpark@info.com</span>
							</li>
							<li class="address">
								<b>Address</b>
								<span>London GB Europe</span>
							</li>
						</ul>
					</div><!-- /.span8 -->

					<div class="span9">
						<h4>Latest tweet</h4>

						<div id="tweets" class="tweet-box"></div>

						<ul class="social-footer">
							<li class="facebook">
								<a href="http://www.facebook.com/TeslaThemes">facebook</a>
							</li>
							<li class="twitter">
								<a href="https://twitter.com/TeslaThemes">Twitter</a>
							</li>
							<li class="yahoo">
								<a href="#">Yahoo</a>
							</li>
							<li class="linkedin">
								<a href="#">Linkedin</a>
							</li>
							<li class="rss">
								<a href="#">RSS</a>
							</li>
							<li class="pinterest">
								<a href="http://pinterest.com/teslathemes/">Pinterest</a>
							</li>
							<li class="flickr">
								<a href="#">Flickr</a>
							</li>
						</ul>
					</div>
				</div><!-- /.row -->
			</footer><!-- /.span24 -->

			<div class="copyright-box span24">
				<div class="row">
					<div class="span12">
						<p>Copyright 2013. All rights reserved</p>
					</div>
					<div class="span12 right-side">
						<!-- <p>Designed by <a href="http://teslathemes.com">Teslathemes</a></p> -->
					</div>
				</div>
			</div>
			
		</div><!-- /.row -->


		
	</div><!-- /.main-content -->
@stop
<x-front-layout>
	<div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleControls" data-slide-to="1"></li>
			<li data-target="#carouselExampleControls" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
				<div class="first-section" style="background-image:url('assetf/images/slider-01.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-center">
									<div class="big-tagline">
										<h2><strong>SmartEDU </strong> School</h2>
										<p class="lead">To ensure that your child is distinguished</p>
										<a href="{{ route('front.contact') }}" class="hover-btn-new"><span>Contact Us</span></a>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

									</div>
								</div>
							</div><!-- end row -->
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
				<div class="first-section" style="background-image:url('assetf/images/slider-02.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-center">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight">SmartEDU <strong>education school</strong></h2>
										<p class="lead" data-animation="animated fadeInLeft"></p>
										<a href="{{ route('front.contact') }}" class="hover-btn-new"><span>Contact Us</span></a>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

									</div>
								</div>
							</div><!-- end row -->
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
				<div class="first-section" style="background-image:url('assetf/images/slider-03.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-center">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight"></h2>
										<p class="lead" data-animation="animated fadeInLeft"></p>
									</div>
								</div>
							</div><!-- end row -->
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<!-- Left Control -->
			<a class="new-effect carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="fa fa-angle-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>

			<!-- Right Control -->
			<a class="new-effect carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="fa fa-angle-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>

	<div id="overviews" class="section wb">
		<div class="container">
			<div class="section-title row text-center">
				<div class="col-md-8 offset-md-2">
					<h3>Best Student</h3>
					<p class="lead">In this section we show the <b>Best Student</b> in SmartEDU School</p>
				</div>
			</div><!-- end title -->
			
			<div class="row align-items-center">
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
					<div class="message-box">
					<h3>Student Name :</h3><h2 style="color: #eea412;"> {{$grade->student->name}}</h2>
					<h3>Average:</h3><h2 style="color: #eea412;" name="avarage"> {{$grade->avarage}} %</h2>

					</div><!-- end messagebox -->
				</div><!-- end col -->

				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
					<div class="post-media wow fadeIn">
						<img src="{{$grade->student->image_url}}" alt="" class="img-fluid img-rounded">
					</div><!-- end media -->
				</div><!-- end col -->
			</div>
			
		</div><!-- end container -->
	</div><!-- end section -->

	<section class="section lb page-section">
		<div class="container">
			<div class="section-title row text-center">
				<div class="col-md-8 offset-md-2">
					<h3>Our history</h3>
					<p class="lead">Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem!</p>
				</div>
			</div><!-- end title -->
			<div class="timeline">
				<div class="timeline__wrap">
					<div class="timeline__items">
						<div class="timeline__item">
							<div class="timeline__content img-bg-01">
								<h2>2018</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus. Lorem
									ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-02">
								<h2>2015</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus. Lorem
									ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-03">
								<h2>2014</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus. Lorem
									ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-04">
								<h2>2012</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus. Lorem
									ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-01">
								<h2>2010</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus. Lorem
									ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-02">
								<h2>2007</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus. Lorem
									ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-03">
								<h2>2004</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus. Lorem
									ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-04">
								<h2>2002</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus. Lorem
									ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="section cl">
		<div class="container">
			<div class="row text-left stat-wrap">
				<div class="col-md-4 col-sm-4 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-study"></i></span>
					<p class="stat_count">{{$totalStudents}}</p>
					<h3>Students</h3>
				</div><!-- end col -->

				<div class="col-md-4 col-sm-4 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><img src="{{asset('assetf/images/teacher1.png')}}"></span>
					<p class="stat_count">{{$totalTeachers}}</p>
					<h3>Teachers</h3>
				</div><!-- end col -->

				<div class="col-md-4 col-sm-4 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><img src="{{asset('assetf/images/education.png')}}"></span>
					<p class="stat_count">{{$totalClasses}}</p>
					<h3>School Classes</h3>
				</div><!-- end col -->
			</div><!-- end row -->
		</div><!-- end container -->
	</div><!-- end section -->

	<div id="plan" class="section lb">
		<div class="container">
			<div class="row">
				<div id="carouselMultiItemExample" class="carousel slide carousel-dark text-center" data-mdb-ride="carousel">
					<!-- Controls -->
					<div class="d-flex justify-content-center mb-4">
						<button class="carousel-control-prev position-relative"  style="color: black;" type="button" data-mdb-target="#carouselMultiItemExample" data-mdb-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next position-relative" style="color: black;" type="button" data-mdb-target="#carouselMultiItemExample" data-mdb-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Next</span>
						</button>
					</div>
					<!-- Inner -->
					<div class="carousel-inner py-4">
						<!-- Single item -->
						<div class="carousel-item active">
							<div class="container">
								<div class="row">
									<div class="col-lg-4">
										<div class="card">
											<img src="{{asset('assetf/images/img1.jpg')}}" class="card-img-top" alt="..." />

										</div>
									</div>

									<div class="col-lg-4 d-none d-lg-block">
										<div class="card">
											<img src="{{asset('assetf/images/img2.jpg')}}" class="card-img-top" alt="..." />

										</div>
									</div>

									<div class="col-lg-4 d-none d-lg-block">
										<div class="card">
											<img src="{{asset('assetf/images/img3.jpg')}}" class="card-img-top" alt="..." />

										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Single item -->
						<div class="carousel-item">
							<div class="container">
								<div class="row">
									<div class="col-lg-4 col-md-12">
										<div class="card">
											<img src="{{asset('assetf/images/img4.jpg')}}" class="card-img-top" alt="..." />

										</div>
									</div>

									<div class="col-lg-4 d-none d-lg-block">
										<div class="card">
											<img src="{{asset('assetf/images/img5.jpg')}}" class="card-img-top" alt="..." />

										</div>
									</div>

									<div class="col-lg-4 d-none d-lg-block">
										<div class="card">
											<img src="{{asset('assetf/images/img66.jpg')}}" class="card-img-top" alt="..." />

										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Single item -->
						<div class="carousel-item">
							<div class="container">
								<div class="row">
									<div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
										<div class="card">
											<img src="{{asset('assetf/images/img11.jpg')}}" class="card-img-top" alt="..." />

										</div>
									</div>

									<div class="col-lg-4 mb-4 mb-lg-0 d-none d-lg-block">
										<div class="card">
											<img src="{{asset('assetf/images/img3.jpg')}}" class="card-img-top" alt="..." />

										</div>
									</div>

									<div class="col-lg-4 mb-4 mb-lg-0 d-none d-lg-block">
										<div class="card">
											<img src="{{asset('assetf/images/img2.jpg')}}" class="card-img-top" alt="..." />

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Inner -->
				</div>
			</div>

			<hr class="invis">
		</div><!-- end container -->
	</div><!-- end section -->

	<div id="testimonials" class="parallax section db parallax-off" style="background-image:url('assetf/images/parallax_04.jpg');">
		<div class="container">
			<div class="section-title text-center">
				<h3>Testimonials</h3>
				<p>SmartEDU School is considered one of the best schools in the region</p>
			</div><!-- end title -->

			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="testi-carousel owl-carousel owl-theme">
						<div class="testimonial clearfix">
							<div class="testi-meta">
								<img src="{{asset('assetf/images/testi_01.png')}}" alt="" class="img-fluid">
								<h4>Ahmed Ahmed</h4>
								<h4>Minister of Education</h4>
							</div>
							<div class="desc">
								<h3><i class="fa fa-quote-left"></i>Great & Talented Team</h3>
								<p class="lead">SmartEDU School containe highly skilled, experienced & professional team</p>
							</div>
							<!-- end testi-meta -->
						</div>
						<!-- end testimonial -->

						<div class="testimonial clearfix">
							<div class="testi-meta">
								<img src="{{asset('assetf/images/testi_02.png')}}" alt="" class="img-fluid">
								<h4>Waseem Mohammed</h4>
								<h4>Area Manager</h4>
							</div>
							<div class="desc">
								<h3><i class="fa fa-quote-left"></i>Strong Education</h3>
								<p class="lead">SmartEDU School commits to growing students through quality instruction and effective use of resources</p>
							</div>
							<!-- end testi-meta -->
						</div>
						<!-- end testimonial -->

						<div class="testimonial clearfix">
							<div class="testi-meta">
								<img src="{{asset('assetf/images/testi_03.png')}}" alt="" class="img-fluid ">
								<h4>Najwa Fathy</h4>
								<h4>Headmistress</h4>
							</div>
							<div class="desc">
								<h3><i class="fa fa-quote-left"></i>Excellence and creativity</h3>
								<p class="lead">SmartEDU School the best school for ever</p>
							</div>
							<!-- end testi-meta -->
						</div>
					</div><!-- end carousel -->
				</div><!-- end col -->
			</div><!-- end row -->
		</div><!-- end container -->
	</div><!-- end section -->
	
	
</x-front-layout>
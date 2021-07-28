<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>SmartEDU - Education </title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{asset('assetf/images/favicon.ico')}}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{asset('assetf/images/apple-touch-icon.png')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assetf/css/bootstrap.min.css')}}">
	
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{asset('assetf/style.css')}}">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="{{asset('assetf/css/versions.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('assetf/css/responsive.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('assetf/css/custom.css')}}">

	<!--<link rel="stylesheet" href="{{asset('css/mdb.min.css')}}">
	 <link rel="stylesheet" href="{{ asset('gallary/styles-merged.css') }}">
	<link rel="stylesheet" href="{{ asset('gallary/style.css') }}">
    <link rel="stylesheet" href="{{ asset('gallary/style.min.css') }}">-->
    <!-- Modernizer for Portfolio -->
    <script src="{{asset('assetf/js/modernizer.js')}}"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="host_version"> 

	<!-- Modal -->
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header tit-up">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Dashboard Login</h4>
			</div>
			<div class="modal-body customer-box">
			    <a class="active" href="{{view('auth.login')}}"></a>
			</div>
		</div>
	  </div>
	</div>

    <!-- LOADER -->
	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	<!-- END LOADER -->	
	
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.html">
					<img src="{{asset('assetf/images/logo.png')}}" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item @if(request()->routeIs('front.home'))active @endif"><a class="nav-link" href="{{ route('front.home') }}">Home</a></li>
						<li class="nav-item @if(request()->routeIs('front.aboutUs'))active @endif"><a class="nav-link" href="{{ route('front.aboutUs') }}">About Us</a></li>
						<li class="nav-item @if(request()->routeIs('front.blog'))active @endif"><a class="nav-link " href="{{ route('front.blog') }}">Blog </a></li>
						<li class="nav-item @if(request()->routeIs('front.teacher'))active @endif"><a class="nav-link " href="{{ route('front.teacher') }}">Teachers</a></li>
						<li class="nav-item @if(request()->routeIs('front.contact'))active @endif"><a class="nav-link " href="{{ route('front.contact') }}">Contact</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
                        <li><a class="hover-btn-new log orange" href="{{ route('login') }}" data-toggle="modal" data-target="#login"><span>Dashboard Login</span></a></li>
                    </ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
{{$slot}}

    <div class="parallax section dbcolor">
        <div class="container">
            <div class="row logos">
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="{{asset('assetf/images/logo_01.png')}}" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="{{asset('assetf/images/logo_02.png')}}" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="{{asset('assetf/images/logo_03.png')}}" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="{{asset('assetf/images/logo_04.png')}}" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="{{asset('assetf/images/logo_05.png')}}" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="{{asset('assetf/images/logo_06.png')}}" alt="" class="img-repsonsive"></a>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>About US</h3>
                        </div>
                        <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis montes.</p>   
						<div class="footer-right">
							<ul class="footer-links-soi">
								<li><a href="https://www.facebook.com/nema.sammak"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://github.com/nematalalsammak"><i class="fa fa-github"></i></a></li>
								<li><a href="https://twitter.com/Nema_Alsammak"><i class="fa fa-twitter"></i></a></li>
								<li><a href="https://www.linkedin.com/in/nema-al-sammak/"><i class="fa fa-linkedin"></i></a></li>
							</ul><!-- end links -->
						</div>						
                    </div><!-- end clearfix -->
                </div><!-- end col -->

				<div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Information Link</h3>
                        </div>
                        <ul class="footer-links">
                            <li><a href="{{ route('front.home') }}">Home</a></li>
                            <li><a href="{{ route('front.blog') }}">Blog</a></li>
							<li><a href="{{ route('front.teacher') }}">Teachers</a></li>
							<li><a href="{{ route('front.aboutUs') }}">About</a></li>
							<li><a href="{{ route('front.contact') }}">Contact</a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Contact Details</h3>
                        </div>

                        <ul class="footer-links">
                            <li><a href="mailto:#">nema.talal.sammak@gmail.com</a></li>
                            <li>+972-597230922</li>
                            <li>Palestine - Gaza Strip</li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-center">                   
                    <p class="footer-company-name">All Rights Reserved 2021<a href="#">SmartEDU</a> Design By : Nema Al sammak</a></p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
	
    <!-- ALL JS FILES -->
	<script src="{{asset('js/mdb.min.js')}}"></script>
	
    <script src="{{asset('assetf/js/all.js')}}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{asset('assetf/js/custom.js')}}"></script>
	<script src="{{asset('assetf/js/timeline.min.js')}}"></script>
	<!--<script src="{{ asset('gallary/scripts.min.js') }}"></script>
	<script src="{{ asset('gallary/scripts.js') }}"></script>
    <script src="{{ asset('gallary/main.min.js') }}"></script>
    <script src="{{ asset('gallary/custom.js') }}"></script>-->
	<script>
		timeline(document.querySelectorAll('.timeline'), {
			forceVerticalMode: 700,
			mode: 'horizontal',
			verticalStartPosition: 'left',
			visibleItems: 4
		});
	</script>
	
</body>
</html>
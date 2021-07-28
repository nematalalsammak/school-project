<x-front-layout>
<div class="all-title-box">
		<div class="container text-center">
			<h1>Teachers<span class="m_1">All Teacher in SmartEDU School</span></h1>
		</div>
	</div>
	
	<div id="teachers" class="section wb">
        <div class="container">
            <div class="row">
            @foreach($latest as $teacher)
				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="{{ $teacher->image_url }}">
							<div class="social">
								<ul>
									<li><a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox?compose=new" target="_blank" class="fa fa-envelope-square"></a></li>
								</ul>
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">{{$teacher->name}}</h3>
							<span class="post">{{$teacher->schoolClass->name}}</span>
						</div>
					</div>
				</div>
            @endforeach
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
</x-front-layout>
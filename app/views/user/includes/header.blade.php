  <div class="container">
	<div class="row">

		<!-- logo -->
	  
	  <div class="col-xs-3 col-md-2 col-lg-3 logo-box">
		<div class="logo">
		  <a href="{{URL::to('/home')}}" class="logo">
			<img src="<?php echo asset('img/logo_1.png')?>" class="logo-img" alt="">
		  </a>
		</div>
	  </div><!-- .logo-box -->
	    <!-- end logo -->
	  
<div class="col-xs-6 col-md-10 col-lg-9 right-box">
		<div class="right-box-wrapper">
		  <div class="header-icons">
			<div class="search-header hidden-600">
			  <a href="#">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">
				  <path d="M12.001,10l-0.5,0.5l-0.79-0.79c0.806-1.021,1.29-2.308,1.29-3.71c0-3.313-2.687-6-6-6C2.687,0,0,2.687,0,6
				  s2.687,6,6,6c1.402,0,2.688-0.484,3.71-1.29l0.79,0.79l-0.5,0.5l4,4l2-2L12.001,10z M6,10c-2.206,0-4-1.794-4-4s1.794-4,4-4
				  s4,1.794,4,4S8.206,10,6,10z"></path>
				  <image src="img/png-icons/search-icon.png" alt="" width="16" height="16" style="vertical-align: top;">
				</svg>
			  </a>
			</div><!-- .search-header
			
			--><!-- <div class="phone-header hidden-600">
			  <a href="#">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">
				  <path d="M11.001,0H5C3.896,0,3,0.896,3,2c0,0.273,0,11.727,0,12c0,1.104,0.896,2,2,2h6c1.104,0,2-0.896,2-2
				  c0-0.273,0-11.727,0-12C13.001,0.896,12.105,0,11.001,0z M8,15c-0.552,0-1-0.447-1-1s0.448-1,1-1s1,0.447,1,1S8.553,15,8,15z
				  M11.001,12H5V2h6V12z"></path>
				  <image src="img/png-icons/phone-icon.png" alt="" width="16" height="16" style="vertical-align: top;">
				</svg>
			  </a>
			</div> --><!-- .phone-header -->

			<!-- add button -->
			


			@if(Auth::check())
			<a href="{{URL::to('user/logout')}}">
				<button type="button" class="btn btn-xs btn-inverse" style="margin-top:10%;font-size:1.2em;">log out</button>
			</a> 
			@endif
			@if(!Auth::check())
			<!-- <a href="#myModal" data-toggle="modal"> -->
			<a href="{{URL::to('user/login')}}" >
				<button type="button" class="btn btn-xs btn-danger" style="margin-top:10%;font-size:1.2em;">log in</button>
			</a>
			@endif

			

		  </div><!-- .header-icons -->
		  
		  <div class="primary">
			<div class="navbar navbar-default" role="navigation">
			  <button type="button" class="navbar-toggle btn-navbar collapsed" data-toggle="collapse" data-target=".primary .navbar-collapse">
				<span class="text">Menu</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
	
			  <nav class="collapse collapsing navbar-collapse">
				<ul class="nav navbar-nav navbar-center">
				  <li>
					<a href="{{URL::to('home')}}">Home</a>
				  </li>
				  <li>
					<a href="{{URL::to('cd/searchjob')}}">Search job</a>
				  </li>
				  <li>
					<a href="{{URL::to('cd')}}">My account</a>
				  </li>
				  <li>
					<a href="#">Contact us</a>
				  </li>
				  	<!-- <li class="parent">
						<a href="#">Portfolio</a>
						<ul class="sub">
						  <li><a href="portfolio-1.html">Portfolio (1 column)</a></li>
						  <li><a href="portfolio-2.html">Portfolio (2 column)</a></li>
						  <li><a href="portfolio-3.html">Portfolio (3 column)</a></li>
						  <li><a href="portfolio-4.html">Portfolio (4 column)</a></li>
						  <li><a href="portfolio-slider.html">Portfolio (Slider)</a></li>
						  <li><a href="portfolio-single.html">Single Project</a></li>
						</ul>
					</li> -->
				</ul>
			  </nav>
			</div>
		  </div><!-- .primary -->
		</div>
	  </div>
	  
	  <div class="phone-active col-sm-9 col-md-9">
		<a href="#" class="close"><span>close</span>×</a>
		<span class="title">Call Us</span> <strong>+1 (777) 123 45 67</strong>
	  </div>

	  <div class="search-active col-sm-9 col-md-9">
		<a href="#" class="close"><span>close</span>×</a>
		<form name="search-form">
		  <input class="search-string form-control" type="search" placeholder="Search here" name="search-string">
		  <button class="search-submit">
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">
			  <path fill="#231F20" d="M12.001,10l-0.5,0.5l-0.79-0.79c0.806-1.021,1.29-2.308,1.29-3.71c0-3.313-2.687-6-6-6C2.687,0,0,2.687,0,6
			  s2.687,6,6,6c1.402,0,2.688-0.484,3.71-1.29l0.79,0.79l-0.5,0.5l4,4l2-2L12.001,10z M6,10c-2.206,0-4-1.794-4-4s1.794-4,4-4
			  s4,1.794,4,4S8.206,10,6,10z"></path>
			  <image src="img/png-icons/search-icon.png" alt="" width="16" height="16" style="vertical-align: top;">
			</svg>
		  </button>
		</form>
	  </div>


	 
	</div><!--.row -->
  </div>

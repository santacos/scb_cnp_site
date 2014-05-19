<div id="top-box">
  <div class="container">
    <div class="pull-left">
      <div class="btn-group language btn-select">
		<a class="btn dropdown-toggle btn-default" role="button" data-toggle="dropdown" href="#">
		  <span class="hidden-xs">Language</span><span class="visible-xs">Lang</span><!-- 
		  -->: English
		  <span class="caret"></span>
		</a>
		<ul class="dropdown-menu">
		  <li><a href="#"><img src="img/eng-flag.png" alt="">English</a></li>
		  <li><a href="#"><img src="img/fra-flag.png" alt="">France</a></li>
		  <li><a href="#"><img src="img/ger-flag.png" alt="">Germany</a></li>
		</ul>
	  </div>

	  <div class="btn-group currency btn-select">
		<a class="btn dropdown-toggle btn-default" role="button" data-toggle="dropdown" href="#">
		  <span class="hidden-xs">Currency</span><span class="visible-xs">Curr</span><!--
		  -->: USD
		  <span class="caret"></span>
		</a>
		<ul class="dropdown-menu">
		  <li><a href="#">USD</a></li>
		  <li><a href="#">EUR</a></li>
		  <li><a href="#">GBP</a></li>
		</ul>
      </div>
    </div>
    
    <div class="my-account navbar navbar-inverse navbar-right">
	  	@if(Auth::check())
		<nav>
			<ul class="nav nav-top">
				<li>
					<a href="#">สวัสดีจ้า ลอกอินแล้ว</a> 
				</li>
				
			</ul>
		</nav>
		@endif
	  <nav>
		<ul class="nav navbar-nav">
		  <li><a href="#">My account</a></li>
		  <li><a href="#">My Wishlist</a></li>
		  <li><a href="#">Checkout</a></li>
		  <li><a href="#">Log in</a></li>
		</ul>
	  </nav>
    </div><!-- .my-account -->
  </div>
</div><!-- #top-box -->
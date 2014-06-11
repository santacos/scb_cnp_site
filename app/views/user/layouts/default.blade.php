<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8" > <![endif]-->
<!--[if IE 9]>			<html class="ie ie9" > <![endif]-->
<!--[if gt IE 9]><!-->	
<html> <!--<![endif]-->
<head>
	@include('user.includes.head')
	<meta charset='utf-8'>
	@yield('meta')
	<title>
		@yield('title')
	</title>
	@yield('libs')
</head>
<body class= @yield('body-class')>

	<div class="page-box">
	<div class="page-box-content">
		

		

		

		<header class= @yield('header-class')>
			@include('user.includes.header')
		</header>
			@include('user.includes.modalLogin')
	
			@yield('content')
		
	</div>
	</div>		
		
		

		@include('user.includes.footer')


	@include('user.includes.libs')
</body>
</html>
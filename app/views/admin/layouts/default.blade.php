<!DOCTYPE html>
<html>
	<head>
	@include('admin.partials.assets')
	<title>
		@yield('title')
	</title>

	@yield('libs')

	</head>
	<body class="skin-black">
		<!-- header logo: style can be found in header.less -->
	@include('admin.partials.header')
		<div class="wrapper row-offcanvas row-offcanvas-left">
			<!-- Left side column. contains the logo and sidebar -->
			<aside class="left-side sidebar-offcanvas">
				<!-- sidebar: style can be found in sidebar.less -->
				@yield('left_sidebar')
				
				<!-- /.sidebar -->
			</aside>

			<!-- Right side column. Contains the navbar and content of the page -->
			<aside class="right-side">
				<!-- Content Header (Page header) -->
				<!--
				<section class="content-header">
                    <h1>
                        Dashboard
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>
            -->

				<!-- Main content -->
				<section class="content" style="margin-top:50px;">
				

					

					@yield('content')

					

				</section><!-- /.content -->
			</aside><!-- /.right-side -->
		</div><!-- ./wrapper -->
		
		<!-- add new calendar event modal -->
		
		<!-- Morris.js charts -->
		{{ HTML::script('//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js') }}
		{{ HTML::script('assets/js/plugins/morris/morris.min.js') }}
		
		<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
		{{ HTML::script('assets/js/AdminLTE/dashboard.js') }}
		@yield('script')
		@include('admin.partials.footer')
	</body>
</html>
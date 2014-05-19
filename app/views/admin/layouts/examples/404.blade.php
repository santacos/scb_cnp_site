<!DOCTYPE html>
<html>
	@include('admin.partials.assets')
	<body class="skin-black">
		<!-- header logo: style can be found in header.less -->
		@include('admin.partials.header')
		<div class="wrapper row-offcanvas row-offcanvas-left">
			<!-- Left side column. contains the logo and sidebar -->
			<aside class="left-side sidebar-offcanvas">
				<!-- sidebar: style can be found in sidebar.less -->
				@include('admin.partials.left_sidebar')
				<!-- /.sidebar -->
			</aside>

			<!-- Right side column. Contains the navbar and content of the page -->
			<aside class="right-side">
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<h1> 404 Error page <small>Control panel</small></h1>
					<ol class="breadcrumb">
						<li>
							<a href="#"><i class="fa fa-dashboard"></i> Home</a>
						</li>
						<li class="active">
							404 Error page
						</li>
					</ol>
				</section>

				<!-- Main content -->
				<section class="content">

					<div class="error-page">
						<h2 class="headline text-info"> 404</h2>
						<div class="error-content">
							<h3><i class="fa fa-warning text-yellow"></i> Oops! Page not found.</h3>
							<p>
								We could not find the page you were looking for.
								Meanwhile, you may <a href='../../index.html'>return to dashboard</a> or try using the search form.
							</p>
							<form class='search-form'>
								<div class='input-group'>
									<input type="text" name="search" class='form-control' placeholder="Search"/>
									<div class="input-group-btn">
										<button type="submit" name="submit" class="btn btn-primary">
											<i class="fa fa-search"></i>
										</button>
									</div>
								</div><!-- /.input-group -->
							</form>
						</div><!-- /.error-content -->
					</div><!-- /.error-page -->

				</section><!-- /.content -->
			</aside><!-- /.right-side -->
		</div><!-- ./wrapper -->

		@include('admin.partials.footer')

	</body>
</html>
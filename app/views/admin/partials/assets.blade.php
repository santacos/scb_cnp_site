
	<meta charset="UTF-8">
	<link href="<?php echo asset('img/favicon_1.ico')?>" rel="shortcut icon">
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	    <!--for angular-->
    <script src="<?php echo asset('vendor/angular.min.js')?>"></script> 
    <script src="<?php echo asset('vendor/ui-bootstrap-tpls-0.11.0.min.js')?>"></script>
   
    <script src="<?php echo asset('vendor/ui-utils.js')?>"></script> 
    <script src="<?php echo asset('vendor/ui-utils.min.js')?>"></script>

    <script src="<?php echo asset('js/jquery.js')?>"></script> 
    
	<!-- jQuery 2.0.2 -->
	{{ HTML::script('http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js') }}
	<!-- jQuery UI 1.10.3 -->
	{{ HTML::script('assets/js/jquery-ui-1.10.3.min.js') }}
	<!-- Bootstrap -->
	{{ HTML::script('assets/js/bootstrap.min.js') }}
	
	<!-- AdminLTE App -->
	{{ HTML::script('assets/js/AdminLTE/app.js') }}
	
	<!-- bootstrap 3.0.2 -->
	{{ HTML::style('assets/css/bootstrap.min.css') }}
	<!-- font Awesome -->
	{{ HTML::style('assets/css/font-awesome.min.css') }}
	<!-- Ionicons -->
	{{ HTML::style('assets/css/ionicons.min.css') }}
	
	<!-- Ion Slider -->
	{{ HTML::style('assets/css/ionslider/ion.rangeSlider.css') }}
    <!-- ion slider Nice -->
    {{ HTML::style('assets/css/ionslider/ion.rangeSlider.skinNice.css') }}
    <!-- bootstrap slider -->
    {{ HTML::style('assets/css/bootstrap-slider/slider.css') }}

	
	<!-- Morris chart -->
	{{ HTML::style('assets/css/morris/morris.css') }}
	<!-- jvectormap -->
	{{ HTML::style('assets/css/jvectormap/jquery-jvectormap-1.2.2.css') }}
	<!-- fullCalendar -->
	{{ HTML::style('assets/css/fullcalendar/fullcalendar.css') }}
	{{ HTML::style('assets/css/fullcalendar/fullcalendar.print.css', array('media' => 'print')) }}
	<!-- Daterange picker -->
	{{ HTML::style('assets/css/daterangepicker/daterangepicker-bs3.css') }}
	<!-- bootstrap wysihtml5 - text editor -->
	{{ HTML::style('assets/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}
	<!-- Theme style -->
	{{ HTML::style('assets/css/AdminLTE.css') }}
	
	<!-- iCheck for checkboxes and radio inputs -->
	{{ HTML::style('assets/css/iCheck/all.css') }}
	<!-- Bootstrap Color Picker -->
	{{ HTML::style('assets/css/colorpicker/bootstrap-colorpicker.min.css') }}
	<!-- Bootstrap Color Picker -->
	{{ HTML::style('assets/css/timepicker/bootstrap-timepicker.min.css') }}
	<!-- DATA TABLES -->
	{{ HTML::style('assets/css/datatables/dataTables.bootstrap.css') }}
	
	 <style type="text/css">
            /* FROM HTTP://WWW.GETBOOTSTRAP.COM
             * Glyphicons
             *
             * Special styles for displaying the icons and their classes in the docs.
             */

            .bs-glyphicons {
                padding-left: 0;
                padding-bottom: 1px;
                margin-bottom: 20px;
                list-style: none;
                overflow: hidden;
            }
            .bs-glyphicons li {
                float: left;
                width: 25%;
                height: 115px;
                padding: 10px;
                margin: 0 -1px -1px 0;
                font-size: 12px;
                line-height: 1.4;
                text-align: center;
                border: 1px solid #ddd;
            }
            .bs-glyphicons .glyphicon {
                margin-top: 5px;
                margin-bottom: 10px;
                font-size: 24px;
            }
            .bs-glyphicons .glyphicon-class {
                display: block;
                text-align: center;
                word-wrap: break-word; /* Help out IE10+ with class names */
            }
            .bs-glyphicons li:hover {
                background-color: rgba(86,61,124,.1);
            }

            @media (min-width: 768px) {
                .bs-glyphicons li {
                    width: 12.5%;
                }
            }
        </style>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->

<!-- Sparkline -->
{{ HTML::script('assets/js/plugins/sparkline/jquery.sparkline.min.js') }}
<!-- jvectormap -->
{{ HTML::script('assets/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}
{{ HTML::script('assets/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}
<!-- fullCalendar -->
{{ HTML::script('assets/js/plugins/fullcalendar/fullcalendar.min.js') }}
<!-- jQuery Knob Chart -->
{{ HTML::script('assets/js/plugins/jqueryKnob/jquery.knob.js') }}
<!-- daterangepicker -->
{{ HTML::script('assets/js/plugins/daterangepicker/daterangepicker.js') }}
<!-- Bootstrap WYSIHTML5 -->
{{ HTML::script('assets/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}
<!-- iCheck -->
{{ HTML::script('assets/js/plugins/iCheck/icheck.min.js') }}

<!-- Ion Slider -->
{{ HTML::script('assets/js/plugins/ionslider/ion.rangeSlider.min.js') }}

<!-- Bootstrap slider -->
{{ HTML::script('assets/js/plugins/bootstrap-slider/bootstrap-slider.js') }}

<!-- Page MailBox script -->
<script type="text/javascript">
	$(function() {"use strict";

		//iCheck for checkbox and radio inputs
		$('input[type="checkbox"]').iCheck({
			checkboxClass : 'icheckbox_minimal-blue',
			radioClass : 'iradio_minimal-blue'
		});

		//When unchecking the checkbox
		$("#check-all").on('ifUnchecked', function(event) {
			//Uncheck all checkboxes
			$("input[type='checkbox']", ".table-mailbox").iCheck("uncheck");
		});
		//When checking the checkbox
		$("#check-all").on('ifChecked', function(event) {
			//Check all checkboxes
			$("input[type='checkbox']", ".table-mailbox").iCheck("check");
		});
		//Handle starring for glyphicon and font awesome
		$(".fa-star, .fa-star-o, .glyphicon-star, .glyphicon-star-empty").click(function(e) {
			e.preventDefault();
			//detect type
			var glyph = $(this).hasClass("glyphicon");
			var fa = $(this).hasClass("fa");

			//Switch states
			if (glyph) {
				$(this).toggleClass("glyphicon-star");
				$(this).toggleClass("glyphicon-star-empty");
			}

			if (fa) {
				$(this).toggleClass("fa-star");
				$(this).toggleClass("fa-star-o");
			}
		});

		//Initialize WYSIHTML5 - text editor
		$("#email_message").wysihtml5();
	}); 
</script>
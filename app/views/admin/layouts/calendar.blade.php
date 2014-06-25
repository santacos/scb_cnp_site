<!DOCTYPE html>
<html>
	@include('admin.partials.assets')
	<body class="skin-black">

				<!-- Main content -->
				<section class="content">

					<div class="row">
					<!--div class="col-md-3">
							<!-- <div class="box box-primary">
								<div class="box-header">
									<h4 class="box-title">Draggable Events</h4>
								</div>
								<div class="box-body">
									<!-- the events 
									<div id='external-events'>
										<div class='external-event bg-green'>
											Lunch
										</div>
										<div class='external-event bg-red'>
											Go home
										</div>
										<div class='external-event bg-aqua'>
											Do homework
										</div>
										<div class='external-event bg-yellow'>
											Work on UI design
										</div>
										<div class='external-event bg-navy'>
											Sleep tight
										</div>
										<p>
											<input type='checkbox' id='drop-remove' />
											<label for='drop-remove'>remove after drop</label>
										</p>
									</div>
								</div><!-- /.box-body 
							</div><!-- /. box
							<div class="box box-primary">
								<div class="box-header">
									<h3 class="box-title">Create Event</h3>
								</div>
								<div class="box-body">
									<div class="btn-group" style="width: 100%; margin-bottom: 10px;">
										<button type="button" id="color-chooser-btn" class="btn btn-danger btn-block btn-sm dropdown-toggle" data-toggle="dropdown">
											Color <span class="caret"></span>
										</button>
										<ul class="dropdown-menu" id="color-chooser">
											<li>
												<a class="text-green" href="#"><i class="fa fa-square"></i> Green</a>
											</li>
											<li>
												<a class="text-blue" href="#"><i class="fa fa-square"></i> Blue</a>
											</li>
											<li>
												<a class="text-navy" href="#"><i class="fa fa-square"></i> Navy</a>
											</li>
											<li>
												<a class="text-yellow" href="#"><i class="fa fa-square"></i> Yellow</a>
											</li>
											<li>
												<a class="text-orange" href="#"><i class="fa fa-square"></i> Orange</a>
											</li>
											<li>
												<a class="text-aqua" href="#"><i class="fa fa-square"></i> Aqua</a>
											</li>
											<li>
												<a class="text-red" href="#"><i class="fa fa-square"></i> Red</a>
											</li>
											<li>
												<a class="text-fuchsia" href="#"><i class="fa fa-square"></i> Fuchsia</a>
											</li>
											<li>
												<a class="text-purple" href="#"><i class="fa fa-square"></i> Purple</a>
											</li>
										</ul>
									</div><!-- /btn-group
									<div class="input-group">
										<input id="new-event" type="text" class="form-control" placeholder="Event Title">
										<div class="input-group-btn">
											<button id="add-new-event" type="button" class="btn btn-default btn-flat">
												Add
											</button>
										</div><!-- /btn-group
									</div><!-- /input-group
								</div>
							</div>
						</div><!-- /.col -->
							<div class="box box-primary">
								<div class="box-body no-padding">
									<!-- THE CALENDAR -->
									<div id="calendar"></div>
								</div><!-- /.box-body -->
							</div><!-- /. box -->
					</div><!-- /.row -->

				</section><!-- /.content -->

		@include('admin.partials.footer')
		<!-- Page Calendar script -->
		<script type="text/javascript">
			$(function() {

				/* initialize the external events
				 -----------------------------------------------------------------*/
				function ini_events(ele) {
					ele.each(function() {

						// create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
						// it doesn't need to have a start or end
						var eventObject = {
							title : $.trim($(this).text()) // use the element's text as the event title
						};

						// store the Event Object in the DOM element so we can get to it later
						$(this).data('eventObject', eventObject);

						// make the event draggable using jQuery UI
						$(this).draggable({
							zIndex : 1070,
							revert : true, // will cause the event to go back to its
							revertDuration : 0 //  original position after the drag
						});

					});
				}

				ini_events($('#external-events div.external-event'));

				/* initialize the calendar
				-----------------------------------------------------------------*/
				//Date for the calendar events (dummy data)
				var date = new Date();
				var d = date.getDate(), m = date.getMonth(), y = date.getFullYear();
				$('#calendar').fullCalendar({
					header : {
						left : 'prev,next today',
						center : 'title',
						right : 'month,agendaWeek,agendaDay'
					},
					buttonText : {//This is to add icons to the visible buttons
						prev : "<span class='fa fa-caret-left'></span>",
						next : "<span class='fa fa-caret-right'></span>",
						today : 'today',
						month : 'month',
						week : 'week',
						day : 'day'
					},
					//Random default events
					events : [/*{
						title : 'Lunch',
						start : new Date(y, m, d, 12, 0),
						end : new Date(y, m, d, 14, 0),
						allDay : false,
						url : 'http://google.com/',
						backgroundColor : "#00c0ef", //Info (aqua)
						borderColor : "#00c0ef" //Info (aqua)
					}*/{}
					@foreach($events as $event)
						,{
							title : '{{ "Interview : " . $event->application->candidate->user->first . " " . $event->application->candidate->user->last }}',
							start : '{{ Carbon::createFromFormat("Y-m-d H:i:s", $event->datetime) }}',
							end : '{{ Carbon::createFromFormat("Y-m-d H:i:s", $event->datetime)->addMinutes(50) }}',
							allDay : false,
							url : "{{'recruiter-interview-feedback/interview-detail/' . $event->application->application_id }}",
							backgroundColor : "#0099FF",
							borderColor : "#0066FF",
							textColor : 'white',
							className : 'calendar',
							expanded : false,
							visitNum : '{{ $event->visit_number }}',
							candidate : '{{ $event->application->candidate->user->first . " " . $event->application->candidate->user->last }}',
							location : '{{ $event->location }}',
							tel : '{{ $event->application->candidate->user->contact_number }}',
							jobTitle : '{{ $event->application->requisition->job_title }}',
						}
					@endforeach
					],
					editable : false,
					droppable : false, // this allows things to be dropped onto the calendar !!!
					/*drop : function(date, allDay) {// this function is called when something is dropped

						// retrieve the dropped element's stored Event Object
						var originalEventObject = $(this).data('eventObject');

						// we need to copy it, so that multiple events don't have a reference to the same object
						var copiedEventObject = $.extend({}, originalEventObject);

						// assign it the date that was reported
						copiedEventObject.start = date;
						copiedEventObject.allDay = allDay;
						copiedEventObject.backgroundColor = $(this).css("background-color");
						copiedEventObject.borderColor = $(this).css("border-color");

						// render the event on the calendar
						// the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
						$('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

						// is the "remove after drop" checkbox checked?
						if ($('#drop-remove').is(':checked')) {
							// if so, remove the element from the "Draggable Events" list
							$(this).remove();
						}

					}*/
					minTime : "07:00:00",
					maxTime : "19:00:00",
					hiddenDays : [0,6],
					eventMouseover : function(event, jsEvent, view){
						if(event.expanded == false){
							event.expanded = true;
							$('#calendar').fullCalendar( 'updateEvent', event );
						}
						this.firstChild.firstChild.innerHTML = '<center>( '+this.firstChild.firstChild.innerHTML+' )</center>'
						this.firstChild.children[1].innerHTML = "<span>Interview #"+event.visitNum+"</span><br><span>Job Title : "+event.jobTitle+"</span><br><span>Name : "+event.candidate+"</span><br><span>Location : "+event.location+"</span><br><span>Tel : "+event.tel+"</span>";
						$(this).animate({	left:'250px',
											width:'+=100px',
											left:'-=50px',
											height:'+=100px',
											top:'-=50px',
											borderColor:'black'
										},400);
						$(this).animate({
											backgroundColor:'blue'
										},600);
						var xxx = $(this.firstChild.children[1]);
						xxx.animate({	fontSize:"15px"
										},400);
						xxx.animate({	marginLeft:'15px'
										},450);
						var yyy = $(this.firstChild.firstChild);
						yyy.animate({	marginLeft:'-40px'
										},0);
						yyy.animate({	fontSize:"18px"
										},300);
						yyy.animate({	marginLeft:'0px'
										},350);

					},
					eventMouseout : function(event, jsEvent, view){
						if(event.expanded == true){
							event.expanded = false;
							$('#calendar').fullCalendar( 'updateEvent', event );
						}
					},
					contentHeight : 1000,
					allDaySlot : false,
				}).fullCalendar( 'changeView', 'agendaWeek' );

				/*/* ADDING EVENTS 
				var currColor = "#f56954";
				//Red by default
				//Color chooser button
				var colorChooser = $("#color-chooser-btn");
				$("#color-chooser > li > a").click(function(e) {
					e.preventDefault();
					//Save color
					currColor = $(this).css("color");
					//Add color effect to button
					colorChooser.css({
						"background-color" : currColor,
						"border-color" : currColor
					}).html($(this).text() + ' <span class="caret"></span>');
				});
				$("#add-new-event").click(function(e) {
					e.preventDefault();
					//Get value and make sure it is not null
					var val = $("#new-event").val();
					if (val.length == 0) {
						return;
					}

					//Create event
					var event = $("<div />");
					event.css({
						"background-color" : currColor,
						"border-color" : currColor,
						"color" : "#fff"
					}).addClass("external-event");
					event.html(val);
					$('#external-events').prepend(event);

					//Add draggable funtionality
					ini_events(event);

					//Remove event from text input
					$("#new-event").val("");
				});*/
			});
		</script>

	</body>
</html>
<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />

<link href='<?php echo base_url('assets/fullcalendar/fullcalendar.min.css'); ?> rel='stylesheet' />
<link href='<?php echo base_url('assets/fullcalendar/fullcalendar.print.min.css'); ?> ' rel='stylesheet' media='print' />

<script src='<?php echo base_url('assets/fullcalendar/lib/moment.min.js'); ?> '></script>
<script src='<?php echo base_url('assets/fullcalendar/lib/jquery.min.js'); ?> '></script>
<script src='<?php echo base_url('assets/fullcalendar/fullcalendar.min.js'); ?> '></script>



<script>

	$(document).ready(function() {
		
		$('#calendar').fullCalendar({
			defaultDate: '2016-12-12',
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			events: [
				{
					title: 'All Day Event',
					start: '2016-12-01'
				},
				{
					title: 'Long Event',
					start: '2016-12-07',
					end: '2016-12-10'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2016-12-09T16:00:00'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2016-12-16T16:00:00'
				},
				{
					title: 'Conference',
					start: '2016-12-11',
					end: '2016-12-13'
				},
				{
					title: 'Meeting',
					start: '2016-12-12T10:30:00',
					end: '2016-12-12T12:30:00'
				},
				{
					title: 'Lunch',
					start: '2016-12-12T12:00:00'
				},
				{
					title: 'Meeting',
					start: '2016-12-12T14:30:00'
				},
				{
					title: 'Happy Hour',
					start: '2016-12-12T17:30:00'
				},
				{
					title: 'Dinner',
					start: '2016-12-12T20:00:00'
				},
				{
					title: 'Birthday Party',
					start: '2016-12-13T07:00:00'
				},
				{
					title: 'Click for Google',
					url: 'http://google.com/',
					start: '2016-12-28'
				}
			]
		});
		
	});

</script>

<style>

	body {
		margin: 40px 10px;
		padding: 0;
		font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		font-size: 14px;
	}

	#calendar {
		max-width: 900px;
		margin: 0 auto;
	}

</style>

</head>
<body>

	<div id='calendar' style="width: 1000px;"></div>

</body>

</body>
</html>
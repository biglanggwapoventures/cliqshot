<h2> My Scheduled Photography Sessions </h2>



<div class="container">
            <div class="row clearfix">
                <div class="col-md-12 column">
                        <div id='calendar'></div>
                </div>
            </div>
        </div>













<form action="" method="POST">

	<div class="panel-body">
     <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
	

			<thead>

			<tr>
				
				<td>User
				<td>Package Name
				<td>Date Ordered
				<td>Date of Appointment
				<td>Time of Appointment
				<td>
				
				<tbody>
						
					<?php foreach($pending_order_album as $row) : ?>

					<tr>
						
						<td><?php echo $row->client_fullname; ?>
						<td><?php echo $row->package_name; ?>
						<td><?php echo $row->date_ordered; ?>
						<td><?php echo $row->event_date; ?>
						<td><?php echo $row->time_ordered; ?>
  
	 					<td>	 						
	 						<a href= "approve_assignment?order_id=<?php echo $row->order_id; ?>" class = 'btn btn-success'>Finish</a>
 



					<?php endforeach; ?> 

				</tbody>


			</thead>

	</table>

</form>



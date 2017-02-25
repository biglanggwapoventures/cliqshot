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
				<td>Date of Appointment
				<td>Time of Appointment
				<td>Photo Session Status
				<td>Option
				
				<tbody>
						
					<?php foreach($pending_order_album as $row) : ?>

					<tr>
						
						<td><?php echo $row->client_fullname; ?>
						<td><?php echo $row->package_name; ?>
						<td><?php echo $row->event_date; ?>
						<td><?php echo $row->time_ordered; ?>
						<td><?php echo $row->photo_session_status; ?>
  
	 					<td>	 						
	 						  <?php  if( $row->photo_session_status == 'not assigned') { ?>

                               <a href= "start_photo_session/<?php echo $row->order_id; ?>" class= 'btn btn-primary btn-sm' > Start</a>

                                                <?php } ?>

                              <?php  if( $row->photo_session_status == 'ongoing') { ?>

                               <a href= "end_photo_session/<?php echo $row->order_id; ?>" class= 'btn btn-success btn-sm' > Finish</a>

                                                <?php } ?>
 



					<?php endforeach; ?> 

				</tbody>


			</thead>

	</table>

</form>



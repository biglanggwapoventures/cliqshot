<h2>Pending Orders </h2>
<hr>
 
<form action="" method="POST">

	<div class="panel-body">
     <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
	

			<thead>

			<tr>
				
				<td>Package Name
				<td>Customer Name
				<td>Date Ordered
				<td>Date of Reservation
				<td>Time of Reservation
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
							<a href= "upload_order_album?order_id=<?php echo $row->order_id; ?>" class = 'btn btn-primary'> Upload </a>
	 						<a href= "approve_assignment" class = 'btn btn-info'> View Order Details</a>
	 



					<?php endforeach; ?> 

				</tbody>


			</thead>

	</table>

</form>



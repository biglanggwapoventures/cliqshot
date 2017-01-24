<h2>My Assigned Orders</h2>


<form action="" method="POST">

	<div class="panel-body">
     <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
	

			<thead>

			<tr>
				<td>Order #
				<td>User Id
				<td>Date Ordered
				<td>Date of Event
				<td>
				
				<tbody>
						
					<?php foreach($upcoming_orders as $row) : ?>

					<tr>
						<td><?php echo $row->order_id; ?>
						<td><?php echo $row->user_id; ?>
						<td><?php echo $row->date_ordered; ?>
						<td><?php echo $row->event_date; ?>
  
	 					<td>	 						
	 						<a href= "approve_assignment?order_id=<?php echo $row->order_id; ?>" class = 'btn btn-info'> View Order Details</a>
 



					<?php endforeach; ?> 

				</tbody>


			</thead>

	</table>

</form>



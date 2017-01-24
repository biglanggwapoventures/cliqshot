<h2>Orders Requests</h2>
 
<form action="" method="POST">

	<div class="panel-body">
     <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
	

			<thead>

			<tr>
				<td>Order #
				<td>Customer Id
				<td>Date Ordered
				<td>
				<td>

				<tbody>
						
					<?php foreach($orders_request as $row) : ?>

					<tr>
						<td><?php echo $row->order_id; ?>
						<td><?php echo $row->user_id; ?>
						<td><?php echo $row->order_id; ?>

						<td>
							<a href= "approve_assignment/<?php echo $row->order_id; ?>" class = 'btn btn-warning'> Approve </a>
	 						<a href= "approve_assignment" class = 'btn btn-danger'> Cancel </a>
	 
							<td>
	 						<a href= "approve_assignment" class = 'btn btn-info'> View Order Details</a>



					<?php endforeach; ?> 

				</tbody>


			</thead>

	</table>

</form>



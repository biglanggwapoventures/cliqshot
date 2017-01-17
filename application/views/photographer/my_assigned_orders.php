<h2>Upload Photo Album</h2>


<form action="" method="POST">

	<table class= 'table table-striped'>

			<thead>

			<tr>
				<td>Order #
				<td>User Id
				<td>Date Ordered
				<td>Order Status

				<tbody>
						
					<?php foreach($my_assigned_orders as $row) : ?>

					<tr>
						<td><?php echo $row->order_id; ?>
						<td><?php echo $row->user_id; ?>
						<td><?php echo $row->order_id; ?>

						<td>	
								<?php if($row->order_status == 'approve') { ?>

									<label class = 'label label-warning'> Approve </label>

								<?php } ?>
					
								<?php if($row->order_status == 'event_ended') { ?>

									<label class = 'label label-success'> Event Ended </label>

								<?php } ?>




					<?php endforeach; ?> 

				</tbody>


			</thead>

	</table>

</form>



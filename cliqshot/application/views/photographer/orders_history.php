<h2>Orders History</h2>


<form action="" method="POST">

	<div class="panel-body">
     <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
	

			<thead>

			<tr>
				<td>Order #
				<td>Customer Id
				<td>Date Ordered
				<td>Order Status

				<tbody>
						
					<?php foreach($uploaded_album_order as $row) : ?>

					<tr>
						<td><?php echo $row->order_id; ?>
						<td><?php echo $row->user_id; ?>
						<td><?php echo $row->order_id; ?>

						<td>	
						 	<a href= "approve_assignment" class = 'btn btn-primary'> View Order Details</a>
						 	<a href= "view_album_gallery" class = 'btn btn-primary'> View Album Gallery</a>




					<?php endforeach; ?> 

				</tbody>


			</thead>

	</table>

</form>


``
<h2>Orders History</h2>


<form action="" method="POST">

	<div class="panel-body">
     <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
	

			<thead>

			<tr>
				
				<td>Customer Name
				<td>Package Name
				<td>Date Ordered
				<td>Order Status

				<tbody>
						
					<?php foreach($uploaded_album_order as $row) : ?>

					<tr>
						
						<td><?php echo $row->client_fullname; ?>
						<td><?php echo $row->package_name; ?>
						<td><?php echo $row->date_ordered; ?>

						<td>	
						 	<a href= "approve_assignment" class = 'btn btn-primary'> View Order Details</a>
						 	<a href= "view_album_gallery/<?php echo $row->order_id; ?>" class = 'btn btn-success'> View Album Gallery</a>
						 	<a href= "view_album_gallery/<?php echo $row->order_id; ?>" class = 'btn btn-danger'> Delete Album</a>




					<?php endforeach; ?> 

				</tbody>


			</thead>

	</table>

</form>


``
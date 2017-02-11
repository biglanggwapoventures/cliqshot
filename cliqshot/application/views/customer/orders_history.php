<h2>Photo Gallery</h2>


<form action="" method="POST">

	<div class="panel-body">
     <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
	

			<thead>

			<tr>
				<td>Album Title
				<td>Package Name
				
				<td>Date Ordered
				<td>Order Status

				<tbody>
						
					<?php foreach($uploaded_album_order as $row) : ?>

					<tr>

						<td>Static Name
						<td><?php echo $row->package_name; ?>

						<td><?php echo $row->date_ordered; ?>

						<td>	
						 	<a href= "approve_assignment" class = 'btn btn-primary'> View Order Details</a>
						 	<a href= "view_album_gallery/<?php echo $row->order_id; ?>" class = 'btn btn-primary'> View Album Gallery</a>




					<?php endforeach; ?> 

				</tbody>


			</thead>

	</table>
	</div>

</form>



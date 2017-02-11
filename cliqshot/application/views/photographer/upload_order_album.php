<style type="text/css">
		
		textarea{
			resize: none;
		}

</style>

<h2>Upload Photo Album</h2>

<h3>Order Info</h3>

<?php //* print_r($order_info); ?>

<table class="table">

	<tr><td>Package Name: <td><?php	echo $order_info['package_name']; ?> <td>
	<tr><td>Package Description: <td><?php	echo $order_info['package_desc']; ?> <td>
	<tr><td>Package Price: <td>P <?php	echo number_format($order_info['package_price'], 2); ?> <td>
	<tr><td>Date  Ordered: <td>	 <?php	echo date("M, d Y", strtotime($order_info['date_ordered'])); ?> <td>
	<tr><td>Event  Date:   <td>	 <?php	    echo date("M, d Y", strtotime($order_info['date_ordered'])); ?> <td>
 
</table>


<form action="uploadPhotos_album" method="POST"  enctype="multipart/form-data">

	<table class= 'table table-striped'>

		<tr><td>Album Title: <td><input type="text" name="album_title" class="form-control" >

		<tr><td>Album Description: <td> <textarea name="album_desc" class="form-control" >
				
										</textarea>

		<input type="hidden" name="order_id" value = "<?php echo $order_id; ?>" >

		<tr><td>Album Thumbnail: <td><input type = 'file' name="album_thumbnail">

		<tr><td>Upload Photos: <td><input type="file" name="photos_uploaded[]" multiple>



	</table>

		<br><input type = 'submit' value = "Upload Photos" class= 'btn btn-info' />

</form>



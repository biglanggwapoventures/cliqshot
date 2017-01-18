
		<form action = 'index.php/CustomerController/insert_orders' method = 'POST'>

			<p><h4>Package Name: <?php echo $package_info['package_name']; ?> </h4></p>
	 							 
	 							 <div class='modal-body' >

	 							 	<table class='table table-striped'>
	                                  
	                                  <tr><td>Price:  		 
	                                  			<td> P <?php echo number_format($package_info['package_price'] , 2); ?>
	                                  <tr><td>Description:  
	                                  			<td> <?php echo $package_info['package_desc'] ?>

	                                </table>

	 								<input type='hidden' name='package_id' id = 'package_id' 
	 											value = ' <?php echo $package_info['package_id']; ?>' required /> 

	 								Date of Event: <input type = 'date' name = 'date_event' required />
	 								Time Ordered: <input type = 'time' name = 'time_ordered' required />

                              <div class='modal-footer'>
                                <button type='submit' class='btn btn-danger' >Order Now</button>
                                <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>

                               
  
                              </div>



	 	</form>
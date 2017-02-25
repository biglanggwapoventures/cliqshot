
		<form action = '<?php echo site_url(); ?>/CustomerController/appointment_schedule' method = 'POST'>


 <div class='modal-body'>



			

			 <center>

			 <img class="img-thumbnail" src="<?php echo base_url('packages_imgs/'. $package_info['package_img']);?>" alt="">
			 <br>
			 <br>
			 

                        <h3 class="media-heading"><i class="fa fa-fw fa-camera"></i>  <?php echo $package_info['package_name']; ?></h3>
                    </center>


	 							 
	 							

	 							  <hr>
                    <center>

                    <p class="text-left"><strong>Description: </strong>
                   <?php echo $package_info['package_desc'] ?>
</p>
                    <p class="text-left"><strong>Amount: </strong>
                        P <?php echo number_format($package_info['package_price'] , 2); ?></p>

                    <br>
                    </center>

                    <input type='hidden' name='package_id' id = 'package_id' 
	 											value = ' <?php echo $package_info['package_id']; ?>' required /> 




                              <div class='modal-footer'>
                                <button type='submit' class='btn btn-primary' >Avail this Photo Service</button>
                                <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>

                               
  
                              </div>



	 	</form>
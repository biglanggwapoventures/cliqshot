<br>
<div class="col-lg-12">

 <h2 class="page-header">
                          <i class="fa fa-calendar"></i>   Appointment System
                        </h2>


<ol class="breadcrumb">
                          <li>
                              <i class="fa fa-home"></i>  <a href="<?php echo site_url('CustomerController/index');?>"> Home</a>
                          </li>
                            <li>
                                <i class="fa fa-calendar"></i> Set Date and Time Schedule
                            </li>
                            <li>
                                <i class="fa fa-money"></i> Payment Information
                            </li>
                             <li class="active">
                                <i class="fa fa-money"></i> Money Remittance
                            </li>
                        </ol>


<div class="panel panel-default">
   
    <div class="panel-body">

    


        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">
            <div class="col-md-7">
           

            
                <img class="img-thumbnail" src="<?php echo base_url('packages_imgs/'. $package_info['package_img']);?>" alt="">
               
                <br>
                <br>
            
              </div>

              <div class="col-md-5">

<form action = "insert_orders" method="POST">     




                                    <input type = 'hidden' name = "package_id"      value= '<?php echo $package_id; ?>' />
                                    <input type = 'hidden' name = "time_ordered"    value= '<?php echo $time_ordered; ?>' />
                                    <input type = 'hidden' name = "event_date"      value= '<?php echo $event_date; ?>' />
                                    

               <h3><b>REFERENCE NUMBER</b>: UR123F89</h3>
               <hr>
                <h4><b>Photo Service</b>: <?php echo $package_info['package_name']; ?></h4>
                <hr>
                <p><h5><b>Date Reserved</b>: <?php echo date("M d, Y", strtotime($event_date)); ?></p></h5>
                <p><h5><b>Time Reserved</b>: <?php echo date("h:i a", strtotime($time_ordered)); ?></p></h5>
                <hr>
                <p><h5><b>Date Ordered</b>: <?php echo date("M d, Y h:i a", strtotime($date_ordered)); ?></p></h5>
                <br>
                <br>
                <b>Price of Reservation</b>:<h3>P <?php echo number_format($package_info['package_price']); ?></h3>
              
             
                
                
              </div>

           
                <br>
                <br>
                 <div class="col-lg-10">
                </div>                

                <div class="col-lg-2">

                 <p><button type="submit" class="btn btn-lg btn-primary">Confirm &raquo;</button>
                    </p>

                            
                            </div>
                </div>

</form>



                    </div>



            </div>

                                    
                                 

                                <form action = "view_order_receipt_print" method="POST">

                                    <input type = 'hidden' name = "package_id"      value= '<?php echo $package_id; ?>' />
                                    <input type = 'hidden' name = "time_ordered"    value= '<?php echo $time_ordered; ?>' />
                                    <input type = 'hidden' name = "event_date"      value= '<?php echo $event_date; ?>' />
                                    <input type = 'hidden' name = "time_ordered"    value= '<?php echo $time_ordered; ?>' />

                                    <br>
                                    
                                    </form> 

                                

        </div>
        <!-- /.row -->

        <!-- Modal -->
<div id="paypal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">PAYPAL</h4>
      </div>
      <div class="modal-body">
        <p>Once you click PROCEED TO PAYMENT here are the next steps:</p>
        <p>1. A PAYMENT PAGE will open with your REFERENCE NUMBER.</p>
        <p>2. Go to the nearest BAYAD CENTER or LBC and pay using your REFERENCE NUMBER.</p>
        <p>3. Go to TRANSACTION PAGE and print the Receipt.</p>
        <p>4. Bring the Official Receipt to the Center for clarification.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Proceed to Payment</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<div id="moneyremit" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Money Remittance</h4>
      </div>
      <div class="modal-body">
        <p>Once you click PROCEED TO PAYMENT here are the next steps:</p>
        <p>1. A PAYMENT PAGE will open with your REFERENCE NUMBER.</p>
        <p>2. Go to the nearest BAYAD CENTER or LBC and pay using your REFERENCE NUMBER.</p>
        <p>3. Go to TRANSACTION PAGE and print the Receipt.</p>
        <p>4. Bring the Official Receipt to the Center for clarification.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#finish">Proceed to Payment</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<div id="finish" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Thank You!</h4>
      </div>
      <div class="modal-body">
        <p>Thank you for using Cliqshot</p>
        <p>To see the status of your REFERENCE NUMBER and application, please go to TRANSACTION PAGE.</p>
       
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>







                                

                               

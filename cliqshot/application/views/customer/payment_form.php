
                 <div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-money"></i> Please choose Payment Option:</h3>
    </div>
    <div class="panel-body">

             <!-- /.col-sm-4 -->
                    <div class="col-sm-12">
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-info" data-toggle="modal" data-target="#paypal">
                                <h4 class="list-group-item-heading"><center><i class="fa fa-laptop fa-2x"></i></center> <center><br>PAYPAL</h4></center>
                               
                            </a>
                        </div>

                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-success" data-toggle="modal" data-target="#moneyremit">
                                <h4 class="list-group-item-heading"><center><i class="fa fa-money fa-2x"></i></center> <center><br>MONEY REMITTANCE</h4></center>
                               
                            </a>
                        </div>

               <form action = "cash_billing" method="POST">
               
                  <input type = 'hidden' name = "package_id" value= '<?php echo $package_id; ?>' />
                  <input type = 'hidden' name = "event_date" value= '<?php echo $event_date; ?>' />
                  <input type = 'hidden' name = "time_ordered" value= '<?php echo $time_ordered; ?>' />
                        <div class="list-group">

                            <button class="list-group-item list-group-item-success" >

                                <h4 class="list-group-item-heading"><center><i class="fa fa-money fa-2x"></i></center> <center><br>CASH</h4></center>
                                
                            </button>

                            </a>
                        </div>

                        </div>
                    </div>
                    <!-- /.col-sm-4 -->


                </form>

     
              
                         
                </div>
                </div>
                 <div class="col-lg-8">
                </div>                

                <div class="col-lg-4">

            

                            
                            </div>
                </div>


 <form action = "moneyremit_billing" method="POST">
 
    <input type = 'hidden' name = "package_id" value= '<?php echo $package_id; ?>' />
    <input type = 'hidden' name = "event_date" value= '<?php echo $event_date; ?>' />
    <input type = 'hidden' name = "time_ordered" value= '<?php echo $time_ordered; ?>' />

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
        <button type="submit" class="btn btn-primary">Proceed to Payment</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

 

                    </div>



            </div>

                                    
                      
                                

        </div>
        <!-- /.row -->



</form>
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


  
<br>
<div class="col-lg-12">

 <h2 class="page-header">
                          <i class="fa fa-money"></i> Payment System
                        </h2>


<ol class="breadcrumb">
                            <li>
                                <i class="fa fa-calendar"></i> My Appointments
                            </li>
                            <li class="active">
                                <i class="fa fa-money"></i> Confirm Payment
                            </li>
                        </ol>



<div class="panel panel-default">
   
    <div class="panel-body">

    


        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">
            <div class="col-md-7">
           

            
                <img class="img-thumbnail" src="<?php echo base_url('packages_imgs/'. $package_info['package_img']);?>" alt="">
            
               
              
            
              </div>

              <div class="col-md-5">


               
                <h4><b>Photo Service</b>: <?php echo $package_info['package_name']; ?></h4>
                <hr>
                <p><h5><b>Date Reserved</b>: <?php echo date("M d, Y", strtotime($event_date)); ?></p></h5>
                <p><h5><b>Time Reserved</b>: <?php echo date("h:i a", strtotime($time_ordered)); ?></p></h5>
                <hr>
                <p><h5><b>Date Ordered</b>: <?php echo date("M d, Y h:i a", strtotime($date_ordered)); ?></p></h5>
                
               <hr>
                 <p><h5><b>Amount:</b> P <?php echo $package_info['package_price'];?></h4>
                </p></h5>
                <hr>



                 <button type="button" class="btn btn-success  btn-block" data-toggle="modal" data-target="#myModal"><i class="fa fa-money"></i> Upload Photo of Deposit Slip</button>                  
                   
                   <?php echo form_close(); ?>




                      <br>
                     
                      


                                         

              </div>


            </div>

                                    
              

        </div>
        <!-- /.row -->



        <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Upload Deposit Slip Proof</h4>
      </div>
      <div class="modal-body">
       <?php echo form_open_multipart("CustomerController/payment_slip/{$this->input->get('order_id')}"); ?>
                <div class="form-group">

                 <strong>Note:</strong> <br>

                 After depositing your transactions to one of the following banks above, please upload your deposit slip for proof. Thanks!<br>
                 <hr>


                   <strong>Select Bank Account Transaction:</strong> <br><br>


                   <?php echo form_radio('bank_account', 'BDO'); ?> BDO Account - A0J-123-ASDSDSCXC-ASDA<br>
                   <?php echo form_radio('bank_account', 'BPI'); ?> BPI Account - A0J-123-ASDSDSCXC-ASDA<br>
                   <?php echo form_radio('bank_account', 'Metrobank'); ?> Metrobank Account - A0J-123-ASDSDSCXC-ASDA<br>

                  
                  <hr>

                        <label>Deposit Slip Photo</label>
                        <input type="file" name="proof" required="required">
                </div>

               
      <div class="modal-footer">

        <button type="submit" class="btn btn-success"><i class="fa fa-money"></i> Upload Photo of Deposit Slip</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


  <?php echo form_close(); ?>



         







                                

                               

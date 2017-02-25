  <?php if($this->session->flashdata('success')): ?>
    <script type="text/javascript">alert('Success!') ;</script>
  <?php endif; ?>

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">
                            <i class="fa fa-calendar"></i>  My Appointments

                        </h3>

                        <div class="row">
                            
                            <div class="col-lg-12">

                              <?php if($this->session->flashdata('approve')): ?>
                                      <div class="alert alert-success alert-dismissable fade in">
                                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                      <strong><?php echo $this->session->flashdata('approve'); ?></strong>
                                      </div>

                                      
                                      <?php endif; ?>
                               <?php if($this->session->flashdata('uploaded')): ?>
                                      <div class="alert alert-success alert-dismissable fade in">
                                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                      <strong><?php echo $this->session->flashdata('uploaded'); ?></strong>
                                      </div>

                                      
                                      <?php endif; ?>

                            <div class="panel panel-default">
                                     <div class="panel-heading">
                                         Client List
                                      </div>


                                      
                                    <!-- /.panel-heading -->
                                     <div class="panel-body">
  
                                    
                                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">

                                    <thead>

                                        <tr>
                                            <td><b>No.</b></td>
                                            <td><b>Date Appointed</b></td>
                                            
                                            <td><b>Package Name</b></td>
                                            <td><b>Session Date</b></td>
                                            <td><b>Session Time</b></td>
                                            <td><b>Order Status</b></td>
                                            <td><b>Payment Status</b></td>
                                            <td><b>Options</td>
                                    </thead>
                                      
                                      <tbody> 
                                    <?php $no=1; foreach($my_orders as $row) {  ?>


                                        <tr>
                                            <td><?="$no.";?></td>

                                            <td><?php echo  date("M d, Y", strtotime($row->date_ordered));  ?>
                                           
                                            <td><?php echo $row->package_name;  ?>
                                            
                                            <td><?php echo date("M d, Y", strtotime($row->event_date)); ?>
                                            
                                            <td><?php echo $row->time_ordered; ?>

                                            <td><?php echo $row->order_status; ?>
                                            
                                            <td><?php echo '<input type="hidden" name="" value="'.$row->payment_status; ?> .'">
                                                <ul>

                                                <?php 
                                                  if($row->order_status == 'pending' && $row->payment_status == 'unpaid') { ?>

                                                    <h4><span class="label label-danger">Unpaid</span></h4>
                                                    <br>


                                                <?php  } ?>
                                                <?php 
                                                  if($row->payment_status == 'paid') { ?>

                                                    <h4><span class="label label-success">Paid</span></h4>



                                                <?php  } ?>

                                                  <?php 
                                                  if($row->payment_status == 'not assigned') { ?>

                                                    <h4><span class="label label-primary">Not Assigned</span></h4>

                                                <?php } ?>

                                                <?php 
                                                  if($row->payment_status == 'pending deposit slip') { ?>

                                                    <h4><span class="label label-warning">Deposit Slip Ongoing</span></h4>

                                                <?php } ?>


                                                </ul>

                                            <td><!-- <a href="#"><i class="fa fa-file-o"></i> View Details</a>  -->

                                              <?php 
                                                  if($row->order_status == 'pending' && $row->payment_status == 'unpaid') { ?>

                                                    
                                                   <a href="payment_process?order_id=<?php echo $row->order_id; ?>"><i class ="fa fa-money" style="color: green;"></i> Proceed to Payment</a>

                                                

                                                   <hr>

                                                <?php  } ?>

                                            <a href="view_order_receipt_print?order_id=<?php echo $row->order_id; ?>" > <i class ="fa fa-print"></i> Print </a>

                                            <br>
                                                  <a href="<?php echo base_url('CustomerController/reschedule_appointment/'.$row->order_id);  ?>" ><i class="fa fa-calendar" style="color: green;"></i> Reschedule</a><br>
                                                  
                                                  <a href="<?php echo base_url('CustomerController/delete_order_flag/'.$row->order_id);  ?>" onClick="return doconfirm();" ><i class="fa fa-trash" style="color: red;"></i> Cancel</a>





                                      <?php $no++;  } ?>

                                      </tbody> 
                                    </table>

                               </div>

                            </div>
                    </div>
                     </div>
                     </div>
                     </div>




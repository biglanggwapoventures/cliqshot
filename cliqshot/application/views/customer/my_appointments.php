  

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">
                            <i class="fa fa-calendar"></i>  My Appointments

                        </h3>

                        <div class="row">
                            
                            <div class="col-lg-12">
                            <div class="panel panel-default">
                                     <div class="panel-heading">
                                         Client List
                                      </div>
                                    <!-- /.panel-heading -->
                                     <div class="panel-body">
  
                                    
                                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">

                                    <thead>

                                        <tr>
                                            <td>Reference No
                                            <td>Package Name
                                            <td>Transaction Date
                                            <td>Event Date
                                            <td>Event Time
                                            <td>Amount
                                            <td>Order Status
                                            <td>Payment Status
                                            <td>Options
                                    </thead>
                                      
                                      <tbody> 
                                    <?php
                                      

                                     foreach($my_orders as $row) {  ?>
                                    


                                        <tr>
                                            <td> <b>UR123F89</b>
                                            <td><?php echo $row->package_name;  ?>
                                            <td><?php echo date("M d, Y h:i:sa", strtotime($row->date_ordered)); ?>
                                            
                                            <td><?php echo date("M d, Y", strtotime($row->event_date)); ?>
                                            
                                            <td><?php echo date("h:i:sa", strtotime($row->time_ordered)); ?>
                                            
                                            <td>P<?php echo number_format($row->package_price, 2); ?>

                                            <td><?php echo $row->order_status; ?>
                                            
                                            <td><?php echo $row->payment_status; ?> 
                                                <ul>

                                                <?php 
                                                  if($row->order_status == 'approve' 
                                                      && $row->payment_status == 'unpaid') { ?>

                                <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">


                                                      <input type="hidden" name="cmd" value="_xclick" />
 
                                                    <!--   <input type="hidden" name="hosted_button_id" value="TVP3BQQHUH2BQ"> -->
                                                      <input type="hidden" name="business" value="enriquez.clarkvincent@yahoo.com.ph">

                                                      <input name='upload' value='1' type='hidden' />

                                                      <input type="hidden" name="no_note" value="1" />

                                                        <input type="hidden" name="item_name" value="<?php echo $row->package_name; ?>" >

                                                      <input type="hidden" name="item_number" value="<?php echo $row->order_id; ?>" />
                                                  <input type="hidden" name="amount" value="<?php echo $row->package_price; ?>">
 
                                                  <input type="hidden" name="no_note" value="0">

                                                      <input type="hidden" name="lc" value="PH" />

                                                      <input type="hidden" name="button_subtype" value="services" />

                                            <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
 <!-- 
                                 
                                                      <input type="hidden" name="payer_email" value="<?php echo $row->client_email; ?>" /> -->
                                                      
                                                      <input name="submit" value="Submit Payment"  type="image" src="https://www.paypal.com/en_GB/GB/i/btn/btn_xpressCheckout.gif" />


                                         </form>


                                                  <li><small><a href= "paid_order?order_id=<?php echo $row->order_id; ?>"><i class="fa fa-money"></i> Pay with Money Remetin</a></small></li>
                                                

                                                <?php  } ?>
                                                </ul>

                                            <td><a href="#"><i class="fa fa-file-o"></i> View Details</a> 
                                            <br><a href="view_order_receipt_print?order_id=<?php echo $row->order_id; ?>" > <i class ="fa fa-print"></i> Print </a>

                                            <br>|&nbsp;
                                                  <a href="#" onClick="return doconfirm();"><i class="fa fa-calendar" style="color: green;"></i>Reschedule</a><br>|&nbsp;
                                                  <a href="#" onClick="return doconfirm();"><i class="fa fa-trash" style="color: red;"></i>Cancel</a>



                                      <?php } ?>

                                      </tbody> 
                                    </table>

                               </div>

                            </div>
                    </div>
                     </div>
                     </div>
                     </div>

    
                                                  


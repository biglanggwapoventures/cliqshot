                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">
                            <i class="fa fa-money"></i> Payment Status

                        </h3>

                     
                        <div class="row">   
                            
                            <div class="col-md-12">
                            
                                <div class="panel panel-default">
                        <div class="panel-heading">
                            List of Payment Status
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">

                                    <thead>

                                        <tr>
                                            <td><b>No.</b>
                                            <td><b>Customer Name</b>
                                            <td><b>Package Name</b>
                                            <td><b>Date Ordered</b>
                                            <td><b>Session Date</b>
                                            <td><b>Session Time</b>
                                            <td><b>Price</b>
                                            <td><b>Bank Transaction</b>
                                            <td><b>Deposit Slip Picture</b>
                                            <td><b>Status</b>
                                            <td><b>Options</b>
                                           
                                    </thead>
                                      
                                    <?php $no=1;
                                      

                                     foreach($my_orders as $row) {  ?>
                                    


                                        <tr><td><b><?="$no.";?></b>
                                            <td><?php echo $row->client_fullname; ?>
                                            <td><?php echo $row->package_name; ?>
                                            <td><?php echo date("M, d Y", strtotime($row->date_ordered)); ?>
                                            <td><?php echo date("M, d Y", strtotime($row->event_date)); ?>
                                            <td><?php echo $row->time_ordered; ?>
                                            <td>P <?php echo $row->package_price; ?>.00
                                            <td><?php echo $row->bank_account; ?>
                                            <td><img id="myImg" src="<?php echo base_url() . '/payment_slips/' . $row->payment_slip; ?>" alt="" height="50px" width="50px"></img></td>
                                            <td><?php echo $row->payment_status; ?>
                                           
                                            <td>

                                                 <?php  if( $row->payment_status == 'pending deposit slip') { ?>


                                                    <a href= "view_details/<?php echo $row->order_id; ?>" class= 'btn btn-primary btn-sm' > View Details </a>
                                                    <br>

                                                    <a href= "paid_order/<?php echo $row->order_id; ?>" class= 'btn btn-success btn-sm' > Confirm </a>

                                                <?php } ?>


                                      <?php $no++;  } ?>

                              
                                            </table>
                                         <!-- /.table-responsive -->
                                        </div>
                                        <!-- /.panel-body -->
                                        </div>
                                    <!-- /.panel -->

                              <br>
                              <br>
                              <br>










</body>
</html>


                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">

                             <i class="fa fa-camera"></i> Select Photographer                                  

                          


                        </h3>

                        <div class="row">
                            
                            <div class="col-md-12">
                            
                               <div class="panel panel-primary">
  

                                    <table class ='table table-striped table-condensed '  id="dataTables-example">
 
                                            <tr><td><h4>Package Name:</h4>   <td><h4><?php echo $order_info['package_name']; ?></h4></td>
                                            <tr><td><b>Customer Name:</b>   <td><?php echo $order_info['client_fullname']; ?>
                                            
                                            <tr><td><b>Package Desc:</b>   <td><?php echo $order_info['package_desc']; ?>
                                            <tr><td><b>Order Id:</b>       <td><?php echo $order_info['order_id']; ?>
                                            <tr><td><b>Ordered Date:</b>   <td><?php echo $order_info['date_ordered']; ?>
                                            
                                           

                                    </table>
                            </div>

                             <div class="row">
                            
                            <div class="col-md-12">
                            
                                <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-camera"></i> List of Photographers
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">

                                    <thead>

                                        <tr>
                                            <td><b>No.</b></td>
                                            <td><b>Photographer Name</b>
                                            <td><b>Email</b>
                                            <td><b>Options</b>

                                    </thead>
                                      
                                    <?php $no=1;

                                     $order_id = $order_info['order_id'];
                                  

                                     foreach($photographers as $row) {  ?>
                                    


                                        <tr>
                                        <td><?="$no.";?></td>
                                        <td><?php echo $row->photographer_nama; ?>
                                        <td><?php echo $row->photographer_email; ?>
                                        <td><a href= "<?php

                                         echo base_url('ClerkController/assign_photographer?photographer_id='.$row->photographer_id.'&order_id='.$order_id); ?>" class= 'btn btn-success btn-sm' > Assign Photographer</a>
                                               


                                      <?php  $no++; } ?>

                              
                                    </table>

                               </div>

                            </div>
                    </div>
                    </div>

                            </div>
                    </div>

                                                  
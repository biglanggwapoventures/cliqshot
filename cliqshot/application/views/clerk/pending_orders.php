

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">
                            <i class="fa fa-calendar"></i>  Pending Orders

                        </h3>

                         <div class="row">
                            
                            <div class="col-md-12">
                            
                                <div class="panel panel-default">
                        <div class="panel-heading">
                            List of Pending Orders
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
                                            <td><b>Status</b>
                                            
                                    </thead>
                                      
                                    <?php $no=1;
                                      

                                     foreach($my_orders as $row) {  ?>
                                    


                                        <tr><td><b><?="$no.";?></b></td> 
                                            <td><?php echo $row->client_fullname; ?>
                                            <td><?php echo $row->package_name; ?>
                                            <td><?php echo date("M, d Y", strtotime($row->date_ordered)); ?>
                                            <td><?php echo date("M, d Y", strtotime($row->event_date)); ?>
                                            <td><?php echo $row->time_ordered; ?>
                                            <td><?php echo $row->order_status; ?>
                                           
                                               




                                      <?php $no++; } ?>

                              
                                    </table>

                               </div>

                            </div>
                    </div>

                      </div>

                            </div>

                                                  
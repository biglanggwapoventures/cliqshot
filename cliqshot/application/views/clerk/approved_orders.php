

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">
                            <i class="fa fa-check"></i>  Approved Orders

                        </h3>

                        <div class="row">
                            
                            <div class="col-md-12">
                            
                                <div class="panel panel-default">
                        <div class="panel-heading">
                            List of Approved Orders
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
                                            <td><b>Event Date</b>
                                            <td><b>Event Time</b>
                                            <td><b>Status</b>
                                            <td><b>Options</b>
                                    </thead>
                                      
                                    <?php $no=1;
                                      

                                     foreach($my_orders as $row) {  ?>
                                    


                                        <tr><td><b><?="$no.";?></b></td>
                                            <td><?php echo $row->client_fullname; ?>
                                            <td><?php echo $row->package_name; ?>
                                            <td><?php echo date("M, d Y", strtotime($row->date_ordered)); ?>
                                            <td><?php echo date("M, d Y", strtotime($row->event_date)); ?>
                                            <td><?php echo $row->time_ordered; ?>
                                            <td><?php echo $row->payment_status; ?>
                                           
                                            <td>

                                                <a href= "select_photographer/<?php echo $row->order_id; ?>" class= 'btn btn-success btn-sm' > Select Photographer</a>
<!--                                                 <a href= "approve_order/<?php echo $row->order_id; ?>" class= 'btn btn-info btn-sm' > View Order</a>
 -->                                            


                                      <?php  $no++; } ?>

                              
                                            </table>
                                         <!-- /.table-responsive -->
                                        </div>
                                        <br>
                                        <br>
                                        <br>
                                        <br>

                                        <!-- /.panel-body -->
                                        </div>
                                    <!-- /.panel -->

                               


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
                                            <td>Order Id
                                            <td>Package Name
                                            <td>Date Ordered
                                            <td>Event Date
                                            <td>Event Time
                                            <td>Status
                                    </thead>
                                      
                                    <?php
                                      

                                     foreach($my_orders as $row) {  ?>
                                    


                                        <tr><td><?php echo $row->order_id; ?>
                                            <td><?php echo $row->package_name; ?>
                                            <td><?php echo date("M, d Y", strtotime($row->date_ordered)); ?>
                                            <td><?php echo date("M, d Y", strtotime($row->event_date)); ?>
                                            <td><?php echo date("H:m", strtotime($row->time_ordered)); ?>
                                            <td><?php echo $row->order_status; ?>




                                      <?php } ?>

                              
                                    </table>

                               </div>

                            </div>
                    </div>
                    </td>
                                                  
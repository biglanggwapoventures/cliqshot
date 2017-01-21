

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">
                            <i class="fa fa-calendar"></i>  Pending Orders

                        </h3>

                        <div class="row">
                            
                            <div class="col-md-12">
                            
                               <div class="panel panel-red">
  
                                    
                                    <table class ='table table-striped table-condensed'>

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
                                            <td>

                                                <a href= "select_photographer/<?php echo $row->order_id; ?>" class= 'btn btn-success btn-sm' > Select  a Photographer</a>
                                                <a href= "approve_order/<?php echo $row->order_id; ?>" class= 'btn btn-info btn-sm' > View Order</a>
                                               


                                      <?php } ?>

                              
                                    </table>

                               </div>

                            </div>
                    </div>
                                                  
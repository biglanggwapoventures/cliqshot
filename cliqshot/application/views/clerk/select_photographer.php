

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">

                            <i class="fa fa-calendar"></i>                                      

                            <h2>Order Info</h2>


                        </h3>

                        <div class="row">
                            
                            <div class="col-md-12">
                            
                               <div class="panel panel-red">
  

                                    <table class ='table table-striped table-condensed '  id="dataTables-example">
 
                                            <tr><td>Order Id:       <td><?php echo $order_info['order_id']; ?>
                                            <tr><td>Ordered Date:   <td><?php echo $order_info['date_ordered']; ?>
                                            <tr><td>Package Name:   <td><?php echo $order_info['package_name']; ?>
                                            <tr><td>Package Desc:   <td><?php echo $order_info['package_desc']; ?>
                                           

                                    </table>
                            </div>

                            <div class="panel panel-blue">
                                    <table class ='table table-striped table-condensed'>

                                    <thead>

                                        <tr>
                                            <td>Photographer Id
                                            <td>Photographer User Name
                                            <td>Photographer Name
                                            <td>Date Email

                                    </thead>
                                      
                                    <?php

                                     $order_id = $order_info['order_id'];
                                  

                                     foreach($photographers as $row) {  ?>
                                    


                                        <tr><td><?php echo $row->photographer_id; ?>
                                        <td><?php echo $row->photographer_user; ?>
                                        <td><?php echo $row->photographer_nama; ?>
                                        <td><?php echo $row->photographer_email; ?>
                                        <td><a href= "<?php

                                         echo base_url('index.php/ClerkController/assign_photographer?photographer_id='.$row->photographer_id.'&order_id='.$order_id); ?>" class= 'btn btn-success btn-sm' > Assign Photographer</a>
                                               


                                      <?php } ?>

                              
                                    </table>

                               </div>

                            </div>
                    </div>
                                                  
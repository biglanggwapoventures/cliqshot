

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">
                            <i class="fa fa-calendar"></i>  Packages

                        </h3>

                         <div class="row">
                            
                            <div class="col-md-12">
                            
                                <div class="panel panel-default">
                        <div class="panel-heading">
                            List of Packages
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">


                                    <thead>

                                        <tr>
                                            <td>Package Id
                                            <td>Package Name
                                            <td>Package Desc
                                             <td>Package Price
                                            <td>Date Created
                                         
                                    </thead>
                                      
                                    <?php
                                      

                                     foreach($packages as $row) {  ?>
                                    


                                        <tr> <td><?php echo $row->package_id; ?>
                                            <td><?php echo $row->package_name; ?>
                                             <td><?php echo $row->package_desc; ?>
                                             <td>P<?php echo number_format($row->package_price, 2); ?>
                                            <td>

                                                <a href= "view_package_schedules/<?php echo $row->package_id; ?>" class= 'btn btn-success btn-sm' > View Package Schedules</a>
                                               
                                      <?php } ?>

                              
                                    </table>

                               </div>

                            </div>
                    </div>

                      </div>

                            </div>

                                                  
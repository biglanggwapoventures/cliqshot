

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">
                            <i class="fa fa-calendar"></i>   My Scheduled Photography Sessions 

                        </h3>

                         <div class="row">
                            
                            <div class="col-md-12">
                            
                                <div class="panel panel-default">
                        <div class="panel-heading">
                            List of Assigned Orders
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">


                                    <thead>

                                        <tr>
                                            <td><b>No.</b></td>
                                            <td><b>Customer Name</b>
                                            <td><b>Package Name</b>
                                            <td><b>Date Ordered</b>
                                            <td><b>Event Date</b>
                                            <td><b>Event Time</b>
                                            <td><b>Assigned To</b></td>

                                    </thead>
                                      
                                    <?php $no=1;
                                      

                                     foreach($my_orders as $row) {  ?>
                                    
                                            <tr>
                                            <td><?="$no.";?></td>
                                            <td><?php echo $row->client_fullname; ?>
                                            <td><?php echo $row->package_name; ?>
                                            <td><?php echo date("M d, Y", strtotime($row->date_ordered)); ?>
                                            <td><?php echo date("M d, Y", strtotime($row->event_date)); ?>
                                            <td><?php echo $row->time_ordered; ?>
                                            <td><?php echo $row->photographer_nama; ?>
                                           


                                      <?php $no++;  } ?>


                              
                                    </table>



                               </div>


                                    <br>
                                    <br>
                                    <br>


                 
                                                  
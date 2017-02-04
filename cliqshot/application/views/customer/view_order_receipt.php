`<div class="panel panel-primary">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title">Appointment Details</h3>
                                                    </div>
                                                    <div class="panel-body">

                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>

                                        <th>Date of Event</th>
                                        <th>Time of Event</th>

                                    </tr>

                                </thead>

                                <tbody>
                                    <tr> 
                                        <td><?php echo date("h:m", strtotime($time_ordered)); ?></td>

                                    </tr>

                                </tbody><thead>
                                    <tr>

                                        <th>Package Name</th>
                                        <th>Package Description</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?php echo $package_info['package_name']; ?></td>

                                        <td><?php echo $package_info['package_desc']; ?></td>

                                    </tr>
 
                                    <tr>
                                        <td><h3>Price</h3></td>
                                        <td><h3>P <?php echo number_format($package_info['package_price']); ?></h3></td>

                                    </tr>




                                </tbody>
                            </table>


                                <div class="col-lg-3">

                                <form action = "insert_orders" method="POST">

                                    <input type = 'hidden' name = "package_id"      value= '<?php echo $package_id; ?>' />
                                    <input type = 'hidden' name = "time_ordered"    value= '<?php echo $time_ordered; ?>' />
                                    <input type = 'hidden' name = "event_date"      value= '<?php echo $event_date; ?>' />


                                    <button type="submit" class="btn btn-primary">Confirm</button>
                                 </form>

                                   <form action = "view_order_receipt_print" method="POST">

                                    <input type = 'hidden' name = "package_id"      value= '<?php echo $package_id; ?>' />
                                    <input type = 'hidden' name = "time_ordered"    value= '<?php echo $time_ordered; ?>' />
                                    <input type = 'hidden' name = "event_date"      value= '<?php echo $event_date; ?>' />

                                    <br>
                                    <button type="submit" class="btn btn-info"> Print </button>

                                    </form>

                                </div>

                                <p>Note: Please confirm within 24 hours. Pay reservation fee first.</p>


                                                    </div>
                                                  </div>
                                                </div>
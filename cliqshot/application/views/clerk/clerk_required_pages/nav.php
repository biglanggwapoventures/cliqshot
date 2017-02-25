 <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">

                   

                    <li <?php     if($page_name == 'home') echo "class = 'active' "; ?>>
                        <a href="<?php echo site_url('ClerkController/index');?>"><i class="fa fa-fw fa-home"></i> 
                        Home</a>
                    </li>



                    <li <?php     if($page_name == 'pending_orders') echo "class = 'active' "; ?>>
                        <a href="<?php echo site_url('ClerkController/pending_orders');?>"><i class="fa fa-fw fa-picture-o"></i> 
                        Pending Appointment


                         <!--<?php foreach($count_pending AS $pending){ ?>
                         <lablel class = 'label label-primary'>5</lablel>
                         <?php } ?> -->
                         </a>

                    </li>


                    
                      <li <?php     if($page_name == 'payment_status') echo "class = 'active' "; ?>>
                        <a href="<?php echo site_url('ClerkController/payment_status');?>"><i class="fa fa-fw fa-money"></i> 
                        Payment Status</a>
                    </li>


                    <li <?php     if($page_name == 'deposit_status') echo "class = 'active' "; ?>>
                        <a href="deposit_status"><i class="fa fa-fw fa-picture-o"></i> Customer Deposit Slip
                        
 
                        </a>

                    </li>



                    <li <?php     if($page_name == 'approved_orders') echo "class = 'active' "; ?>>
                        <a href="<?php echo site_url('ClerkController/approved_orders');?>"><i class="fa fa-fw fa-check"></i> 
                        Approved Appointment</a>
                    </li>



           <!--           <li <?php     if($page_name == 'assigned_orders') echo "class = 'active' "; ?>>
                        <a href="<?php echo site_url('ClerkController/assigned_orders');?>"><i class="fa fa-fw fa-picture-o"></i> 
                        Pending Assigned Photographers</a>
                    </li>
 -->
                    <li <?php     if($page_name == 'upcoming_orders') echo "class = 'active' "; ?>>
                        <a href="<?php echo site_url('ClerkController/upcoming_orders');?>"><i class="fa fa-fw fa-camera"></i> 
                        Scheduled Photography Sessions </a>
                    </li>


                    <li <?php     if($page_name == 'calendar') echo "class = 'active' "; ?>>
                        <a href="calendar"><i class="fa fa-fw fa-calendar"></i> Calendar View
                        
                        <!-- Count  Orders History  of Photographer -->
 
                        </a>

                    </li>




                </ul>
            </div>

            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">
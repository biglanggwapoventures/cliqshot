 <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    
                    <li <?php     if($page_name == 'pending_orders') echo "class = 'active' "; ?>>
                        <a href="<?php echo site_url('ClerkController/pending_orders');?>"><i class="fa fa-fw fa-picture-o"></i> 
                        Pending Appointment</a>
                    </li>


                    <li <?php     if($page_name == 'approved_orders') echo "class = 'active' "; ?>>
                        <a href="<?php echo site_url('ClerkController/approved_orders');?>"><i class="fa fa-fw fa-picture-o"></i> 
                        Unassigned Appointment Events</a>
                    </li>

           <!--           <li <?php     if($page_name == 'assigned_orders') echo "class = 'active' "; ?>>
                        <a href="<?php echo site_url('ClerkController/assigned_orders');?>"><i class="fa fa-fw fa-picture-o"></i> 
                        Pending Assigned Photographers</a>
                    </li>
 -->
                    <li <?php     if($page_name == 'upcoming_orders') echo "class = 'active' "; ?>>
                        <a href="<?php echo site_url('ClerkController/upcoming_orders');?>"><i class="fa fa-fw fa-picture-o"></i> 
                        Scheduled Photography Sessions </a>
                    </li>

                     <li <?php     if($page_name == 'pending_order_album') echo "class = 'active' "; ?>>
                        <a href="pending_order_album"><i class="fa fa-fw fa-picture-o"></i> Pending for Album Orders
                        
                        <!-- Count Upcoming Assigned Orders of Photographer -->

                        <lablel class = 'label label-success'>3</lablel>

                        </a>

                    </li>

                    <li <?php     if($page_name == 'orders_history') echo "class = 'active' "; ?>>
                        <a href="orders_history"><i class="fa fa-fw fa-picture-o"></i> My Orders History
                        
                        <!-- Count  Orders History  of Photographer -->

                        <lablel class = 'label label-info'>5</lablel>

                        </a>

                    </li>

                    <li <?php     if($page_name == 'reports') echo "class = 'active' "; ?>>
                        <a href="reports"><i class="fa fa-fw fa-picture-o"></i> Reports
                        
                        <!-- Count  Orders History  of Photographer -->

                        <lablel class = 'label label-info'>5</lablel>

                        </a>

                    </li>

                </ul>
            </div>

            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">
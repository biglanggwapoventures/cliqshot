 <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="customer_index.html"><i class="fa fa-fw fa-dashboard"></i> Home</a>
                    </li>

                    <li <?php     if($page_name == 'package_lists') echo "class = 'active' "; ?>>
                        <a href="index"><i class="fa fa-fw fa-user"></i> Packages </a>
                    </li>


                    <li <?php     if($page_name == 'orders_request') echo "class = 'active' "; ?>>
                        <a href="orders_request"><i class="fa fa-fw fa-picture-o"></i> Orders Requests 
                        
                        <!-- Count Pending Orders of Photographer -->

                        <lablel class = 'label label-warning'>5</lablel>

                        </a>

                    </li>

                    <li <?php     if($page_name == 'upcoming_orders') echo "class = 'active' "; ?>>
                        <a href="upcoming_orders"><i class="fa fa-fw fa-picture-o"></i> Upcoming Assigned Orders 
                        
                        <!-- Count Upcoming Assigned Orders of Photographer -->

                        <lablel class = 'label label-danger'>5</lablel>

                        </a>

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


 

                </ul>
            </div>

            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">
 <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="customer_index.html"><i class="fa fa-fw fa-dashboard"></i> Home</a>
                    </li>

                    <li <?php     if($page_name == 'package_lists') echo "class = 'active' "; ?>>
                        <a href="index"><i class="fa fa-fw fa-user"></i> Packages </a>
                    </li>


                    <li <?php     if($page_name == 'my_pending_orders') echo "class = 'active' "; ?>>
                        <a href="my_assigned_orders"><i class="fa fa-fw fa-user"></i> My Assigned Orders 
                        
                        <!-- Count Pending Orders of Photographer -->

                        <lablel class = 'label label-warning'>5</lablel>

                        </a>

                    </li>

                    <li <?php     if($page_name == 'my_appointments') echo "class = 'active' "; ?>>
                        <a href="my_appointments"><i class="fa fa-fw fa-picture-o"></i> 
                        My Assigned Orders</a>
                    </li>


                    <li  <?php     if($page_name == 'upload_order_photos') echo "class = 'active' "; ?>>
                        <a href="customer_gallery.html" ><i class="fa fa-fw fa-picture-o"></i> Uploaded Order Albums</a>
                    </li>



                </ul>
            </div>

            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">
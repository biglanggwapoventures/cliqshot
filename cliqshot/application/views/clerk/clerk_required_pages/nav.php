 <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="customer_index.html"><i class="fa fa-fw fa-dashboard"></i> Home</a>
                    </li>

                    <li <?php     if($page_name == 'package_lists') echo "class = 'active' "; ?>>
                        <a href="index"><i class="fa fa-fw fa-user"></i> Packages </a>
                    </li>

                    <li>
                        <a href="customer_gallery.html"><i class="fa fa-fw fa-picture-o"></i> Gallery</a>
                    </li>




                    <li <?php     if($page_name == 'pending_orders') echo "class = 'active' "; ?>>
                        <a href="pending_orders"><i class="fa fa-fw fa-picture-o"></i> 
                        Pending Orders</a>
                    </li>


                    <li <?php     if($page_name == 'approved_orders') echo "class = 'active' "; ?>>
                        <a href="approved_orders"><i class="fa fa-fw fa-picture-o"></i> 
                        Approved Orders</a>
                    </li>

                </ul>
            </div>

            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">
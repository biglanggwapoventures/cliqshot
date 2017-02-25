 <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">

                    <li <?php     if($page_name == 'home') echo "class = 'active' "; ?>>
                        <a href="<?php echo site_url('CustomerController/index');?>"><i class="fa fa-fw fa-home"></i> Home </a>
                    </li>
                   
                    <li <?php     if($page_name == 'package_lists') echo "class = 'active' "; ?>>
                        <a href="<?php echo site_url('CustomerController/photo_services');?>"><i class="fa fa-fw fa-user"></i> Photo Services </a>
                    </li>

                    <li <?php     if($page_name == 'orders_history') echo "class = 'active' "; ?>>
                        <a href="<?php echo site_url('CustomerController/orders_history');?>"><i class="fa fa-fw fa-picture-o"></i> Gallery</a>
                    </li>




                    <li <?php     if($page_name == 'my_appointments') echo "class = 'active' "; ?>>
                        <a href="<?php echo site_url('CustomerController/my_appointments');?>"><i class="fa fa-fw fa-picture-o"></i> 
                        My Appointments</a>
                    </li>

                    <li <?php     if($page_name == 'my_calendar') echo "class = 'active' "; ?>>
                        <a href="<?php echo site_url('CustomerController/my_calendar');?>"><i class="fa fa-fw fa-picture-o"></i> 
                        My Calendar</a>
                    </li>

                    <!-- 
                     <li>
                        <a href="#"><i class="fa fa-fw fa-picture-o"></i> 
                        Appointment History</a>
                    </li>
 -->
                </ul>
            </div>

            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">
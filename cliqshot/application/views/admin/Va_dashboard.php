
<?php $this->load->view('admin/admin_required_pages/header');?>
<?php $this->load->view('admin/admin_required_pages/nav');?>

        <div id="page-wrapper">
            
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">


                    <h2 class="page-header"><i class="fa fa-dashboard"></i> Dashboard</h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <h3>Welcome <i><?php echo $this->session->userdata('admin_user') ?></i></h3>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <?php foreach($count_admin AS $admin){ ?>
                                    <div class="huge"><?=$admin->admin_count;?></div>
                                    <?php } ?>
                                    <div>Admin</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo site_url('AdminController/read_admin');?>">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <?php foreach($count_photographer AS $photographer){ ?>
                                    <div class="huge"><?=$photographer->photographer_count;?></div>
                                    <?php } ?>
                                    <div>Photographer</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo site_url('AdminController/read_photographer');?>">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <?php foreach($count_customer AS $customer){ ?>
                                    <div class="huge"><?=$customer->customer_count;?></div>
                                    <?php } ?>
                                    <div>customer</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo site_url('AdminController/read_customer');?>">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <?php foreach($count_clerk AS $clerk){ ?>
                                    <div class="huge"><?=$clerk->clerk_count;?></div>
                                    <?php } ?>
                                    <div>Clerk</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo site_url('AdminController/read_clerk');?>">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-camera fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <?php foreach($count_services AS $services){ ?>
                                    <div class="huge"><?=$services->services_count;?></div>
                                    <?php } ?>
                                    <div>Photo Services </div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo site_url('AdminController/read_photoservices');?>">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>




                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">
 
                        </h3>

                         <div class="row">
                            
                            <div class="col-md-12">
                            
                                <div class="panel panel-default">
                        <div class="panel-heading">
                            
                            REPORTS

                        
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

                           
                             <h2>Summary of Package Sale</h2>

                             <table class="table table-striped"> 
                                 
                                    <tr><td>Package Name <td> # Times Ordered <td> Total Sales
                                    
                                    <?php foreach($packageReports as $row) { ?>

                                    <tr><td><?php echo $row['package_name']; ?> 
                                        <td><?php echo $row['tot_orders']; ?>  
                                        <td>P <?php echo number_format($row['packageTotal'], 2); ?>  
                                   
                                    <?php } ?>
                             </table>

                            <h2>Summary Monthly Sales</h2>
                            <table class="table table-striped table-condensed"> 
                                 
                                    <tr>
                                        <td>Month
                                        <td> Total Orders 
                                        <td> Total Sales 

                                    <?php foreach($monthlyReports as $row) { ?>

                                    <tr><td><?php echo $row['month']; ?> 
                                        <td><?php echo $row['tot_orders']; ?>  
                                        <td>P <?php echo number_format($row['packageTotal'], 2); ?>  
                                   
                                    <?php } ?>
                              
                                 
                             </table>

                            
                            
                            <h2>Summary Sales by Photographer</h2>
                            <table class="table table-striped table-condensed"> 
                                 
                                    <tr><td>Photographer <td> Total Services <td> Total Sales    
                               
                                    <?php foreach($photographerReports as $row) { ?>

                                    <tr><td><?php echo $row['photographer_user']; ?> 
                                        <td><?php echo $row['tot_orders']; ?>  
                                        <td>P <?php echo number_format($row['packageTotal'], 2); ?>  
                                   
                                    <?php } ?>
                                 
                             </table>                              

                           
            




<script src="<?php echo base_url();?>assets/dashboard/jquery-2.1.4.min.js"></script>
<script src="<?php echo base_url();?>assets/dashboard/Chart.js"></script>



  <h2>Summary of Package Sale</h2>

                             <table class="table table-striped"> 
                                 
                                    <tr><td>Package Name <td> # Times Ordered <td> Total Sales
                                    
                                    <?php foreach($packageReports as $row) { ?>

                                    <tr><td><?php echo $row['package_name']; ?> 
                                        <td><?php echo $row['tot_orders']; ?>  
                                        <td>P <?php echo number_format($row['packageTotal'], 2); ?>  
                                   
                                    <?php } ?>
                             </table>






        
    
                                                  



            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


<?php $this->load->view('admin/admin_required_pages/footer');?>

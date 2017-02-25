<?php $this->load->view('photographer/Vp_Navbar');?>

        <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Dashboard</h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <h3>Welcome <i><?php echo $this->session->userdata('photographer_nama') ?></i></h3>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <?php foreach($count_photographer AS $photographer){ ?>
                                    <div class="huge"><?=$photographer->photographer_count;?></div>
                                    <?php } ?>
                                    <div>Photographer Registered</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo site_url('photographer/C_Photographer/read_photographer');?>">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


<?php $this->load->view('main/V_Script');?>

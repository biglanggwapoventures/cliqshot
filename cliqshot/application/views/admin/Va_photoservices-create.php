<?php $this->load->view('admin/admin_required_pages/header');?>
<?php $this->load->view('admin/admin_required_pages/nav');?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Add Photo Services</h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <font color="red"><?php echo validation_errors();?></font>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Form add New Member
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <!-- /.col-lg-6 (nested) -->                                
                                <div class="col-lg-12">
                                    <?php echo form_open("AdminController/create_photoservices_process"); ?>
                                        <div class="form-group">
                                            <label class="control-label" for="package_name">Package Name</label>
                                            <input type="text" name="package_name" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="package_desc">Package Description</label>
                                            <textarea type="text" name="package_desc" class="form-control" required></textarea> 
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="packageimg">Package Image</label>
                                            <input type="file" name="package_img" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="packageprice">Package Price</label>
                                            <input type="text" name="package_price" class="form-control" required>
                                        </div>
                                        
                                        <input type="reset" values="reset" class="btn btn-danger">
                                        <input type="submit" values="submit" class="btn btn-success">
                                    <?php echo form_close(); ?>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->


<?php $this->load->view('admin/admin_required_pages/footer');?>

<?php $this->load->view('admin/admin_required_pages/header');?>
<?php $this->load->view('admin/admin_required_pages/nav');?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Update Photo Services</h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Form Update Photo Services
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <!-- /.col-lg-6 (nested) -->                                
                                <div class="col-lg-12">
                                    <?php echo form_open("AdminController/update_photoservices_process"); ?>

                                        <input type="hidden" name="package_id" value="<?=$data_services->package_id;?>" required>
                                        <div class="form-group">
                                            <label class="control-label" for="package_name">Package Name</label>
                                            <input type="text" name="package_name" value="<?=$data_services->package_name;?>" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="package_desc">Package Description</label>
                                            <input value="<?=$data_services->package_desc;?>" type="text" name="package_desc" value="<?=$data_services->package_desc;?>" class="form-control" required> 

                                        </div>
                                         <div class="form-group">
                                            <label class="control-label" for="package_img">Package Image</label>
                                            <input type="file" name="package_img" value="<?=$data_services->package_img;?>" class="form-control" required>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label" for="package_price">Package Price</label>
                                            <input type="text" name="package_price" value="<?=$data_services->package_price;?>" class="form-control" required>

                                        </div>
                                        <input type="reset" value="RESET" class="btn btn-danger">
                                        <input type="submit" value="SUBMIT" class="btn btn-success">
                                    <?php echo form_close(); ?>
                                </div>
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

<?php $this->load->view('admin/admin_required_pages/header');?>
<?php $this->load->view('admin/admin_required_pages/nav');?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Add Client</h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                    <font color="red"><?php echo validation_errors();?></font>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Form add New Client
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <!-- /.col-lg-6 (nested) -->                                
                                <div class="col-lg-12">
                                    <?php echo form_open("AdminController/create_member_process"); ?>
                                        <div class="form-group">
                                            <label class="control-label" for="username">Username</label>
                                            <input type="text" name="username" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="fullname">Full Name</label>
                                            <input type="text" name="fullname" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="address">Address</label>
                                            <input type="text" name="address" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="birthdate">Date of Birth</label>
                                            <input type="date" name="birthdate" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="email">Email</label>
                                            <input type="text" name="email" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="email">Contact Number</label>
                                            <input type="text" name="contact" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="password">Password</label>
                                            <input type="password" name="password" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="passconf">Confirm Password</label>
                                            <input type="password" name="passconf" class="form-control" required>
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

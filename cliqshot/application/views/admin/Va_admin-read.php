<?php $this->load->view('admin/admin_required_pages/header');?>
<?php $this->load->view('admin/admin_required_pages/nav');?>

        <div id="page-wrapper">

          <div class="container-fluid">
            <div class="row">

                <div class="col-lg-12">
                    <h1 class="page-header">Admin</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <a href="<?php echo site_url('AdminController/create_admin');?>" class="btn btn-primary">
                        <i class="fa fa-plus"></i> Add data
                    </a>
                </div>
            </div>
            <br>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Admin List
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach($data_admin AS $admin){ ?>
                                    <tr>
                                        <td><?="$no.";?></td>
                                        <td><?=$admin->admin_user;?></td>
                                        <td><?=$admin->admin_pass;?></td>
                                        <td>
                                            <a href="<?=site_url('AdminController/update_admin/'.$admin->admin_id);?>"><i class="fa fa-edit fa-fw" style="color: green;"></i></a>
                                            &nbsp;|&nbsp;
                                            <a href="<?=site_url('AdminController/delete_admin/'.$admin->admin_id);?>" onClick="return doconfirm();"><i class="fa fa-trash fa-fw" style="color: red;"></i></a>
                                        </td>
                                    </tr>
                                    <?php $no++; } ?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
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
        <br>
        <br>
        <br>
    </div>
    <!-- /#wrapper -->


<?php $this->load->view('admin/admin_required_pages/footer');?>

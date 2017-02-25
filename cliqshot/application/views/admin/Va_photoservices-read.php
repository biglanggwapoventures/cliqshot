<?php $this->load->view('admin/admin_required_pages/header');?>
<?php $this->load->view('admin/admin_required_pages/nav');?>


        <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Photo Services</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <a href="<?php echo site_url('AdminController/create_photoservices');?>" class="btn btn-primary">
                        <i class="fa fa-plus"></i> Add Photo Services
                    </a>
                </div>
            </div>
            <br>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Photo Services List
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Service Name</th>
                                        <th>Service Description</th>
                                        <th>Service Price</th>
                                        <th>Date Created</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach($data_services AS $services){ ?>
                                    <tr>
                                        <td><?="$no.";?></td>
                                        <td><?=$services->package_name;?></td>
                                        <td><?=$services->package_desc;?></td>
                                        <td><?=$services->package_price;?></td>
                                        <td><?=$services->date_created;?></td>
                                        <td>
                                            <a href="<?=site_url('AdminController/update_services/'.$services->package_id);?>"><i class="fa fa-eye fa-fw" style="color: blue;"></i></a>
                                            &nbsp;|&nbsp;
                                            <a href="<?=site_url('AdminController/update_services/'.$services->package_id);?>"><i class="fa fa-edit fa-fw" style="color: green;"></i></a>
                                            &nbsp;|&nbsp;
                                            <a href="<?=site_url('AdminController/delete_service/'.$services->package_id);?>" onClick="return doconfirm();"><i class="fa fa-trash fa-fw" style="color: red;"></i></a>
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

    </div>
    <!-- /#wrapper -->


<?php $this->load->view('admin/admin_required_pages/footer');?>

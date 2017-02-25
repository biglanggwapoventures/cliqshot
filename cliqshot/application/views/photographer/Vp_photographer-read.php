<?php $this->load->view('photographer/Vp_Navbar');?>

        <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Photographer</h1>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Customer's List
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Username</th>
                                        <th>Photographer Name</th>
                                        <th>Address</th>
                                        <th>Email</th>
                                        <th>Birth Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach($data_member AS $member){ ?>
                                    <tr>
                                        <td><?="$no.";?></td>
                                        <td><?=$member->member_user;?></td>
                                        <td><?=$member->member_nama;?></td>
                                        <td><?=$member->member_alamat;?></td>
                                        <td><?=$member->member_ttl;?></td>
                                        <td><?=$member->member_email;?></td>
                                        <td></td>
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


<?php $this->load->view('main/V_Script');?>


<br>
<br>
<br>

<br>
<br>



      </div>



                </div>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->



<script src="<?php echo base_url();?>/assets/inside/js/custom.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url();?>assets/inside/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url();?>assets/inside/vendor/metisMenu/metisMenu.min.js"></script>


<!-- DataTables JavaScript -->
<script src="<?php echo base_url();?>assets/inside/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/inside/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/inside/vendor/datatables-responsive/dataTables.responsive.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url();?>assets/inside/dist/js/sb-admin-2.js"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
$(document).ready(function() {
    $('#dataTables-example').DataTable({
        responsive: true
    });
});
</script>

<script>
function doconfirm()
{
    job=confirm("Are you sure to delete permanently?");
    if(job!=true)
    {
        return false;
    }
}
</script>


<link href="<?php echo base_url();?>assets/inside/css/dcalendar.picker.css" rel="stylesheet">

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>

<script src="<?php echo base_url();?>assets/inside/js/dcalendar.picker.js"></script>


</body>

</html>


<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title" id="myModalLabel">View Profile</h4>
                    </div>
                <div class="modal-body">
                    <center>
                    
                    <h3 class="media-heading"><?php echo $this->session->userdata('client_fullname') ?></h3>

                    </center>
                    <hr>
                    <center>
                    <p class="text-left"><strong>Full Name: </strong>
                    <?php echo $this->session->userdata('client_fullname') ?></p>

                    <p class="text-left"><strong>Email Address: </strong>
                    <?php echo $this->session->userdata('client_email') ?></p>

                    <p class="text-left"><strong>Birthday: </strong>
                    <?php echo $this->session->userdata('client_birthdate') ?></p></p>
                    <p class="text-left"><strong>Full Address: </strong>
                    <?php echo $this->session->userdata('client_address') ?></p>

                    <p class="text-left"><strong>Username: </strong>
                    <?php echo $this->session->userdata('client_username') ?></p>
                    <hr>
                    </center>
                </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


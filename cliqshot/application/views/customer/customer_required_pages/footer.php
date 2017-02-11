
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


<!-- jQuery -->
<script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>

<script src="<?php echo base_url();?>/assets/js/custom.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url();?>assets/vendor/metisMenu/metisMenu.min.js"></script>


<!-- DataTables JavaScript -->
<script src="<?php echo base_url();?>assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/datatables-responsive/dataTables.responsive.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url();?>assets/dist/js/sb-admin-2.js"></script>


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

<link href="<?php echo base_url();?>assets/css/dcalendar.picker.css" rel="stylesheet">

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>

<script src="<?php echo base_url();?>assets/js/dcalendar.picker.js"></script>


</body>

</html>

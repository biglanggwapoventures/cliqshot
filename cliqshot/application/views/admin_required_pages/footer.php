
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
    
<!-- jQuery -->







<script src="<?php echo base_url();?>assets/inside/vendor/jquery/jquery.min.js"></script>

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
<script type="text/javascript" src= "<?= base_url('assets/charts/canvasjs.min.js')?>"></script>
<script type="text/javascript" src= "<?= base_url('assets/charts/jquery.canvasjs.min.js')?>"></script>

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


<script type="text/javascript">
window.onload = function () {
    var result = null;

    $.getJSON('<?= base_url("Chartcontroller/getDataForCharts") ?>')
    
    .done(function(res){
        var options = {
        title: {
            text: "Sales"
        },
                animationEnabled: true,
        data: [
            {
                type: "column", //change it to line, area, bar, pie, etc
                dataPoints:  res

            }
        ]
    };

    $("#salescontainer").CanvasJSChart(options);                
    })

    $.getJSON('<?= base_url("Chartcontroller/getInstanceOfPackage") ?>')
    
    .done(function(packageFrequency){
        var options = {
        title: {
            text: "Most Frequent Packages"
        },
                animationEnabled: true,
        data: [
            {
                type: "column", //change it to line, area, bar, pie, etc
                dataPoints:  packageFrequency

            }
        ]
    };

    $("#packagecontainer").CanvasJSChart(options);                
    })



}
</script>







</body>

</html>

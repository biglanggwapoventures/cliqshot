
<style>

 
  #calendar {
    max-width: 900px;
    margin: 0 auto;
  }

</style>



   <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">
                        <form action="" method="POST">
                            <i class="fa fa-calendar"></i> Calendar

                        </h3>

        <div id='calendar'></div>
                     </form>

                            </div>
                    </div>






<script src="<?php echo base_url();?>assets/inside/vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url();?>assets/inside/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url();?>assets/inside/vendor/metisMenu/metisMenu.min.js"></script>

<!-- DataTables JavaScript -->
<script src="<?php echo base_url();?>assets/inside/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/inside/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/inside/vendor/datatables-responsive/dataTables.responsive.js"></script>


<link href='<?php echo base_url();?>assets/inside/fullcalendar/fullcalendar.min.css' rel='stylesheet' />
<link href='<?php echo base_url();?>assets/inside/fullcalendar/fullcalendar.print.min.css' rel='stylesheet' media='print' />
<script src='<?php echo base_url();?>assets/inside/fullcalendar/lib/moment.min.js'></script>
<script src='<?php echo base_url();?>assets/inside/fullcalendar/lib/jquery.min.js'></script>
<script src='<?php echo base_url();?>assets/inside/fullcalendar/fullcalendar.min.js'></script>

<?php 

  // print_r($calendar_orders); 
  
  // exit;
    // foreach($calendar_orders  as  $row) { 

    //   print_r($row->order_id); 
    // }

?>

<script>

  $(document).ready(function() {
    
    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,basicWeek,basicDay'
      },
      defaultDate: '<?php echo date("Y-m-d"); ?>',
      navLinks: true, // can click day/week names to navigate views
      eventLimit: true, // allow "more" link when too many events
      events: [
        
      <?php foreach($calendar_orders  as  $row) { ?>

        {
          title: '<?php echo $row->package_name. ' by '.$row->client_fullname; ?>',
          start: '<?php echo $row->event_date; ?>'
        },

      <?php } ?>

      ]
    });
    
  });

</script>



  















    <br>
<div class="col-lg-12">

 <h2 class="page-header">
                          <i class="fa fa-calendar"></i>   Appointment System
                        </h2>


<ol class="breadcrumb">
                          <li>
                              <i class="fa fa-home"></i>  <a href="<?php echo site_url('CustomerController/index');?>"> Home</a>
                          </li>
                            <li>
                                <i class="fa fa-calendar"></i> Set Date and Time Schedule
                            </li>
                            <li class="active">
                                <i class="fa fa-money"></i> Payment Information
                            </li>
                        </ol>


<div class="panel panel-default">
   
    <div class="panel-body">

    


        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">
            <div class="col-md-7">
            <div class="panel panel-default">
   
    <div class="panel-body">

            
                <img class="img-thumbnail" src="<?php echo base_url('packages_imgs/'. $package_info['package_img']);?>" alt="">
                <center>
                <h3><?php echo $package_info['package_name']; ?></h3>
                <hr>
                <p><?php echo $package_info['package_desc']; ?></p>
                <hr>
                <h3>P <?php echo number_format($package_info['package_price']); ?></h3>
                </center>
                <br>
                <br>
            </div>
             </div>
              </div>

           
              <div class="col-md-5">
              <div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-calendar"></i> Appointment Schedule:</h3>
    </div>
    <div class="panel-body">


    <h4> <i class="fa fa-calendar"></i>  <?php echo date("l, M d, Y", strtotime($event_date)); ?></h4>
                


    <h4> <i class="fa fa-clock-o"></i>  <?php echo date("h:i A", strtotime($time_ordered)); ?></h4>
                
 
 
                         
                </div>
                </div>







                                

                               

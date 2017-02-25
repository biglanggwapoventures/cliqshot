<br>
<div class="col-lg-12">

 <h2 class="page-header">
                          <i class="fa fa-money"></i> View Details
                        </h2>


<ol class="breadcrumb">
                            <li>
                                <i class="fa fa-calendar"></i> My Appointments
                            </li>
                            <li class="active">
                                <i class="fa fa-money"></i> Confirm Payment
                            </li>
                        </ol>



<div class="panel panel-default">
   
    <div class="panel-body">

    


        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">
            <div class="col-md-7">
           
                <img class="img-thumbnail" src="<?php echo base_url('packages_imgs/'. $package_info['package_img']);?>" alt="">
            
              </div>

              <div class="col-md-5">


               
                <h4><b>Photo Service</b>: <?php echo $package_info['package_name']; ?></h4>
                <hr>
                <p><h5><b>Date Reserved</b>: <?php echo date("M d, Y", strtotime($event_date)); ?></p></h5>
                <p><h5><b>Time Reserved</b>: <?php echo date("h:i a", strtotime($time_ordered)); ?></p></h5>
                <hr>
                <p><h5><b>Date Ordered</b>: <?php echo date("M d, Y h:i a", strtotime($date_ordered)); ?></p></h5>
                
               <hr>
                 <p><h5><b>Amount:</b> P <?php echo $package_info['package_price'];?></h4>
                </p></h5>
                <hr>



                      <br>
                     
                      


                                         

              </div>


            </div>

                                    
              

        </div>
        <!-- /.row -->



    







                                

                               

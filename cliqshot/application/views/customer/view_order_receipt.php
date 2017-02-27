<br>
<div class="col-lg-12">

 <h2 class="page-header">
                          <i class="fa fa-calendar"></i>   Appointment System
                        </h2>


<ol class="breadcrumb">
                          <li>
                              <i class="fa fa-home"></i>  <a href="<?php echo site_url('CustomerController/index');?>"> Home</a>
                          </li>
                            <li class="active">
                                <i class="fa fa-calendar"></i> Set Date and Time Schedule
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
                <p><b>Description: </b><?php echo $package_info['package_desc']; ?></p>
                <hr>
                <h3>P <?php echo number_format($package_info['package_price']); ?></h3>
                </center>
            </div>
             </div>
              </div>

           
              <div class="col-md-5">
              <div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-calendar"></i> Time and Schedule</h3>
    </div>
    <div class="panel-body">

<form action = "payment_information" method="POST">

    <input type = 'hidden' name = "package_id" value= '<?php echo $package_id; ?>' />
    <h4> <i class="fa fa-calendar"></i> Date of Appointment</h4>
    <hr>            
                 <div class='input-group date' id='datetimepicker1'>
                    <input class="form-control" type ='date' name ='event_date' required='required' />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>

    <br>

    <h4> <i class="fa fa-clock-o"></i> Time of Appointment</h4>
    <hr>
                
                <select class="form-control" name="time_ordered">
                    <option value="09:00 AM">09:00 AM</option>
                    <option value="09:30 AM">09:30 AM</option>
                    <option value="10:00 AM">10:00 AM</option>
                    <option value="10:30 AM">10:30 AM</option>
                    <option value="11:00 AM">11:00 AM</option>
                    <option value="11:30 AM">11:30 AM</option>
                    <option value="12:00 PM">12:00 PM</option>
                    <option value="12:30 PM">12:30 PM</option>
                    <option value="01:00 PM">01:00 PM</option>
                    <option value="01:30 PM">01:30 PM</option>
                    <option value="02:00 PM">02:00 PM</option>
                    <option value="02:30 PM">02:30 PM</option>
                    <option value="03:00 PM">03:00 PM</option>
                    <option value="03:30 PM">03:30 PM</option>
                    <option value="04:00 PM">04:00 PM</option>
                    <option value="04:30 PM">04:30 PM</option>
                    <option value="05:00 PM">05:00 PM</option>
                </select>

                <!--<?php echo form_radio('time_ordered', '09:00 AM'); ?> 09:00 AM<br>
                <?php echo form_radio('time_ordered', '09:30 AM'); ?> 09:30 AM<br>
                <?php echo form_radio('time_ordered', '10:00 AM'); ?> 10:00 AM<br>
                <?php echo form_radio('time_ordered', '10:30 AM'); ?> 10:30 AM<br>
                <?php echo form_radio('time_ordered', '11:00 AM'); ?> 11:00 AM<br>
                <?php echo form_radio('time_ordered', '11:30 AM'); ?> 11:30 AM<br>
                <?php echo form_radio('time_ordered', '12:00 PM'); ?> 12:00 PM<br>
                <?php echo form_radio('time_ordered', '12:30 PM'); ?> 12:30 PM<br>
                <?php echo form_radio('time_ordered', '01:00 PM'); ?> 01:00 PM<br>
                <?php echo form_radio('time_ordered', '01:30 PM'); ?> 01:30 PM<br>
                <?php echo form_radio('time_ordered', '02:00 PM'); ?> 02:00 PM<br>
                <?php echo form_radio('time_ordered', '02:30 PM'); ?> 02:30 PM<br>
                <?php echo form_radio('time_ordered', '03:00 PM'); ?> 03:00 PM<br> 
                <?php echo form_radio('time_ordered', '03:30 PM'); ?> 03:30 PM<br>      
                <?php echo form_radio('time_ordered', '04:00 PM'); ?> 04:00 PM<br>      
                <?php echo form_radio('time_ordered', '04:30 PM'); ?> 04:30 PM<br>      
                <?php echo form_radio('time_ordered', '05:00 PM'); ?> 05:00 PM<br>           
                -->
                
               
                </div>
                </div>

               


                 <div class="col-lg-8">
                 <?php if($error == true): ?>
                    <div class="alert alert-danger alert-dismissable">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <strong>Sorry</strong> Date and time already taken
                    </div>
                <?php endif; ?>
                </div>                

                <div class="col-lg-4">

                 <p><button type="submit" class="btn btn-lg btn-primary">Next &raquo;</button>
                    </p>

                            
                            </div>
                            </div>

                        </form>



                    </div>



            </div>

                                

        </div>
        <!-- /.row -->





                                

                               

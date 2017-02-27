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
            
           
              <div class="col-md-5">
              <div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-calendar"></i> Time and Schedule</h3>
    </div>
    <div class="panel-body">

<form action = "<?= site_url('CustomerController/rescheduleAppointment') ?>" method="POST">

    <input type = 'hidden' name = "appointment_id" value= '<?php echo $this->uri->segment(3); ?>' />
    <h4> <i class="fa fa-calendar"></i> Date of Appointment</h4>
                
                 <div class='input-group date' id='datetimepicker1'>
                    <input class="form-control" type ='date' name ='event_date' required='required' />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>

    <br>

    <h4> <i class="fa fa-clock-o"></i> Time of Appointment</h4>
                
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
                
                
  <!--<table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Time</th>
                                        <th>Availability</th>
                                        
                                    </tr>
                                </thead>
                        <br> 
                         <h3><i class="fa fa-clock"></i> Time of Appointment</h3>
                                <tbody>
                                    <tr>
                                        <td><input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked> 08:00 AM-09:00 AM </td>
                                        <td><font color="green">AVAILABLE</font></td>
                                        
                                    </tr>
                                    <tr>
                                        <fieldset disabled>
                                        <td><input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked> 09:00 AM-10:00 AM </td>
                                        <td><font color="red">NOT AVAILABLE</font></td>
                                        </fieldset>
                                        
                                    </tr>
                                    <tr>
                                        <td><input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked> 10:00 AM-11:00 PM </td>
                                        <td><font color="green">AVAILABLE</font></td>
                                        
                                    </tr>
                                    <tr>
                                        <td><input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked> 11:00 AM-12:00 PM </td>
                                        <td><font color="red">NOT AVAILABLE</font></td>
                                        
                                    </tr>
                                    <tr>
                                        <td><input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked> 12:00 PM-01:00 PM </td>
                                        <td><font color="green">AVAILABLE</font></td>
                                        
                                    </tr>
                                    <tr>
                                        <td><input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked> 01:00 PM-02:00 PM </td>
                                        <td><font color="green">AVAILABLE</font></td>
                                         
                                    </tr>
                                    <tr>
                                        <td><input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked> 02:00 PM-03:00 PM</td>
                                        <td><font color="red">NOT AVAILABLE</font></td>
                                        
                                    </tr>
                                    <tr>
                                        <td><input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked> 03:00 PM-04:00 PM </td>
                                        <td><font color="green">AVAILABLE</font></td>
                                        
                                    </tr>
                                </tbody>
                                <br>

                            </table>  -->
                         
                </div>
                </div>

               


                 <div class="col-lg-8">
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





                                
<?php if($this->session->flashdata('error')): ?>
<script> alert('Time is already taken'); </script>        
<?php endif;?>
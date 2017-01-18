

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">
                            <i class="fa fa-calendar"></i>  Set an Appointment

                        </h3>
                        <ol class="breadcrumb">

                            <li>
                                <i class="fa fa-picture-o"></i> Select Photo Services</a>
                            </li>
                            
                        </ol>
                        <div class="row">
                    <div class="col-lg-12">



                         <div class="col-lg-3">

                         </div>
                         <div class="col-lg-3">
                         </div>
                          <div class="col-lg-3">
                         </div>

                           <div class="col-lg-3">
                          <div class="form-group input-group">
                                <input type="text" class="form-control" placeholder="Search Photo Services">
                                <span class="input-group-btn"><button class="btn btn-default" type="button"><i class="fa fa-search"></i></button></span>
                            </div>
                            </div>


                            <h4 class="page-header">
                                <i class="fa fa-picture-o"></i>  Photography Services and Price Guide

                            </h4>

                            <div class="col-md-12">
                            
                               <div class="panel panel-red">
  
  
                                      
                                    <?php
                                      

                                     foreach($get_packages as $row) {  ?>
                                    

                                      <div class = 'col-md-4'>

                                        <h4> <?php echo $row->package_name; ?> </4>

                                        <img src="<?php echo base_url() . '/packages_imgs/' . $row->package_img; ?>" class="img-circle" alt="Cinque Terre" width="150" height="150">

                                         <a href = "#"  

                                         data-toggle="modal" 

                                         data-target="#viewPackage" 

                                         id = "<?php echo $row->package_id; ?>"

                                         class="btn btn-info view_det_package">View Details</a> 
                                       
                                        </div>      


                                      <?php } ?>

                              


                               </div>

                            </div>
                    </div>
                                                  
                    <?php $this->load->view('customer/list_packages_bottom'); ?>                    


                    <?php $this->load->view('customer/view_package_modal'); ?>
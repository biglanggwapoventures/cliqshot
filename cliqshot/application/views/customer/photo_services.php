<style>
div.img {
    margin: 33px;
    border: 2px solid #ccc;
    float: left;
    width: 180px;
}

div.img:hover {
    border: 1px solid #777;
}

div.img img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}
</style>



                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">
                            <i class="fa fa-calendar"></i>  Photography Services and Price Guide

                        </h3>


                      
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
                                

                            </h4>

                                


                                  <div class="row text-center">
                            

                                      
                                    <?php
                                      

                                     foreach($get_packages as $row) {  ?>



                                       <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="<?php echo base_url() . '/packages_imgs/' . $row->package_img; ?>" alt="">
                    <div class="caption">
                        <h3><?php echo $row->package_name; ?></h3>
                        
                        <p>


                            <a href="#"  data-toggle="modal" 

                                         data-target="#viewPackage" 

                                         id = "<?php echo $row->package_id; ?>" class="btn btn-default view_det_package">More Info</a>


                        </p>
                    </div>
                </div>
            </div>

 
                                      <?php } ?>


                              


                               </div>

                            </div>
                    </div>

                    
                                                  
                    
                    <?php $this->load->view('customer/view_package_modal'); ?>
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


               
                <h4><b>Photo Service</b>: <?php echo $info['package_name']; ?></h4>
                <hr>
                <p><h5><b>Date Reserved</b>: <?php echo date_create_immutable($info['event_date'])->format('M d, Y'); ?></p></h5>
                <p><h5><b>Time Reserved</b>: <?php echo date_create_immutable($info['time_ordered'])->format('h:i a'); ?></p></h5>
                <hr>
                <p><h5><b>Date Ordered</b>: <?php echo date_create_immutable($info['date_ordered'])->format('F d, Y h:i A'); ?></p></h5>
                
               <hr>
                 <p><h5><b>Amount:</b> P <?php echo number_format($info['package_price'], 2);?></h4>
                 <p><h5 ><b>Partial Payment Required:</b><span class="text-success"> P  <?php echo number_format(($info['package_price'] * 0.3), 2);?></span></h4>
                <hr>



                      <br>
                     
                      


                                         
                      <div class="panel panel-default">
                          <div class="panel-heading">
                              <h4 class="panel-title">Payment Status</h4>
                          </div>
                          <div class="panel-body">
                               <table class="table">
                                   <tbody>
                                        <tr>
                                            <td>Bank Account</td>
                                            <td><?= $info['bank_account']?></td>
                                        </tr>
                                        <tr>
                                            <td>Proof of payment</td>
                                            <td>
                                                <img src="<?= base_url("payment_slips/{$info['payment_slip']}")?>" class="img-thumbnail enlarge" style="height:50px;width:50px;">
                                                <?php if($info['payment_slip_2']):?>
                                                    <img src="<?= base_url("payment_slips/{$info['payment_slip_2']}")?>" class="img-thumbnail enlarge" style="height:50px;width:50px;">
                                                <?php endif;?>
                                                <?php if($info['payment_slip_3']):?>
                                                    <img src="<?= base_url("payment_slips/{$info['payment_slip_3']}")?>" class="img-thumbnail enlarge" style="height:50px;width:50px;">
                                                <?php endif;?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <a class="btn btn-success btn-block" href="<?= base_url("ClerkController/paid_order/{$info['order_id']}") ?>" 
                                                onclick="javascript:return confirm('Are you sure?')">Confirm</a>
                                            </td>
                                        </tr>
                                   </tbody>
                               </table>
                          </div>
                      </div>
              </div>

            </div>
            
                                
                
              

        </div>
        <!-- /.row -->

<!-- Modal -->
<div class="modal fade" id="proof-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="border-bottom:0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Payment Proof</h4>
      </div>
      <div class="modal-body text-center" style="padding:0">
        
      </div>
    </div>
  </div>
</div>






    <script src="<?php echo  base_url('assets/js/jquery-1.11.1.min.js'); ?>"></script>

<script type="text/javascript">
    $('.enlarge').click(function(e){
        var $this = $(this);
        // console.log(target);
        $('#proof-modal .modal-body').html($('<img />', {
            src: $this.attr('src'),
            'class' : 'img-responsive'
        }))
        $('#proof-modal').modal('show');
    })
</script>
<?php require 'header.php'; ?>
 

	<!-- Review-Section-End  -->
	<!-- Compare-Section-Strat  -->
	<section class="compare_area section-padding">
		<div class="container">
			<?php
	
			$prod_query=  mysqli_query($con, "SELECT * FROM product JOIN user ON user.user_id= product.merchant_id WHERE product_id= '$_GET[id]' "); 
			$prod_info = mysqli_fetch_assoc($prod_query);

			?>
			<center>

			<div  id = "prod_image" style="float:left; height: 700px; " >

						<img src= "admin/<?php echo $prod_info['prod_img']; ?>" height = "900" width= "700" />

			 </div>

			<div  id = "prod_det" style = "height: 700px; ">

			 <h2><?php echo $prod_info['prod_name']; ?> </h2>

		 	<p style="font-size: 25px;">Product Details </p>
		 	
		 		<p class= 'text text-info'>Description </p>
		 			<p class= 'text text-danger'><?php echo $prod_info['prod_desc']; ?> </p>
		 		<p class= 'text text-info'>Price </p>
		 			<p class= 'text text-danger'>P<?php echo number_format($prod_info['prod_price'], 2); ?> </p>
		 		<p class= 'text text-info'>Size </p>
		 			<p class= 'text text-danger'><?php echo $prod_info['size']; ?> </p>
		 		<p class= 'text text-info'>Stocks Left </p>
		 			<p class= 'text text-danger'><?php if($prod_info['stocks'] == 0) echo "Out of Stocks!" ; ?> </p>
		 	
		 	<?php if(isset($_GET['flag_out_of_stocks'])) { ?>	

		 		<p class = 'text text-danger'>Your desired order is more than order stock! Please try again another qty.. :)</p>

		 	<?php } ?>	

		 	<form action = "insert_process.php" method = "POST">
		 	<?php if($prod_info['stocks'] != 0) { ?>	
		 	
		 		<p>Qty:	<input type "number" name = "qty_prod" max= <?php echo $prod_info['stocks'];  ?>  value  = 1 /><p>

		 		<input type = "hidden" name= "prod_id" value = "<?php echo $_GET['id']; ?>" />
		 		<input type = "submit" class= 'btn btn-info' name = "add_cart"  value = "Add to Cart" />
		 	
		 	<?php  } ?>

		 	</form>

		 	<p>Merchant: <a href= "merchant_info.php?id=<?php echo $prod_info['merchant_id']; ?>"><?php echo $prod_info['Merchant_Name']; ?></a></p>

			<form class="paypal" action="parallel_payments_testing.php" method="post" id="paypal_form" target="_blank">

							        <input type="hidden" name="cmd" value="_cart" />

							        <input name='upload' value='1' type='hidden' />

							        <input type="hidden" name="no_note" value="1" />

							        <input type="hidden" name="prod_id" value="<?php echo $prod_info['prod_price']; ?>" />
		 							
		 							<input type = "hidden" name= "prod_price" value = "<?php echo $prod_info['prod_price']; ?>" />

							        <input type="hidden" name="lc" value="UK" />

							        <input type="hidden" name="currency_code" value="PHP" />

							        <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest" />

							        <input type="hidden" name="first_name" value="Customer's First Name" />

							        <input type="hidden" name="last_name" value="Customer's Last Name" />

							        <input type="hidden" name="payer_email" value="customer@example.com" />
 							        
							        <input name="submit" value="Submit Payment"  type="image" src="https://www.paypal.com/en_GB/GB/i/btn/btn_xpressCheckout.gif" />

				</form>

			 	</center>

				</div>

			</div>

		</div>
	</section>

<?php require 'footer.php'; ?>



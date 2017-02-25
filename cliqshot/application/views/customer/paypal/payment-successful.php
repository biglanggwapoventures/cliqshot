<?php 

require 'connect_db.php';

session_start();

$trans_id = $_GET['trans_id'];

		$address = NULL;
		$phone =  NULL;
		$order_notes = NULL;
		$user = $_SESSION['user'];
		$tot_price = 0;
		$order_qty = 1;


		mysqli_query($con, "INSERT INTO 
								order_line(order_line_id, username, order_tot_price, payment_type, date_ordered, transact_status, phone_num, ship_date, ship_address, order_notes)

								VALUES('', '$user', '$tot_price', 'paypal', NOW(), 
								'pending', '$phone', NULL, '$address', '$order_notes' ) ") or die(mysqli_error($con));


		$id = mysqli_insert_id($con);

		mysqli_query($con, "INSERT INTO orders VALUES('', '$_GET[prod_id]', '$id', '$order_qty', 'pending') ") or die(mysqli_error($con));


		header("Location: transactions.php");

		exit;


?>


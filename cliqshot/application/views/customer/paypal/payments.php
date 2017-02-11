

<?php 

// Database variables
$host = "localhost"; //database location
$user = ""; //database username
$pass = ""; //database password
$db_name = ""; //database name

// PayPal settings


$item_id = $_POST['prod_id'];
$item_amount = $_POST['prod_price'];


$paypal_email = 'intensity@gmail.com';
$return_url = 'http://localhost/OSX_Ecommerce/payment-successful.php?&prod_id='.$item_id;
$cancel_url = 'http://domain.com/payment-cancelled.html';
$notify_url = 'localhost/payment/payment_notif_sample.php?id=1';

  

// Check if paypal request or response
if (!isset($_POST["txn_id"]) && !isset($_POST["txn_type"])){
    $querystring = '';
 
    // Firstly Append paypal account to querystring
    $querystring .= "?business=".urlencode($paypal_email)."&";
 
    // Append amount& currency (£) to quersytring so it cannot be edited in html
 
    //The item name and amount can be brought in dynamically by querying the $_POST['item_number'] variable. 

    //* Reference: http://stackoverflow.com/questions/10459854/php-issue-in-passing-an-array-to-paypal


    $querystring .= "custom=".urlencode(1)."&";
    $querystring .= "item_name_1=".urlencode('sad')."&";
    $querystring .= "amount_1=".urlencode($item_amount)."&";
    $querystring .= "quantity_1=".urlencode(1)."&";

    $querystring .= "custom=".urlencode(1)."&";
    $querystring .= "item_name_2=".urlencode('sad')."&";
    $querystring .= "amount_2=".urlencode($item_amount)."&"; 
    $querystring .= "quantity_2=".urlencode(1)."&";

    //loop for posted values and append to querystring
    foreach($_POST as $key => $value) {
        $value = urlencode(stripslashes($value));
        $querystring .= "$key=$value&";
    }


 
    // Append paypal return addresses
    $querystring .= "return=".urlencode(stripslashes($return_url))."&";
    $querystring .= "cancel_return=".urlencode(stripslashes($cancel_url))."&";
    $querystring .= "notify_url=".urlencode($notify_url);
    $querystring .= "METHOD=GetExpressCheckoutDetails&TOKEN=";
 
    // Append querystring with custom field
    //$querystring .= "&custom=".USERID;
 
    // Redirect to paypal IPN
    header('location:https://www.sandbox.paypal.com/cgi-bin/webscr'.$querystring);

    exit();

} else {

   // Response from PayPal


}

?>
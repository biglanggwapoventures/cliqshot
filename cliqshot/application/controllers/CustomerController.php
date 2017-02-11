F<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CustomerController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */


	private $user_id;


	public function __construct(){

        parent::__construct();

		$this->load->model('customerModel');

		$this->load->library('session');

		$this->user_id = $this->session->userdata('client_id');

		//* $data['sales_daily_trans'] 		=	$this->inventoryModel->get_sales_daily_trans();

		//* $this->nav_data['ing_requests'] =  $this->inventoryModel->get_ingredient_requests();



		//* $this->session->set_userdata('acct_type', 'admin');
		//* $this->session->set_userdata('username', 'admin');

 
		//* if($this->session->userdata('username') === NULL){

		//* 	redirect(base_url("index.php/vapeLoginController/index"));
		//* }

      }





	public function index()
	{

		$data['get_packages'] = $this->photo_managementModel->get_packages();


		$this->load->view('customer/customer_required_pages/header');
		
		$nav_data['page_name'] 			= "home";

		$this->load->view('customer/customer_required_pages/nav', $nav_data );

		$this->load->view('customer/home', $data);
		
		$this->load->view('customer/customer_required_pages/footer');
	
	}

	public function photo_services()
	{

		$data['get_packages'] = $this->photo_managementModel->get_packages();


		$this->load->view('customer/customer_required_pages/header');
		
		$nav_data['page_name'] 			= "package_lists";

		$this->load->view('customer/customer_required_pages/nav', $nav_data );

		$this->load->view('customer/photo_services', $data);
		
		$this->load->view('customer/customer_required_pages/footer');
	
	}

	public function view_order_receipt()
	{
		$package_id =  $this->input->post('package_id');
 
		$orders_data['package_id'] 			= $package_id ;
		$orders_data['date_ordered'] 		=  date("Y-m-d");
		$orders_data['time_ordered'] 		=  $this->input->post('time_ordered');
		$orders_data['event_date'] 			=  $this->input->post('event_date');
		$orders_data['package_info'] 		=  $this->customerModel->get_package_info($package_id);


		$this->load->view('customer/customer_required_pages/header');
		
		$nav_data['page_name'] 			= "package_lists";

		$this->load->view('customer/customer_required_pages/nav', $nav_data );

		$this->load->view('customer/view_order_receipt', $orders_data);

		$this->load->view('customer/customer_required_pages/footer');

		//* $data['get_packages'] = $this->photographyModel->get_packages();
 		

	
	}

	public function view_order_receipt_print()
	{

		$order_id 							=  $this->input->get('order_id');
 		
 		$order_info 					= $this->customerModel->get_order_info($order_id);
 
		$orders_data['order_id'] 			=  $order_id;
		
		$orders_data['date_ordered'] 		=  $order_info['date_ordered'];

		$orders_data['time_ordered'] 		=  $order_info['time_ordered'];

		$orders_data['event_date'] 			=  $order_info['event_date'];

		$orders_data['package_info'] 		=  $this->customerModel->get_package_info($order_info['package_id']);

		$orders_data['customer_info'] 		=  $this->customerModel->get_acct_info($order_info['user_id']);

		$this->load->view('fpdf/fpdf');
		$this->load->view('customer/view_order_receipt_print', $orders_data);

	}
	public function insert_orders()
	{
 
		$orders_data['order_id']			=  '';
		$orders_data['package_id'] 			= $this->input->post('package_id');
		$orders_data['user_id'] 			= $this->user_id;
		$orders_data['photographer_id'] 	= '';
		$orders_data['date_ordered'] 		=  date("Y-m-d");
		$orders_data['time_ordered'] 		=  $this->input->post("time_ordered");
		$orders_data['event_date'] 			=  $this->input->post("event_date");
		$orders_data['order_status'] 		=  "pending";

		 $this->customerModel->insert_orders($orders_data);

		//* $data['get_packages'] = $this->photographyModel->get_packages();
 		
 		redirect(base_url("index.php/CustomerController/my_appointments"));

	
	}

	public function my_appointments(){


		$user_id =  $this->user_id;

 		$data['my_orders'] = $this->customerModel->get_my_orders($user_id);
 
		$this->load->view('customer/customer_required_pages/header');

		$nav_data['page_name'] 			= "my_appointments";

		$this->load->view('customer/customer_required_pages/nav', $nav_data );

		$this->load->view('customer/my_appointments', $data);

		$this->load->view('customer/customer_required_pages/footer');

	
	}

	public function paypal_payment(){
				

		// Database variables
		$host = "localhost"; //database location
		$user = ""; //database username
		$pass = ""; //database password
		$db_name = ""; //database name

		// PayPal settings


		$item_id 	 = $_POST['prod_id'];
		$item_amount = $_POST['prod_price'];


		$paypal_email 	= 'intensity67@gmail.com';
		$return_url 	= 'http://localhost/OSX_Ecommerce/payment-successful.php?&prod_id='.$item_id;
		$cancel_url 	= 'http://domain.com/payment-cancelled.html';
		$notify_url 	= 'localhost/payment/payment_notif_sample.php?id=1';

		  

		// Check if paypal request or response
		if (!isset($_POST["txn_id"]) && !isset($_POST["txn_type"])){

		    $querystring = '';

		    // Firstly Append paypal account to querystring
		    
		    $querystring .= "?business=".urlencode($paypal_email)."&";
		 
		    // Append amount& currency (£) to quersytring so it cannot be edited in html
		 
		    // The item name and amount can be brought in dynamically by querying the $_POST['item_number'] variable. 

		    //* Reference: http://stackoverflow.com/questions/10459854/php-issue-in-passing-an-array-to-paypal


		    // $querystring .= "custom=".urlencode(1)."&";
		    // $querystring .= "item_name_1=".urlencode('sad')."&";
		    // $querystring .= "amount_1=".urlencode($item_amount)."&";
		    // $querystring .= "quantity_1=".urlencode(1)."&";

		    // $querystring .= "custom=".urlencode(1)."&";
		    // $querystring .= "item_name_2=".urlencode('sad')."&";
		    // $querystring .= "amount_2=".urlencode($item_amount)."&"; 
		    // $querystring .= "quantity_2=".urlencode(1)."&";

		    //loop for posted values and append to querystring
		    // foreach($_POST as $key => $value) {
		    //     $value = urlencode(stripslashes($value));
		    //     $querystring .= "$key=$value&";
		    // }

		    

		 
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

	}

	public function get_package_info_ajax()
	{

		//* $data['get_packages'] = $this->photographyModel->get_packages();

		$package_id		= $this->input->post('package_id');

 		$order_form_data['package_info'] 	= $this->customerModel->get_package_info($package_id);

		$this->load->view('customer/order_form', $order_form_data);
	}

	public function payment_information()
	{

		$package_id =  $this->input->post('package_id');
 
		$orders_data['package_id'] 			= $package_id ;
		$orders_data['date_ordered'] 		=  date("Y-m-d");
		$orders_data['time_ordered'] 		=  $this->input->post('time_ordered');
		$orders_data['event_date'] 			=  $this->input->post('event_date');
		$orders_data['package_info'] 		=  $this->customerModel->get_package_info($package_id);


		$this->load->view('customer/customer_required_pages/header');
		
		$nav_data['page_name'] 			= "package_lists";

		$this->load->view('customer/customer_required_pages/nav', $nav_data );

		$this->load->view('customer/billing_order', $orders_data);

		$this->load->view('customer/customer_required_pages/footer');

		//* $data['get_packages'] = $this->photographyModel->get_packages();
	}


		public function cash_billing()
	{

		$package_id =  $this->input->post('package_id');
 
		$orders_data['package_id'] 			= $package_id ;
		$orders_data['date_ordered'] 		=  date("Y-m-d");
		$orders_data['time_ordered'] 		=  $this->input->post('time_ordered');
		$orders_data['event_date'] 			=  $this->input->post('event_date');
		$orders_data['package_info'] 		=  $this->customerModel->get_package_info($package_id);


		$this->load->view('customer/customer_required_pages/header');
		
		$nav_data['page_name'] 			= "package_lists";

		$this->load->view('customer/customer_required_pages/nav', $nav_data );

		$this->load->view('customer/cash_billing', $orders_data);

		$this->load->view('customer/customer_required_pages/footer');

		//* $data['get_packages'] = $this->photographyModel->get_packages();
	}


	public function orders_history()
	{

 
		$data['uploaded_album_order'] 		= $this->customerModel->get_orders_history($this->user_id);

		$nav_data['page_name'] 			= "orders_history";


		$this->load->view('customer/customer_required_pages/header');

		$this->load->view('customer/customer_required_pages/nav', $nav_data);

		$this->load->view('customer/orders_history', $data);
		
		$this->load->view('customer/customer_required_pages/footer');
	
	}


	public function view_album_gallery($order_id)
	{
 
		$nav_data['page_name'] 		= "orders_history";

		$data['album_details'] 		= $this->customerModel->get_album_details($order_id);

		$data['photos'] 			= $this->customerModel->get_photo_albums($data['album_details'][0]->album_id);
		
		$this->load->view('customer/customer_required_pages/header');

		$this->load->view('customer/customer_required_pages/nav', $nav_data);

		$this->load->view('customer/view_album_gallery', $data);
		
		$this->load->view('photographer/photographer_required_pages/footer');
	
	}

	public function update_customer($client_id)
	{
		//GET REQUIRED DATA FROM DB
		$data['data_customer'] = $this->customerModel->client_id($client_id)->row();

		$this->load->view('customer/customer_required_pages/header');

		$nav_data['page_name'] 			= "home";

		$this->load->view('customer/customer_required_pages/nav' , $nav_data);

        $this->load->view('customer/customer-update', $data);

        $this->load->view('customer/customer_required_pages/footer');
	}
	public function update_customer_process()
	{
    	$this->form_validation->set_rules('username','USERNAME','required|trim|min_length[5]|max_length[20]');
    	$this->form_validation->set_rules('fullname','FULL NAME','required');
    	$this->form_validation->set_rules('address','ADDRESS','required');
    	$this->form_validation->set_rules('birthdate','BIRTH DATE','required');
    	$this->form_validation->set_rules('email','EMAIL','required|trim|valid_email');
    	$this->form_validation->set_rules('password','PASSWORD','required|min_length[5]|max_length[20]');
    	$this->form_validation->set_rules('passconf','CONFIRM PASSWORD','required|matches[password]');

		if($this->form_validation->run() == FALSE)
		{

			$this->load->view('customer/customer-update');
		}
		else
		{
			$data['client_username'] 	= $this->input->post('username');
			$data['client_password'] 	= md5($this->input->post('password'));
			$data['client_fullname'] 	= $this->input->post('fullname');
			$data['client_address'] 	= $this->input->post('address');
			$data['client_birthdate'] 	= date("Y-m-d", strtotime($this->input->post('birthdate')));
			$data['client_email'] 	= $this->input->post('email');
			$client_id 	 			= $this->input->post('client_id');

        	$this->customerModel->update_customer($client_id, $data);
			redirect(site_url('CustomerController'));
		}
	}


}

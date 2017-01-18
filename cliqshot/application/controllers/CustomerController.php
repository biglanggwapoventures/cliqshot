<?php
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


	public function __construct(){

        parent::__construct();

		$this->load->model('customerModel');

		$this->load->library('session');
		
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
		
		$nav_data['page_name'] 			= "package_lists";

		$this->load->view('customer/customer_required_pages/nav', $nav_data );

		$this->load->view('customer/list_packages', $data);
		
		$this->load->view('customer/customer_required_pages/footer');
	
	}

	public function insert_orders()
	{
 
		$orders_data['order_id']			=  '';
		$orders_data['package_id'] 			= $this->input->post('package_id');
		$orders_data['user_id'] 			= 1; //* $this->session->userdata('user_id')
		$orders_data['photographer_id'] 	= '';
		$orders_data['date_ordered'] 		= date("Y-m-d");
		$orders_data['time_ordered'] 		=  $this->input->post('time_ordered');
		$orders_data['event_date'] 			=  $this->input->post('date_event');
		$orders_data['order_status'] 		=  "pending";

		 $this->customerModel->insert_orders($orders_data);

		//* $data['get_packages'] = $this->photographyModel->get_packages();
 		
 		redirect(base_url("index.php/CustomerController/my_appointments"));

	
	}

		public function my_appointments(){


		$user_id = 1;//session id

		$data['my_orders'] = $this->customerModel->get_my_orders($user_id);


		$this->load->view('customer/customer_required_pages/header');

		$nav_data['page_name'] 			= "my_appointments";

		$this->load->view('customer/customer_required_pages/nav', $nav_data );

		$this->load->view('customer/my_appointments', $data);
		
		$this->load->view('customer/customer_required_pages/footer');

	
	}



	public function get_package_info_ajax()
	{

		//* $data['get_packages'] = $this->photographyModel->get_packages();

		$package_id		= $this->input->post('package_id');

 		$order_form_data['package_info'] 	= $this->customerModel->get_package_info($package_id);

		$this->load->view('customer/order_form', $order_form_data);
	}

}

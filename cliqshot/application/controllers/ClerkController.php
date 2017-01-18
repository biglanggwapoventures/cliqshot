<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ClerkController extends CI_Controller {

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

		$this->load->model('ClerkModel');

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

		public function pending_orders(){


		$data['my_orders'] = $this->ClerkModel->get_pending_orders();


		$this->load->view('clerk/clerk_required_pages/header');

		$nav_data['page_name'] 			= "pending_orders";

		$this->load->view('clerk/clerk_required_pages/nav', $nav_data );

		$this->load->view('clerk/pending_orders', $data);
		
		$this->load->view('clerk/clerk_required_pages/footer');

	
	}

		public function approved_orders(){


		$data['my_orders'] = $this->ClerkModel->get_pending_orders();


		$this->load->view('clerk/clerk_required_pages/header');

		$nav_data['page_name'] 			= "approved_orders";

		$this->load->view('clerk/clerk_required_pages/nav', $nav_data );

		$this->load->view('clerk/approved_orders', $data);
		
		$this->load->view('clerk/clerk_required_pages/footer');

	
	}


		public function approve_order($order_id){


				$this->ClerkModel->approve_order($order_id);	


				redirect('ClerkController/pending_orders');
		}



}

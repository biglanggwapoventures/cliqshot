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


		$this->load->view('clerk/clerk_required_pages/header');
		
		$nav_data['page_name'] 			= "package_lists";

		$this->load->view('clerk/clerk_required_pages/nav', $nav_data );

		$this->load->view('customer/list_packages', $data);
		
		$this->load->view('clerk/clerk_required_pages/footer');
	
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


		$data['my_orders'] = $this->ClerkModel->get_approved_orders();


		$this->load->view('clerk/clerk_required_pages/header');

		$nav_data['page_name'] 			= "approved_orders";

		$this->load->view('clerk/clerk_required_pages/nav', $nav_data );

		$this->load->view('clerk/approved_orders', $data);
		
		$this->load->view('clerk/clerk_required_pages/footer');

	
	}


		public function approve_order($order_id){


				$this->ClerkModel->approve_order($order_id);	


				redirect('ClerkController/approved_orders');
		}


		public function select_photographer($order_id){


		$data['photographers']  = $this->ClerkModel->get_photographers();
		$data['order_info'] 	= $this->ClerkModel->get_order_info($order_id);
 

		$this->load->view('clerk/clerk_required_pages/header');

		$nav_data['page_name'] 			= "select_photographer";

		$this->load->view('clerk/clerk_required_pages/nav', $nav_data );

		$this->load->view('clerk/select_photographer', $data);
		
		$this->load->view('clerk/clerk_required_pages/footer');

	
	}


		public function assign_photographer(){

				$order_id = $this->input->get('order_id');
				$photographer_id = $this->input->get('photographer_id');
				
				$this->ClerkModel->assign_photographer($order_id, $photographer_id);	


				redirect('ClerkController/upcoming_orders');
		}

		public function upcoming_orders(){
			 
				$nav_data['page_name'] 			= "upcoming_orders";

				$this->load->view('clerk/clerk_required_pages/header');

				$this->load->view('clerk/clerk_required_pages/nav', $nav_data );

				$data['my_orders'] 	= $this->ClerkModel->get_upcoming_orders();

				$this->load->view('clerk/upcoming_orders', $data);
 
				$this->load->view('clerk/clerk_required_pages/footer');
		}

		public function assigned_orders(){


		$data['my_orders'] = $this->ClerkModel->get_assigned_orders();


		$this->load->view('clerk/clerk_required_pages/header');

		$nav_data['page_name'] 			= "assigned_orders";

		$this->load->view('clerk/clerk_required_pages/nav', $nav_data );

		$this->load->view('clerk/assigned_orders', $data);
		
		$this->load->view('clerk/clerk_required_pages/footer');

	
	}

	public function pending_order_album()
	{

 
		$data['pending_order_album'] 	= $this->photo_managementModel->get_pending_album();

		$nav_data['page_name'] 			= "pending_order_album";


		$this->load->view('clerk/clerk_required_pages/header');

 
		$this->load->view('clerk/clerk_required_pages/nav', $nav_data );
 

		$this->load->view('photographer/pending_order_album', $data);
		
		$this->load->view('clerk/clerk_required_pages/footer');

	}

	public function orders_history()
	{

 
		$data['uploaded_album_order'] 		= $this->photo_managementModel->get_orders_history();

		$nav_data['page_name'] 			= "orders_history";


		$this->load->view('clerk/clerk_required_pages/header');

 
		$this->load->view('clerk/clerk_required_pages/nav', $nav_data );

		$this->load->view('photographer/orders_history', $data);
		
		$this->load->view('clerk/clerk_required_pages/footer');	
	}
}

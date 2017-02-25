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


	private $user_id;


	public function __construct(){

        parent::__construct();

		$this->load->model('ClerkModel');
		$this->load->model('chartsModel');

		$this->load->library('session');
				$this->clerk_id = $this->session->userdata('clerk_id');

				$data['count_pending']  = $this->ClerkModel->pending_count()->result();

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

		$this->load->view('clerk/clerk_required_pages/header');
		


		$nav_data['page_name'] 			= "home";

		$this->load->view('clerk/clerk_required_pages/nav', $nav_data );

		$this->load->view('clerk/home');
		
		$this->load->view('clerk/clerk_required_pages/footer');
	
	}

	public function list_packages(){


		$data['packages'] = $this->ClerkModel->get_packages();

		$this->load->view('clerk/clerk_required_pages/header');

		$nav_data['page_name'] 			= "list_packages";

		$this->load->view('clerk/clerk_required_pages/nav', $nav_data );

		$this->load->view('clerk/list_packages', $data);
		
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


		$data['my_orders'] = $this->ClerkModel->get_approved_orders_1();


		$this->load->view('clerk/clerk_required_pages/header');

		$nav_data['page_name'] 			= "approved_orders";

		$this->load->view('clerk/clerk_required_pages/nav', $nav_data );

		$this->load->view('clerk/approved_orders', $data);
		
		$this->load->view('clerk/clerk_required_pages/footer');

	
	}


	public function payment_status(){


		$data['my_orders'] = $this->ClerkModel->get_approved_orders();


		$this->load->view('clerk/clerk_required_pages/header');

		$nav_data['page_name'] 			= "payment_status";

		$this->load->view('clerk/clerk_required_pages/nav', $nav_data );

		$this->load->view('clerk/payment_status', $data);
		
		$this->load->view('clerk/clerk_required_pages/footer');

	
	}


	public function deposit_status(){


		$data['my_orders'] = $this->ClerkModel->get_deposit_slips();


		$this->load->view('clerk/clerk_required_pages/header');

		$nav_data['page_name'] 			= "deposit_status";

		$this->load->view('clerk/clerk_required_pages/nav', $nav_data );

		$this->load->view('clerk/deposit_status', $data);
		
		$this->load->view('clerk/clerk_required_pages/footer');

	
	}


		public function approve_order($order_id){


				$this->ClerkModel->approve_order($order_id);

				$order_info = $this->ClerkModel->get_order_info_for_email($order_id);

 				$this->emailUploadNotification($order_info);

				redirect('ClerkController/payment_status');

		}


		public function emailUploadNotification($order_info){
 

            $config['protocol']    = 'smtp';

			$config['smtp_host'] = 'ssl://smtp.gmail.com'; 

            $config['smtp_port']    = '465';
			
			$config['newline'] = "\r\n";


            $config['smtp_user']    = 'cliqshot.capstone@gmail.com';

            $config['smtp_pass']    = 'cliqshot123';

            $config['charset']    = 'utf-8';
 

			$config['mailtype'] = 'html';

            $config['validation'] = TRUE; // bool whether to validate email or not      

			$this->load->library('email', $config);

			$this->email->initialize($config);  

			$message = "Your Appointment is Confirmed. Here are the details: \n
			Package Name: Portraits \n
			Appointment/Booking Date: March 20, 2017"; 

            $this->email->from('cliqshot.capstone@gmail.com', 'Sample Email');

            $this->email->to($order_info['client_email']); 


            $this->email->subject('Order Approved');

            $this->email->message($message);  

            $this->email->send();

            echo $this->email->print_debugger();


	}

		public function paid_order($order_id){


				$this->ClerkModel->paid_order($order_id);	

 				redirect('ClerkController/approved_orders');

		}


		public function view_details($order_id)

		{


		$order_id 							=  $this->input->get('order_id');
 		
 		$order_info 					= $this->ClerkModel->get_order_info($order_id);
		
		$orders_data['date_ordered'] 		=  $order_info['date_ordered'];

		$orders_data['time_ordered'] 		=  $order_info['time_ordered'];

		$orders_data['event_date'] 			=  $order_info['event_date'];

		$orders_data['package_info'] 		=  $this->ClerkModel->get_package_info($order_info['package_id']);

		$orders_data['customer_info'] 		=  $this->ClerkModel->get_acct_info($order_info['user_id']);


		
		$this->load->view('clerk/clerk_required_pages/header');

		$nav_data['page_name'] 			= "select_photographer";

		$this->load->view('clerk/clerk_required_pages/nav', $nav_data);

		$this->load->view('clerk/view_details', $orders_data);

		$this->load->view('clerk/clerk_required_pages/footer');

		



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

 
		$data['pending_order_album'] 	= $this->ClerkModel->get_pending_orders();

		$nav_data['page_name'] 			= "pending_order_album";


		$this->load->view('clerk/clerk_required_pages/header');

 
		$this->load->view('clerk/clerk_required_pages/nav', $nav_data );
 

		$this->load->view('clerk/pending_order_album', $data);
		
		$this->load->view('clerk/clerk_required_pages/footer');

	}

	public function orders_history()
	{

 
		$data['uploaded_album_order'] 		= $this->ClerkModel->get_orders_history();

		$nav_data['page_name'] 			= "orders_history";


		$this->load->view('clerk/clerk_required_pages/header');
 
		$this->load->view('clerk/clerk_required_pages/nav', $nav_data );

		$this->load->view('clerk/orders_history', $data);
		
		$this->load->view('clerk/clerk_required_pages/footer');	
	}

	public function view_fpdf()
	{

 
		$data['uploaded_album_order'] 		= $this->photo_managementModel->get_orders_history();

		$nav_data['page_name'] 			= "orders_history";


		$this->load->view('fpdf181/fpdf');
 
		$this->load->view('customer/view_order_receipt_pdf', $data);
		
 	}
	public function view_album_gallery()
	{

 
		$data['uploaded_album_order'] 	= $this->photo_managementModel->get_orders_history();
		$data['uploaded_album_order'] 	= $this->photo_managementModel->get_orders_history();

		$nav_data['page_name'] 			= "view_album_gallery";


//		$this->load->view('photographer/photographer_required_pages/header_view_album_gallery');

//		$this->load->view('photographer/photographer_required_pages/nav', $nav_data);

		$this->load->view('clerk/view_album_gallery', $data);
		
//*		$this->load->view('photographer/photographer_required_pages/footer');
	
	}
	public function reports()
	{

 
		// $data['uploaded_album_order'] 	= $this->photo_managementModel->get_orders_history();

 		$nav_data['page_name'] 			= "reports";


 		$this->load->view('clerk/clerk_required_pages/header');

 		$this->load->view('clerk/clerk_required_pages/nav', $nav_data);

		$data['monthlyReports'] = $this->chartsModel->get_monthly_reports();
		$data['packageReports'] = $this->chartsModel->get_report_per_package();
		$data['photographerReports'] = $this->chartsModel->get_report_per_photographer();

//		print_r()

		$this->load->view('clerk/reports', $data);
		
 		$this->load->view('clerk/clerk_required_pages/footer');
	
	}

	public function calendar()
	{



 		$data['calendar_orders'] = $this->ClerkModel->get_all_my_approved_orders();

		$this->load->view('clerk/clerk_required_pages/header');

		$nav_data['page_name'] 			= "calendar";

		$this->load->view('clerk/clerk_required_pages/nav', $nav_data );

		$this->load->view('clerk/calendar_view', $data);



	}




	public function reschedule_appointment($order_id)
	{

		$this->ClerkModel->reschedule_appointment($order_id);

		redirect('ClerkController/payment_status');

	}

}

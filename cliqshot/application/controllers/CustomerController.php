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



		$this->load->view('customer/customer_required_pages/header');
		
		$nav_data['page_name'] 			= "home";

		$this->load->view('customer/customer_required_pages/nav', $nav_data );

		$this->load->view('customer/home');
		
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

	public function appointment_schedule()
	{	
		$orders_data['error'] = false;
		$package_id =  $this->input->post('package_id');
 
		$orders_data['package_id'] 			= $package_id ;
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
		$orders_data['payment_status'] 		=  "unpaid";


		 $this->customerModel->insert_orders($orders_data);

		//* $data['get_packages'] = $this->photographyModel->get_packages();

		  $this->session->set_flashdata('approve', 'You have successfully appoint a photo package.');
 		
 		redirect(base_url("CustomerController/my_appointments"));

	
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




	public function payment_process()
	{


		$order_id 							=  $this->input->get('order_id');
 		
 		$order_info 						= $this->customerModel->get_order_info($order_id);
		
		$orders_data['date_ordered'] 		=  $order_info['date_ordered'];

		$orders_data['time_ordered'] 		=  $order_info['time_ordered'];

		$orders_data['event_date'] 			=  $order_info['event_date'];

		$orders_data['package_info'] 		=  $this->customerModel->get_package_info($order_info['package_id']);

		$orders_data['customer_info'] 		=  $this->customerModel->get_acct_info($order_info['user_id']);


		
		$this->load->view('customer/customer_required_pages/header');
		
		$nav_data['page_name'] 			= "my_appointments";

		$this->load->view('customer/customer_required_pages/nav', $nav_data );

		$this->load->view('customer/paymentprocess', $orders_data);

		$this->load->view('customer/customer_required_pages/footer');

		//* $data['get_packages'] = $this->photographyModel->get_packages();

	}



	 public function payment_slip($order_id)
	{

			$this->output->set_content_type('json');

			$config['upload_path'] = './payment_slips/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size'] = '0'; // Unlimited
			$config['max_width']  = '0'; // Unlimited
			$config['max_height']  = '0'; // Unlimited

			$this->load->library('upload', $config);

			$data = [
				'payment_slip' => null,
				'payment_slip_2' => null,
				'payment_slip_3' => null,
			];

			if(!trim($this->input->post('bank_account'))){
				$this->output->set_output(json_encode([
					'result' => false,
					'messages' => 'Select a bank account'
				]));
				return;
			}


			// require uploading of first photo
			if(empty($_FILES['proof1']['name'])){
				$this->output->set_output(json_encode([
					'result' => false,
					'messages' => 'You have not uploaded any deposit slip photo!'
				]));
				return;
			}else{
				if (!$this->upload->do_upload('proof1')) {
					$this->output->set_output(json_encode([
						'result' => false,
						'messages' =>$this->upload->display_errors('', '')
					]));
					return;
				}

				// die($this->upload->data('filename'));
				$data['payment_slip'] = $this->upload->data('file_name');
			}


			// check existence of 2nd photo
			if(!empty($_FILES['proof2']['name'])){
				if (!$this->upload->do_upload('proof2')) {
					$this->output->set_output(json_encode([
						'result' => false,
						'messages' => $this->upload->display_errors('', '')
					]));
					return;
				}
				$data['payment_slip_2'] = $this->upload->data('file_name');
			}
			
			// check existence of 3rd photo
			if(!empty($_FILES['proof3']['name'])){
				if (!$this->upload->do_upload('proof3')) {
					$this->output->set_output(json_encode([
						'result' => false,
						'messages' =>$this->upload->display_errors('', '')
					]));
					return;
				}
				$data['payment_slip_3'] = $this->upload->data('file_name');
			}

			$data['bank_account'] = $this->input->post('bank_account');
 			$this->customerModel->get_payment_slip($data, $order_id);
			

			 $this->output->set_output(json_encode([
				'result' => true,
				'redirect' => site_url('CustomerController/my_appointments')
			]));
			 

 			// //$this->session->set_flashdata('success',true);
 			// $this->session->set_flashdata('uploaded', 'You have successfully uploaded your deposit slip proof. Please wait for 24 hours
 			// 	until the clerk will approve your appointment');
 			// redirect();

 		 

		}










	public function my_calendar(){


		$user_id =  $this->user_id;

 		$data['calendar_orders'] = $this->customerModel->get_all_my_approved_orders($user_id);

		$this->load->view('customer/customer_required_pages/header');

		$nav_data['page_name'] 			= "my_calendar";

		$this->load->view('customer/customer_required_pages/nav', $nav_data );

		$this->load->view('customer/my_calendar', $data);


	
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

		$result = $this->customerModel->checkDateAvailability($this->input->post('event_date'),$this->input->post('time_ordered'));
 	
		if($result == 'exist'){

			$orders_data['error'] = true;
			$package_id =  $this->input->post('package_id');
	 
			$orders_data['package_id'] 			= $package_id ;
			$orders_data['package_info'] 		=  $this->customerModel->get_package_info($package_id);


			$this->load->view('customer/customer_required_pages/header');
			
			$nav_data['page_name'] 			= "package_lists";

			$this->load->view('customer/customer_required_pages/nav', $nav_data );

			$this->load->view('customer/view_order_receipt', $orders_data);

			$this->load->view('customer/customer_required_pages/footer');

		// * $data['get_packages'] = $this->photographyModel->get_packages();

		} else if($result == 'okay'){

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

			

		}		
	}

		public function rescheduleAppointment(){

			echo "<pre>";
			print_r($this->input->post());

			$date = $this->input->post('event_date');
			$time = $this->input->post('time_ordered');
			$appointment = $this->input->post('appointment_id');
			
			$result = $this->customerModel->checkOrdersForReschedule($date,$time);

			if($result == true){

				$this->session->set_flashdata('error',true);
				redirect('CustomerController/reschedule_appointment/'.$appointment);
				

			}else{
				$this->customerModel->updateAppointment($time,$date,$appointment);
				redirect('CustomerController/my_appointments');

			}

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

	public function compressor(){

		ob_start('ob_gzhandler');

		ob_flush();
		
	}


	   public function delete_order_flag($order_id)
    {

           	$data['customerModel'] =$this->customerModel->delete_order_flag($order_id);

            redirect('CustomerController/my_appointments');
    }




    public function reschedule_appointment($order_id)
	{
		//GET REQUIRED DATA FROM DB
		$data['resched'] = $this->customerModel->reschedule_appointment($order_id)->row();

		$this->load->view('customer/customer_required_pages/header');

		$nav_data['page_name'] 			= "home";

		$this->load->view('customer/customer_required_pages/nav' , $nav_data);

        $this->load->view('customer/reschedule_appointment', $data);

        $this->load->view('customer/customer_required_pages/footer');
	}






		
		}








	





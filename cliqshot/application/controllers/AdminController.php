<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		

		$this->load->model('AdminModel');
		$this->load->model('AdminModel');
		$this->load->model('chartsModel');
	}

	public function index()
	{
		$data['count_admin']  = $this->AdminModel->admin_count()->result();
		$data['count_photographer'] = $this->AdminModel->photographer_count()->result();
		$data['count_clerk'] = $this->AdminModel->clerk_count()->result();
		$data['count_customer'] = $this->AdminModel->customer_count()->result();
		$data['count_services'] = $this->AdminModel->services_count()->result();


		$data['monthlyReports'] = $this->chartsModel->get_monthly_reports();
		$data['packageReports'] = $this->chartsModel->get_report_per_package();
		$data['photographerReports'] = $this->chartsModel->get_report_per_photographer();



		$nav_data['page_name'] 			= "home";

		$this->load->view('admin/admin_required_pages/nav', $nav_data );

	

		$this->load->view('admin/Va_dashboard', $data);
		
		
	




		
	}




	/*==================== MODULES ADMIN ====================*/
	//CREATE
	public function create_admin()
	{
		//GET REQUIRED DATA FROM DB
		$data['data_admin']		= $this->AdminModel->tb_admin()->result();
		$data['data_photographer']		= $this->AdminModel->tb_photographer()->result();
		$data['data_clerk']		= $this->AdminModel->tb_clerk()->result();
		$data['data_customer']	= $this->AdminModel->tb_customer()->result();

		
		$nav_data['page_name'] 			= "users";

		$this->load->view('admin/admin_required_pages/nav', $nav_data );

		$this->load->view('admin/Va_admin-create', $data);
	}
	public function create_admin_process()
	{
    	$this->form_validation->set_rules('username','USERNAME','required|trim|min_length[5]|max_length[20]|is_unique[admin.admin_user]',
					    		array(
					                'is_unique' => 'This %s already exists.'
					        	));
    	$this->form_validation->set_rules('password','PASSWORD','required|min_length[5]|max_length[20]');
    	$this->form_validation->set_rules('passconf','CONFIRM PASSWORD','required|matches[password]');

		if($this->form_validation->run() == FALSE)
		{

			$nav_data['page_name'] 			= "users";

		$this->load->view('admin/admin_required_pages/nav', $nav_data );
			$this->load->view('admin/Va_admin-create');
		}
		else
		{
			$data['admin_user'] = str_replace(' ', '', $this->input->post('username'));
			$data['admin_pass'] = md5($this->input->post('password'));
			$this->AdminModel->create_admin($data);
			redirect(site_url('AdminController/read_admin'));
		}
	}


    //READ
	public function read_admin()
	{
		$data['data_admin'] = $this->AdminModel->tb_admin()->result();

		$nav_data['page_name'] 			= "users";

		$this->load->view('admin/admin_required_pages/nav', $nav_data );

		
        $this->load->view('admin/Va_admin-read', $data);
	}


    //UPDATE
	public function update_admin($admin_id)
	{
		//GET REQUIRED DATA FROM DB
		$data['data_admin'] = $this->AdminModel->admin_id($admin_id)->row();

		$nav_data['page_name'] 			= "users";

		$this->load->view('admin/admin_required_pages/nav', $nav_data );
		
        $this->load->view('admin/Va_admin-update', $data);
	}
	public function update_admin_process()
	{
    	$this->form_validation->set_rules('username','USERNAME','required|min_length[5]|max_length[20]');
    	$this->form_validation->set_rules('password','PASSWORD','required|min_length[5]|max_length[20]');
    	$this->form_validation->set_rules('passconf','CONFIRM PASSWORD','required|matches[password]');

		if($this->form_validation->run() == FALSE)
		{

			$nav_data['page_name'] 			= "users";

		$this->load->view('admin/admin_required_pages/nav', $nav_data );
			$this->load->view('admin/Va_admin-create');
		}
		else
		{
			$data['admin_user'] = str_replace(' ', '', $this->input->post('username'));
			$data['admin_pass'] = md5($this->input->post('password'));
			$admin_id 	 		= $this->input->post('admin_id');
        	$this->AdminModel->update_admin($admin_id, $data);
			redirect(site_url('AdminController/read_admin'));
		}
	}


    //DELETE
	public function delete_admin($admin_id)
	{
        $this->AdminModel->delete_admin($admin_id);
		redirect(site_url('AdminController/read_admin'));
	}


	/*==================== MODULES customer ====================*/
	//CREATE
	public function create_customer
	()
	{
		//GET REQUIRED DATA FROM DB
		$data['data_admin']		= $this->AdminModel->tb_admin()->result();
		$data['data_photographer']	= $this->AdminModel->tb_photographer()->result();
		$data['data_clerk']	= $this->AdminModel->tb_clerk()->result();
		$data['data_customer']	= $this->AdminModel->tb_customer()->result();

		$nav_data['page_name'] 			= "users";

		$this->load->view('admin/admin_required_pages/nav', $nav_data );
		

		$this->load->view('admin/Va_customer-create', $data);
	}
	public function create_customer_process()
	{
    	$this->form_validation->set_rules('username','USERNAME','required|trim|min_length[5]|max_length[20]|is_unique[customer.client_username]',
					    		array(
					                'is_unique' => 'This %s already exists.'
					        	));
    	$this->form_validation->set_rules('fullname','CUSTOMER NAME','required');
    	$this->form_validation->set_rules('address','ADDRESS','required');
    	$this->form_validation->set_rules('birthdate','BIRTH DATE','required');
    	$this->form_validation->set_rules('email','EMAIL','required|trim|valid_email|is_unique[customer.client_email]',
					    		array(
					    			'required' => 'Not valid EMAIL address, must be username@domain.com',
					                'is_unique' => 'This %s already exists.'
					        	));
    	$this->form_validation->set_rules('password','PASSWORD','required|min_length[5]|max_length[20]');
    	$this->form_validation->set_rules('passconf','CONFIRM PASSWORD','required|matches[password]');

		if($this->form_validation->run() == FALSE)
		{
			$nav_data['page_name'] 			= "users";

			$this->load->view('admin/admin_required_pages/nav', $nav_data );
			$this->load->view('admin/Va_customer-create');
		}
		else
		{
			$data['client_username'] 	= $this->input->post('username');
			$data['client_password'] 	= md5($this->input->post('password'));
			$data['client_fullname'] 	= $this->input->post('fullname');
			$data['client_address'] 	= $this->input->post('address');
			$data['client_birthdate'] 	= date("Y-m-d", strtotime($this->input->post('birthdate')));
			$data['client_email'] 	= $this->input->post('email');
			$data['client_contact'] 	= $this->input->post('contact');
			$this->AdminModel->create_customer
			($data);
			redirect(site_url('AdminController/read_customer'));
		}
	}


    //READ
	public function read_customer()
	{
		$data['data_customer'] = $this->AdminModel->tb_customer()->result();

		$nav_data['page_name'] 			= "users";

		$this->load->view('admin/admin_required_pages/nav', $nav_data );

		
        $this->load->view('admin/Va_customer-read', $data);
	}


    //UPDATE
	public function update_customer($client_id)
	{
		//GET REQUIRED DATA FROM DB
		$data['data_customer'] = $this->AdminModel->client_id($client_id)->row();

		$nav_data['page_name'] 			= "users";

		$this->load->view('admin/admin_required_pages/nav', $nav_data );
        $this->load->view('admin/Va_customer-update', $data);
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
			$nav_data['page_name'] 			= "users";

			$this->load->view('admin/admin_required_pages/nav', $nav_data );
			$this->load->view('admin/Va_customer-create');
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
        	$this->AdminModel->update_customer($client_id, $data);
			redirect(site_url('AdminController/read_customer'));
		}
	}


    //DELETE
	public function delete_customer($client_id)
	{
        $this->AdminModel->delete_customer($client_id);
		redirect(site_url('AdminController/read_customer'));
	}







	/*==================== MODULES PHOTOGRAPHER ====================*/
	//CREATE
	public function create_photographer()
	{
		//GET REQUIRED DATA FROM DB
		$data['data_admin']		= $this->AdminModel->tb_admin()->result();
		$data['data_photographer']	= $this->AdminModel->tb_photographer()->result();
		$data['data_clerk']	= $this->AdminModel->tb_clerk()->result();
		$data['data_customer']	= $this->AdminModel->tb_customer()->result();

		$nav_data['page_name'] 			= "users";

		$this->load->view('admin/admin_required_pages/nav', $nav_data );
		$this->load->view('admin/Va_photographer-create', $data);
	}
	public function create_photographer_process()
	{
			$this->form_validation->set_rules('username','USERNAME','required|trim|min_length[5]|max_length[20]|is_unique[photographer.photographer_user]',
									array(
													'is_unique' => 'This %s already exists.'
										));
			$this->form_validation->set_rules('fullname','PHOTOGRAPHER NAME','required');
			$this->form_validation->set_rules('address','ADDRESS','required');
			$this->form_validation->set_rules('birthdate','BIRTH DATE','required');
			$this->form_validation->set_rules('email','EMAIL','required|trim|valid_email|is_unique[photographer.photographer_email]',
									array(
										'required' => 'Not valid EMAIL address, must be username@domain.com',
													'is_unique' => 'This %s already exists.'
										));
			$this->form_validation->set_rules('password','PASSWORD','required|min_length[5]|max_length[20]');
			$this->form_validation->set_rules('passconf','CONFIRM PASSWORD','required|matches[password]');

		if($this->form_validation->run() == FALSE)
		{
			$nav_data['page_name'] 			= "users";

			$this->load->view('admin/admin_required_pages/nav', $nav_data );
			$this->load->view('admin/Va_photographer-create');
		}
		else
		{
			$data['photographer_user'] 	= $this->input->post('username');
			$data['photographer_pass'] 	= md5($this->input->post('password'));
			$data['photographer_nama'] 	= $this->input->post('fullname');
			$data['photographer_alamat'] 	= $this->input->post('address');
			$data['photographer_ttl'] 	= date("Y-m-d", strtotime($this->input->post('birthdate')));
			$data['photographer_email'] 	= $this->input->post('email');
			$this->AdminModel->create_photographer($data);
			redirect(site_url('AdminController/read_photographer'));
		}
	}


		//READ
	public function read_photographer()
	{
		$data['data_photographer'] = $this->AdminModel->tb_photographer()->result();

		$nav_data['page_name'] 			= "users";

		$this->load->view('admin/admin_required_pages/nav', $nav_data );

		
				$this->load->view('admin/Va_photographer-read', $data);
	}


		//UPDATE
	public function update_photographer($photographer_id)
	{
		//GET REQUIRED DATA FROM DB
		$data['data_photographer'] = $this->AdminModel->photographer_id($photographer_id)->row();

			$nav_data['page_name'] 			= "users";

		$this->load->view('admin/admin_required_pages/nav', $nav_data );
	
				$this->load->view('admin/Va_photographer-update', $data);
	}
	public function update_photographer_process()
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
			$nav_data['page_name'] 			= "users";

			$this->load->view('admin/admin_required_pages/nav', $nav_data );
			$this->load->view('admin/Va_photographer-create');
		}
		else
		{
			$data['photographer_user'] 	= $this->input->post('username');
			$data['photographer_pass'] 	= md5($this->input->post('password'));
			$data['photographer_nama'] 	= $this->input->post('fullname');
			$data['photographer_alamat'] 	= $this->input->post('address');
			$data['photographer_ttl'] 	= date("Y-m-d", strtotime($this->input->post('birthdate')));
			$data['photographer_email'] 	= $this->input->post('email');
			$photographer_id 	 			= $this->input->post('photographer_id');
					$this->AdminModel->update_photographer($photographer_id, $data);
			redirect(site_url('AdminController/read_photographer'));
		}
	}


		//DELETE
	public function delete_photographer($photographer_id)
	{
		$this->AdminModel->delete_photographer($photographer_id);
		redirect(site_url('AdminController/read_photographer'));
	}





	/*==================== MODULES CLERK ====================*/
	//CREATE
	public function create_clerk()
	{
		//GET REQUIRED DATA FROM DB
		$data['data_admin']		= $this->AdminModel->tb_admin()->result();
		$data['data_photographer']	= $this->AdminModel->tb_photographer()->result();
		$data['data_clerk']	= $this->AdminModel->tb_clerk()->result();
		$data['data_customer
		']	= $this->AdminModel->tb_customer()->result();

		$nav_data['page_name'] 			= "users";

		$this->load->view('admin/admin_required_pages/nav', $nav_data );

		$this->load->view('admin/Va_clerk-create', $data);
	}
	public function create_clerk_process()
	{
			$this->form_validation->set_rules('username','USERNAME','required|trim|min_length[5]|max_length[20]|is_unique[clerk.clerk_user]',
									array(
													'is_unique' => 'This %s already exists.'
										));
			$this->form_validation->set_rules('fullname','CLERK NAME','required');
			$this->form_validation->set_rules('address','ADDRESS','required');
			$this->form_validation->set_rules('birthdate','BIRTH DATE','required');
			$this->form_validation->set_rules('email','EMAIL','required|trim|valid_email|is_unique[clerk.clerk_email]',
									array(
										'required' => 'Not valid EMAIL address, must be username@domain.com',
													'is_unique' => 'This %s already exists.'
										));
			$this->form_validation->set_rules('password','PASSWORD','required|min_length[5]|max_length[20]');
			$this->form_validation->set_rules('passconf','CONFIRM PASSWORD','required|matches[password]');

		if($this->form_validation->run() == FALSE)
		{
			$nav_data['page_name'] 			= "users";

			$this->load->view('admin/admin_required_pages/nav', $nav_data );
			$this->load->view('admin/Va_clerk-create');
		}
		else
		{
			$data['clerk_user'] 	= $this->input->post('username');
			$data['clerk_pass'] 	= md5($this->input->post('password'));
			$data['clerk_nama'] 	= $this->input->post('fullname');
			$data['clerk_alamat'] 	= $this->input->post('address');
			$data['clerk_ttl'] 	= date("Y-m-d", strtotime($this->input->post('birthdate')));
			$data['clerk_email'] 	= $this->input->post('email');
			$this->AdminModel->create_clerk($data);
			redirect(site_url('AdminController/read_clerk'));
		}
	}


		//READ
	public function read_clerk()
	{
		$data['data_clerk'] = $this->AdminModel->tb_clerk()->result();

		$nav_data['page_name'] 			= "users";

		$this->load->view('admin/admin_required_pages/nav', $nav_data );

		
				$this->load->view('admin/Va_clerk-read', $data);
	}


		//UPDATE
	public function update_clerk($clerk_id)
	{
		//GET REQUIRED DATA FROM DB
		$data['data_clerk'] = $this->AdminModel->clerk_id($clerk_id)->row();

		$nav_data['page_name'] 			= "users";

		$this->load->view('admin/admin_required_pages/nav', $nav_data );

				$this->load->view('admin/Va_clerk-update', $data);
	}
	public function update_clerk_process()
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
			$this->load->view('admin/Va_clerk-create');
		}
		else
		{
			$data['clerk_user'] 	= $this->input->post('username');
			$data['clerk_pass'] 	= md5($this->input->post('password'));
			$data['clerk_nama'] 	= $this->input->post('fullname');
			$data['clerk_alamat'] 	= $this->input->post('address');
			$data['clerk_ttl'] 	= date("Y-m-d", strtotime($this->input->post('birthdate')));
			$data['clerk_email'] 	= $this->input->post('email');
			$clerk_id 	 			= $this->input->post('clerk_id');
					$this->AdminModel->update_clerk($clerk_id, $data);
			redirect(site_url('AdminController/read_clerk'));
		}
	}


		//DELETE
	public function delete_clerk($clerk_id)
	{

		$this->AdminModel->delete_clerk($clerk_id);

		redirect(site_url('AdminController/read_clerk'));
	}








	/*==================== MODULES PHOTO SERVICES ====================*/
	//CREATE
	public function create_photoservices()
	{
		//GET REQUIRED DATA FROM DB


		
		$data['data_services']	= $this->AdminModel->tb_services()->result();

		$nav_data['page_name'] 			= "services";

		$this->load->view('admin/admin_required_pages/nav', $nav_data );


		$this->load->view('admin/Va_photoservices-create', $data);
	}


















	public function create_photoservices_process()
	{



			  $config['upload_path'] = './packages_imgs/';
        	  $config['allowed_types'] = 'jpg';
              $config['max_size'] = '0'; // Unlimited
              $config['max_width']  = '0'; // Unlimited
              $config['max_height']  = '0'; // Unlimited

              $this->load->library('upload', $config);

             // Alternately you can set preferences by calling the initialize function. Useful if you auto-load the class:
              $this->upload->initialize($config);
				
				if (!$this->upload->do_upload('file')) {
    			$error = array('error' => $this->upload->display_errors());
    			echo $error['error'];
					}


               $this->upload->do_upload('file');
    		   $data_upload_files = $this->upload->data();
			   $image = $data_upload_files[full_path]; 



			$this->form_validation->set_rules('package_name','PACKAGE NAME','required|is_unique[package.package_name]',
									array(
													'is_unique' => 'This %s already exists.'
										));
			$this->form_validation->set_rules('package_desc','PACKAGE DESCRIPTION','required');
			$this->form_validation->set_rules('package_price','PACKAGE PRICE','required');
			

		if($this->form_validation->run() == FALSE)
		{
			$nav_data['page_name'] 			= "services";

		$this->load->view('admin/admin_required_pages/nav', $nav_data );
		$this->load->view('admin/Va_photoservices-create');
		}
		else
		{
			$file_data = $this->upload->data();
			$data['package_name'] 	= $this->input->post('package_name');
			$data['package_desc'] 	= $this->input->post('package_desc');
			$data['package_img'] 	= $file_data['file_name'];
			$data['package_price'] 	= $this->input->post('package_price');
			$this->AdminModel->create_service($data);
			redirect(site_url('AdminController/read_photoservices'));
		}
	}





















		//READ
	public function read_photoservices()
	{
		$data['data_services'] = $this->AdminModel->tb_services()->result();

		$nav_data['page_name'] 			= "services";

		$this->load->view('admin/admin_required_pages/nav', $nav_data );


				$this->load->view('admin/Va_photoservices-read', $data);
	}


		//UPDATE
	public function update_services($package_id)
	{
		//GET REQUIRED DATA FROM DB
		$data['data_services'] = $this->AdminModel->package_id($package_id)->row();

				$nav_data['page_name'] 			= "services";

		$this->load->view('admin/admin_required_pages/nav', $nav_data );

				$this->load->view('admin/Va_photoservices-update', $data);
	}
	public function update_photoservices_process()
	{

			$nav_data['page_name'] 			= "services";

		$this->load->view('admin/admin_required_pages/nav', $nav_data );

			$this->load->view('admin/Va_photoservices-create');
	
		{
			$data['package_name'] 	= $this->input->post('package_name');
			$data['package_desc'] 	= $this->input->post('package_desc');
			$data['package_img'] 	= $this->input->post('package_img');
			$data['package_price'] 	= $this->input->post('package_price');
			$package_id 	 			= $this->input->post('package_id');
					$this->AdminModel->update_service($package_id, $data);
			redirect(site_url('AdminController/read_photoservices'));
		}
	}


		//DELETE
	public function delete_service($package_id)
	{


			$this->AdminModel->delete_service($package_id);

            redirect(site_url('AdminController/read_photoservices'));

	}







}
?>












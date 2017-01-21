<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		

		$this->load->model('AdminModel');
		$this->load->model('photoServicesModel');
		
	}

	public function index()
	{
		$data['count_admin']  = $this->AdminModel->admin_count()->result();
		$data['count_photographer'] = $this->AdminModel->photographer_count()->result();
		$data['count_clerk'] = $this->AdminModel->clerk_count()->result();
		$data['count_member'] = $this->AdminModel->member_count()->result();
		$data['count_services'] = $this->AdminModel->services_count()->result();



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
		$data['data_member']	= $this->AdminModel->tb_member()->result();

		
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


	/*==================== MODULES MEMBER ====================*/
	//CREATE
	public function create_member()
	{
		//GET REQUIRED DATA FROM DB
		$data['data_admin']		= $this->AdminModel->tb_admin()->result();
		$data['data_photographer']	= $this->AdminModel->tb_photographer()->result();
		$data['data_clerk']	= $this->AdminModel->tb_clerk()->result();
		$data['data_member']	= $this->AdminModel->tb_member()->result();

		$nav_data['page_name'] 			= "users";

		$this->load->view('admin/admin_required_pages/nav', $nav_data );
		

		$this->load->view('admin/Va_member-create', $data);
	}
	public function create_member_process()
	{
    	$this->form_validation->set_rules('username','USERNAME','required|trim|min_length[5]|max_length[20]|is_unique[member.client_username]',
					    		array(
					                'is_unique' => 'This %s already exists.'
					        	));
    	$this->form_validation->set_rules('fullname','MEMBER NAME','required');
    	$this->form_validation->set_rules('address','ADDRESS','required');
    	$this->form_validation->set_rules('birthdate','BIRTH DATE','required');
    	$this->form_validation->set_rules('email','EMAIL','required|trim|valid_email|is_unique[member.client_email]',
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
			$this->load->view('admin/Va_member-create');
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
			$this->AdminModel->create_member($data);
			redirect(site_url('AdminController/read_member'));
		}
	}


    //READ
	public function read_member()
	{
		$data['data_member'] = $this->AdminModel->tb_member()->result();

		$nav_data['page_name'] 			= "users";

		$this->load->view('admin/admin_required_pages/nav', $nav_data );

		
        $this->load->view('admin/Va_member-read', $data);
	}


    //UPDATE
	public function update_member($client_id)
	{
		//GET REQUIRED DATA FROM DB
		$data['data_member'] = $this->AdminModel->client_id($client_id)->row();

		$nav_data['page_name'] 			= "users";

		$this->load->view('admin/admin_required_pages/nav', $nav_data );
        $this->load->view('admin/Va_member-update', $data);
	}
	public function update_member_process()
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
			$this->load->view('admin/Va_member-create');
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
        	$this->AdminModel->update_member($client_id, $data);
			redirect(site_url('AdminController/read_member'));
		}
	}


    //DELETE
	public function delete_member($client_id)
	{
        $this->AdminModel->delete_member($client_id);
		redirect(site_url('AdminController/read_member'));
	}







	/*==================== MODULES PHOTOGRAPHER ====================*/
	//CREATE
	public function create_photographer()
	{
		//GET REQUIRED DATA FROM DB
		$data['data_admin']		= $this->AdminModel->tb_admin()->result();
		$data['data_photographer']	= $this->AdminModel->tb_photographer()->result();
		$data['data_clerk']	= $this->AdminModel->tb_clerk()->result();
		$data['data_member']	= $this->AdminModel->tb_member()->result();

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
		$data['data_member']	= $this->AdminModel->tb_member()->result();

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


		
		$data['data_services']	= $this->photoServicesModel->tb_services()->result();

		$nav_data['page_name'] 			= "users";

		$this->load->view('admin/admin_required_pages/nav', $nav_data );


		$this->load->view('admin/Va_photoservices-create', $data);
	}
	public function create_photoservices_process()
	{
			$this->form_validation->set_rules('package_name','PACKAGE NAME','required|is_unique[package.package_name]',
									array(
													'is_unique' => 'This %s already exists.'
										));
			$this->form_validation->set_rules('package_desc','PACKAGE DESCRIPTION','required');
			$this->form_validation->set_rules('package_price','PACKAGE PRICE','required');
			

		if($this->form_validation->run() == FALSE)
		{
			$nav_data['page_name'] 			= "users";

		$this->load->view('admin/admin_required_pages/nav', $nav_data );
			$this->load->view('admin/Va_photoservices-create');
		}
		else
		{
			$data['package_name'] 	= $this->input->post('package_name');
			$data['package_desc'] 	= $this->input->post('package_desc');
			$data['package_img'] 	= $this->input->post('package_img');
			$data['package_price'] 	= $this->input->post('package_price');
			$this->photoServicesModel->create_service($data);
			redirect(site_url('AdminController/read_photoservices'));
		}
	}


		//READ
	public function read_photoservices()
	{
		$data['data_services'] = $this->photoServicesModel->tb_services()->result();

		$nav_data['page_name'] 			= "services";

		$this->load->view('admin/admin_required_pages/nav', $nav_data );


				$this->load->view('admin/Va_photoservices-read', $data);
	}


		//UPDATE
	public function update_services($package_id)
	{
		//GET REQUIRED DATA FROM DB
		$data['data_services'] = $this->photoServicesModel->package_id($package_id)->row();

				$nav_data['page_name'] 			= "users";

		$this->load->view('admin/admin_required_pages/nav', $nav_data );

				$this->load->view('admin/Va_photoservices-update', $data);
	}
	public function update_photoservices_process()
	{

			$nav_data['page_name'] 			= "users";

		$this->load->view('admin/admin_required_pages/nav', $nav_data );

			$this->load->view('admin/Va_photoservices-create');
	
		{
			$data['package_name'] 	= $this->input->post('package_name');
			$data['package_desc'] 	= $this->input->post('package_desc');
			$data['package_img'] 	= $this->input->post('package_img');
			$data['package_price'] 	= $this->input->post('package_price');
			$package_id 	 			= $this->input->post('package_id');
					$this->photoServicesModel->update_service($package_id, $data);
			redirect(site_url('AdminController/read_photoservices'));
		}
	}


		//DELETE
	public function delete_photoservices($package_id)
	{
				$this->photoServicesModel->delete_service($package_id);
		redirect(site_url('AdminController/read_photoservices'));
	}







































}
?>

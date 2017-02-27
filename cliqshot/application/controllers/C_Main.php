<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Main extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Main');
		$this->load->model('AdminModel');
	}

	public function index()
	{
		//Check session
		if($this->session->userdata('admin_user'))
		{
			$this->load->view('admin/Va_dashboard');
		}
		elseif($this->session->userdata('clerk_user'))
		{
			$this->load->view('clerk/home');
		}
		elseif($this->session->userdata('photographer_user'))
		{
			$this->load->view('photographer/Vp_dashboard');
		}
		elseif($this->session->userdata('client_username'))
		{
			$this->load->view('customer/list_packages');
		}
		else
		{
			$this->load->view('login/V_Login');
		}
	}

	public function login()
	{
		$username  = $this->input->post('username');
		$password  = md5($this->input->post('password'));

		$admin = $this->M_Main->get_admin($username,$password);
		$clerk = $this->M_Main->get_clerk($username,$password);
		$photographer = $this->M_Main->get_photographer($username,$password);
		$client = $this->M_Main->get_customer($username,$password);

		if($admin->num_rows() == 1)
		{
			foreach($admin->result_array() as $row)
			{
				$pass_auth = $row['admin_pass'];

				if($password == $pass_auth)
				{
					$row_data = array(
						'admin_id' 	 => $row['admin_id'],
						'admin_user' => $row['admin_user']
					);
					$this->session->set_userdata($row_data);
					redirect('AdminController');
				}
				else
				{
					//$data['error']='Wrong Password!';
					$this->load->view('login/V_Login');
				}

			}
		}


		elseif($photographer->num_rows() == 1)
		{
			foreach($photographer->result_array() as $row)
			{
				$pass_auth = $row['photographer_pass'];

				if($password == $pass_auth)
				{
					$row_data = array(
						'photographer_id'   => $row['photographer_id'],
						'photographer_user' => $row['photographer_user']
					);
					$this->session->set_userdata($row_data);
					redirect('PhotographerController');
				}
				else
				{
					//$data['error']='Wrong Password!';
					$this->load->view('login/V_Login');
				}

			}
		}
		elseif($clerk->num_rows() == 1)
		{
			foreach($clerk->result_array() as $row)
			{
				$pass_auth = $row['clerk_pass'];

				if($password == $pass_auth)
				{
					$row_data = array(
						'clerk_id'   => $row['clerk_id'],
						'clerk_user' => $row['clerk_user']
					);
					$this->session->set_userdata($row_data);
					redirect('ClerkController');
				}
				else
				{
					//$data['error']='Wrong Password!';
					$this->load->view('login/V_Login');
				}

			}
		}
		elseif($client->num_rows() == 1)
		{
			foreach($client->result_array() as $row)
			{
				$pass_auth = $row['client_password'];

				if($password == $pass_auth)
				{
					$row_data = array(
						'client_id'   => $row['client_id'],
						'client_username' => $row['client_username'],
						'client_fullname' => $row['client_fullname'],
						'client_birthdate' => $row['client_birthdate'],
						'client_email' => $row['client_contact']
					);
					$this->session->set_userdata($row_data);
					redirect('CustomerController');
				}
				else
				{
					//$data['error']='Wrong Password!';
					$this->load->view('login/V_Login');
				}

			}
		}
		else
		{
			//$data['error']='Wrong Username!';
			$this->load->view('login/V_Login');
		}

	}

    public function register()
    {
    	$this->form_validation->set_rules('username','USERNAME','required|trim|min_length[5]|max_length[20]|is_unique[customer.client_username]',
					    		array(
					                'is_unique' => 'This %s already exists.'
					        	));
    	$this->form_validation->set_rules('fullname','CLIENT NAME','required');
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
			$this->load->view('login/V_Register');
		}
		else
		{
			$data['client_username'] 	= $this->input->post('username');
			$data['client_password'] 	= md5($this->input->post('password'));
			$data['client_fullname'] 	= $this->input->post('fullname');
			$data['client_address'] 	= $this->input->post('address');
			$data['client_birthdate'] 	= date("Y-m-d", strtotime($this->input->post('birthdate')));
			$data['client_email'] 	= $this->input->post('email');
			$this->AdminModel->create_customer($data);

			$pesan['success']  = "Registrasion Success!";
			$this->load->view('login/V_Login2',$pesan);
		}
	}

    public function logout(){
        $this->session->unset_userdata('admin_id');
        $this->session->unset_userdata('admin_user');
        $this->session->unset_userdata('photographer_id');
        $this->session->unset_userdata('photographer_user');
				$this->session->unset_userdata('clerk_id');
        $this->session->unset_userdata('clerk_user');
				$this->session->unset_userdata('client_id');
        $this->session->unset_userdata('client_username');
        redirect(site_url(''));
    }

}

?>

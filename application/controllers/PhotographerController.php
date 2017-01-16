<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PhotographerController extends CI_Controller {

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

		$this->load->model('photo_managementModel');

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

	 		redirect(base_url("index.php/vapeLoginController/list_packages"));

	}


	public function list_orders()
	{

		$data['get_packages'] = $this->photo_managementModel->get_packages();

		$this->load->view('required_pages/header');

		$this->load->view('list_orders', $data);
		
		$this->load->view('required_pages/footer');
	
	}

	public function upload_order_album()
	{

		$data['get_packages'] = $this->photo_managementModel->get_packages();

		$this->load->view('required_pages/header');

		$this->load->view('list_packages', $data);
		
		$this->load->view('required_pages/footer');
	
	}

//* For  Add Packages

	public function add_package_form()
	{

		//* $data['get_packages'] = $this->photographyModel->get_packages();

		$this->load->view('required_pages/header');

		$this->load->view('photographer/add_package_form');
		
		$this->load->view('required_pages/footer');
	
	}


//* For Uploading Packages

	public function insert_album()
	{

		//* $data['get_packages'] = $this->photographyModel->get_packages();

		$config['file_name']        	= $id;

        $config['upload_path']          = 'uploads/';
		
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
        

        // $config['max_size']             = 100;
        
        // $config['max_width']            = 1024;
        
        // $config['max_height']           = 768;


        $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('prod_image')) {

                    $error = array('error' => $this->upload->display_errors());

                 

                        //* $this->load->view('upload_form', $error);
                }
                else {
                     
                     $data = array('prod_image' => $this->upload->data()); 

                }

         $this->inventoryModel->update_inv_img($id, $data['prod_image']['file_name']);

		$this->load->view('required_pages/header');

		$this->load->view('list_packages', $data);
		
		$this->load->view('required_pages/footer');
	
	}


}

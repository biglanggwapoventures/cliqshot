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


	protected $photographer_id;

	public function __construct(){

        parent::__construct();	


		$this->load->model('photo_managementModel');

		$this->load->library('session');

		$this->photographer_id =  $this->session->userdata('photographer_id');

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

		$this->load->view('photographer/photographer_required_pages/header');
		
		$nav_data['page_name'] 			= "home";

		$this->load->view('photographer/photographer_required_pages/nav', $nav_data );

		$this->load->view('photographer/home');
		
		$this->load->view('photographer/photographer_required_pages/footer');
	 		

	}


	public function list_orders()
	{

		$data['get_packages'] = $this->photo_managementModel->get_packages();

		$this->load->view('photographer/photographer_required_pages/header');

		$this->load->view('list_orders', $data);
		
		$this->load->view('photographer/photographer_required_pages/footer');
	
	}



	public function orders_request()
	{

 
		$data['orders_request'] 		= $this->photo_managementModel->get_pending_assignment($this->photographer_id);

		$nav_data['page_name'] 			= "orders_request";


		$this->load->view('photographer/photographer_required_pages/header');

		$this->load->view('photographer/photographer_required_pages/nav', $nav_data);

		$this->load->view('photographer/orders_request', $data);
		
		$this->load->view('photographer/photographer_required_pages/footer');
	
	}

	public function upcoming_orders()
	{


 
		$data['pending_order_album'] 	= $this->photo_managementModel->get_upcoming_orders($this->photographer_id);
		$nav_data['page_name'] 			= "upcoming_orders";


		$this->load->view('photographer/photographer_required_pages/header');

		$this->load->view('photographer/photographer_required_pages/nav', $nav_data);

		$this->load->view('photographer/upcoming_orders', $data);
		
		$this->load->view('photographer/photographer_required_pages/footer');
	
	}

	public function pending_order_album()
	{

 
		$data['pending_order_album'] 	= $this->photo_managementModel->get_pending_album($this->photographer_id);

		$nav_data['page_name'] 			= "pending_order_album";


		$this->load->view('photographer/photographer_required_pages/header');

		$this->load->view('photographer/photographer_required_pages/nav', $nav_data);

		$this->load->view('photographer/pending_order_album', $data);
		
		$this->load->view('photographer/photographer_required_pages/footer');
	
	}

	public function orders_history()
	{

 
		$data['uploaded_album_order'] 		= $this->photo_managementModel->get_orders_history($this->photographer_id);

		$nav_data['page_name'] 			= "orders_history";


		$this->load->view('photographer/photographer_required_pages/header');

		$this->load->view('photographer/photographer_required_pages/nav', $nav_data);

		$this->load->view('photographer/orders_history', $data);
		
		$this->load->view('photographer/photographer_required_pages/footer');
	
	}

	public function approve_assignment($order_id){


				$this->photo_managementModel->approve_assignment($order_id,  $this->photographer_id);	


				redirect('PhotographerController/upcoming_orders');
	}

	public function view_album_gallery($order_id)
	{
 
		$nav_data['page_name'] 		= "orders_history";

		$data['album_details'] 		= $this->photo_managementModel->get_album_details($order_id);
		$data['order_info']	 		  =  $this->photo_managementModel->get_order_info($order_id);
		$data['photos'] 			= $this->photo_managementModel->get_photo_albums($data['album_details'][0]->album_id);
			
		
		$this->load->view('photographer/photographer_required_pages/header');

		$this->load->view('photographer/photographer_required_pages/nav', $nav_data);

		$this->load->view('photographer/view_album_gallery', $data);
		
		$this->load->view('photographer/photographer_required_pages/footer');
	
	}

	public function zip_album($order_id)
	{
		$data['album_details'] 		= $this->photo_managementModel->get_album_details($order_id);
		$data['photos'] 			= $this->photo_managementModel->get_photo_albums($data['album_details'][0]->album_id);

		$this->load->library('zip');

		foreach($data['photos'] AS $i => $photo){
			// $file = explode('.', $photo->photos_img_url);
			$this->zip->read_file("{$photo->photos_img_url}");
		}

		$this->zip->download('clickshot.zip');

		

		// die(json_encode($data['photos']));
	}

	public function upload_order_album()
	{
		$order_id =  $this->input->get('order_id');
	
		$data['order_id']	  		  = $order_id;
		$data['order_info']	 		  =  $this->photo_managementModel->get_order_info($order_id);

		$nav_data['page_name'] 			= "upload_order_order";

		

		$this->load->view('photographer/photographer_required_pages/header');

		$this->load->view('photographer/photographer_required_pages/nav', $nav_data);

		$this->load->view('photographer/upload_order_album', $data);
		
		$this->load->view('photographer/photographer_required_pages/footer');
	
	}
	

//* For  Add Packages

	public function add_package_form()
	{

		//* $data['get_packages'] = $this->photographyModel->get_packages();

		$this->load->view('required_pages/header');

		$this->load->view('photographer/add_package_form');
		
		$this->load->view('required_pages/footer');
	
	}

	public function uploadPhotos_album(){

		// Count # of uploaded files in array

		$total = count($_FILES['photos_uploaded']['name']);

		$data['album_id']	  		  = '';
		$data['order_id']	  		  = $this->input->post('order_id');
		$data['photographer_id']	  = $this->photographer_id;
		$data['album_title']	  	  = $this->input->post('album_title');
		$data['album_desc']	  	  	  = $this->input->post('album_desc');
		$data['date_uploaded']	  	  = date("Y-m-d");

		//* Insert Album 

		$album_id	 		  =  $this->photo_managementModel->insertAlbumPhotos($data);


		// Loop through each file
		for($i=0; $i<$total; $i++) {


		  //Get the temp file path
		  $tmpFilePath = $_FILES['photos_uploaded']['tmp_name'][$i];

		  //Make sure we have a filepath
		  if ($tmpFilePath != ""){


		    //Setup our new file path
		   	// File Path should have folder name the same name in album name/title
		   	 
		    $newFilePath = "uploadFiles/" .$_FILES['photos_uploaded']['name'][$i];
 
		    // File name should be uniq and random
		    
		    //* Store it in DB

		    //Upload the file into the temp dir
		    if($flag = move_uploaded_file($tmpFilePath, $newFilePath)) {
				
				$photo_data['photo_id'] = '';
				$photo_data['photos_img_url'] = $newFilePath;
				$photo_data['album_id'] =  $album_id;
				$photo_data['photo_description'] =  '';

				$this->photo_managementModel->uploadAlbumPhotos($photo_data);
			      //Handle other code here

			    }

			  }
 
		}

           $this->photo_managementModel->upload_order_status($data['order_id']);


           redirect("PhotographerController/orders_history");

	}

//* For Uploading Packages

	public function insert_album()
	{

		

		$config['file_name']        	= $id;

        $config['upload_path']          = 'uploads/';
		
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
        

     


		// Send Email for the customer notification in uploading the albums...

		$this->emailUploadNotification();
		
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

	public function emailUploadNotification(){
 

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
            $this->email->to('iroyanthony@gmail.com'); 


            $this->email->subject('Email Test');

            $this->email->message($message);  

            $this->email->send();

            echo $this->email->print_debugger();


	}



	public function calendar()
	{


		
		$nav_data['page_name'] 			= "calendar";

		$data['calendar_orders']		= $this->photo_managementModel->get_all_approved_orders();	


		$this->load->view('photographer/photographer_required_pages/header');

		$this->load->view('photographer/photographer_required_pages/nav', $nav_data);

		$this->load->view('photographer/calendar', $data);

	
	}



	public function start_photo_session($order_id)
	{

			$this->photo_managementModel->start_photo_session($order_id);	

 			redirect('PhotographerController/upcoming_orders');
	}


	public function end_photo_session($order_id)
	{


			$this->photo_managementModel->end_photo_session($order_id);	

 			redirect('PhotographerController/pending_order_album');
	}



	public function download() {
		$this->load->library('zip');
		$this->load->helper('file');
		$path = './packages_imgs/';

		$files = get_filenames($path);
		foreach ($files as $f) {
				$this->zip->read_file($path.$f, true);
		}
		$this->zip->download('Download_all_files');
	}


}

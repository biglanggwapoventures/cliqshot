<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PhotoServicesModel extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}

	/*==================== MODULES PHOTOSERVICES ====================*/
	//SELECT * FROM TABLES
	function tb_services()
	{
		$this->db->select('*')
				 ->from('package')
				 ->where('flag','1')
				 ->order_by('package_name','asc');
		return $this->db->get();
	}

	function services_count()
	{
		$this->db->select('COUNT(package_id) AS package_count')
				 ->from('package')
				 ->where('flag', '1');
		return $this->db->get();
	}

	function package_id($package_id)
	{
		$this->db->select('*')
				 ->from('package')
				 ->where('package_id', $package_id);
		return $this->db->get();
	}

	//CREATE, UPDATE, DELETE
	function create_service($data)
	{
		$this->db->insert('package', $data);
	}

	function update_service($package_id, $data)
	{
		$this->db->where(array('package_id' => $package_id, 'package_id !=' => 1));
		$this->db->update('package', $data);
	}

	function delete_service($package_id)
	{
		 $this->db->set('flag', "0");
                $this->db->where('package_id', $package_id);
                $this->db->update('package');
                 redirect('AdminController/read_photoservices');
	}


	// Used for paginationsample
	function paging_service($limit=array())
	{
		$this->db->select('*');
		$this->db->from('package');
		$this->db->order_by('package_name', 'asc');

		if ($limit != NULL)
		$this->db->limit($limit['perpage'], $limit['offset']);

		return $this->db->get();
	}


   function delete_order_flag($order_id)
    {
 

          $this->db->set('flag', "0");
                $this->db->where('order_id', $order_id);
                $this->db->update('orders');
                 redirect('CustomerController/my_appointments');

    }









}
?>

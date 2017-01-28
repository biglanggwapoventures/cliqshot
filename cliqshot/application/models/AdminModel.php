<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}

	/*==================== MODULES ADMIN ====================*/
	//SELECT * FROM TABLES
	function tb_admin()
	{
		$this->db->select('*')
				 ->from('admin')
				 ->order_by('admin_user','asc');
		return $this->db->get();
	}

	function admin_count()
	{
		$this->db->select('COUNT(admin_id) AS admin_count')
				 ->from('admin');
		return $this->db->get();
	}

	function admin_id($admin_id)
	{
		$this->db->select('*')
				 ->from('admin')
				 ->where('admin_id', $admin_id);
		return $this->db->get();
	}

	//CREATE, UPDATE, DELETE
	function create_admin($data)
	{
		$this->db->insert('admin', $data);
	}

	function update_admin($admin_id, $data)
	{
		$this->db->where(array('admin_id' => $admin_id, 'admin_id !=' => 1));
		$this->db->update('admin', $data);
	}

	function delete_admin($admin_id)
	{
		$this->db->delete('admin', array(
							'admin_id' => $admin_id,
							'admin_id !=' => 1
						));
	}


	// Used for paginationsample
	function paging_admin($limit=array())
	{
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->order_by('admin_user', 'asc');

		if ($limit != NULL)
		$this->db->limit($limit['perpage'], $limit['offset']);

		return $this->db->get();
	}


	/*==================== MODULES customer ====================*/

	//SELECT * FROM TABLES
	function tb_customer()
	{
		$this->db->select('*')
				 ->from('customer')
				 ->order_by('client_username','asc');
		return $this->db->get();
	}

	function customer_count()
	{
		$this->db->select('COUNT(client_id) AS customer_count')
				 ->from('customer');
		return $this->db->get();
	}

	function client_id($client_id)
	{
		$this->db->select('*')
				 ->from('customer')
				 ->where('client_id', $client_id);
		return $this->db->get();
	}

	//CREATE, UPDATE, DELETE
	function create_customer($data)
	{
		$this->db->insert('customer', $data);
	}

	function update_customer($client_id, $data)
	{
		$this->db->where(array('client_id' => $client_id, 'client_id !=' => 1));
		$this->db->update('customer', $data);
	}

	function delete_customer($client_id)
	{
		$this->db->delete('customer', array(
							'client_id' => $client_id,
							'client_id !=' => 1
						));
	}


	// Used for paginationsample
	function paging_customer($limit=array())
	{
		$this->db->select('*');
		$this->db->from('customer');
		$this->db->order_by('client_username', 'asc');

		if ($limit != NULL)
		$this->db->limit($limit['perpage'], $limit['offset']);

		return $this->db->get();
	}




	/*==================== MODULES PHOTOGRAPHER ====================*/

	//SELECT * FROM TABLES
	function tb_photographer()
	{
		$this->db->select('*')
				 ->from('photographer')
				 ->order_by('photographer_user','asc');
		return $this->db->get();
	}

	function photographer_count()
	{
		$this->db->select('COUNT(photographer_id) AS photographer_count')
				 ->from('photographer');
		return $this->db->get();
	}

	function photographer_id($photographer_id)
	{
		$this->db->select('*')
				 ->from('photographer')
				 ->where('photographer_id', $photographer_id);
		return $this->db->get();
	}

	//CREATE, UPDATE, DELETE
	function create_photographer($data)
	{
		$this->db->insert('photographer', $data);
	}

	function update_photographer($photographer_id, $data)
	{
		$this->db->where(array('photographer_id' => $photographer_id, 'photographer_id !=' => 1));
		$this->db->update('photographer', $data);
	}

	function delete_photographer($photographer_id)
	{
		$this->db->delete('photographer', array(
							'photographer_id' => $photographer_id,
							'photographer_id !=' => 1
						));
	}


	// Used for paginationsample
	function paging_photographer($limit=array())
	{
		$this->db->select('*');
		$this->db->from('photographer');
		$this->db->order_by('photographer_user', 'asc');

		if ($limit != NULL)
		$this->db->limit($limit['perpage'], $limit['offset']);

		return $this->db->get();
	}


	/*==================== MODULES CLERK ====================*/

	//SELECT * FROM TABLES
	function tb_clerk()
	{
		$this->db->select('*')
				 ->from('clerk')
				 ->order_by('clerk_user','asc');
		return $this->db->get();
	}

	function clerk_count()
	{
		$this->db->select('COUNT(clerk_id) AS clerk_count')
				 ->from('clerk');
		return $this->db->get();
	}

	function clerk_id($clerk_id)
	{
		$this->db->select('*')
				 ->from('clerk')
				 ->where('clerk_id', $clerk_id);
		return $this->db->get();
	}

	//CREATE, UPDATE, DELETE
	function create_clerk($data)
	{
		$this->db->insert('clerk', $data);
	}

	function update_clerk($clerk_id, $data)
	{
		$this->db->where(array('clerk_id' => $photographer_id, 'clerk_id !=' => 1));
		$this->db->update('clerk', $data);
	}

	function delete_clerk($clerk_id)
	{
		$this->db->delete('clerk', array(
							'clerk_id' => $clerk_id,
							'clerk_id !=' => 1
						));
	}


	// Used for paginationsample
	function paging_clerk($limit=array())
	{
		$this->db->select('*');
		$this->db->from('clerk');
		$this->db->order_by('clerk_user', 'asc');

		if ($limit != NULL)
		$this->db->limit($limit['perpage'], $limit['offset']);

		return $this->db->get();
	}



	function services_count()
	{
		$this->db->select('COUNT(package_id) AS services_count')
				 ->from('package');
		return $this->db->get();
	}





}
?>

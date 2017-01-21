<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Main extends CI_Model
{
	public function get_admin($username,$password)
	{
		$query = $this->db->query("SELECT * FROM admin WHERE admin_user='$username' AND admin_pass='$password' ");
		return $query;
	}

	public function get_photographer($username,$password)
	{
		$query = $this->db->query("SELECT * FROM photographer WHERE photographer_user='$username' AND photographer_pass='$password' ");
		return $query;
	}

	public function get_clerk($username,$password)
	{
		$query = $this->db->query("SELECT * FROM clerk WHERE clerk_user='$username' AND clerk_pass='$password' ");
		return $query;
	}
	
	public function get_member($username,$password)
	{
		$query = $this->db->query("SELECT * FROM member WHERE client_username='$username' AND client_password='$password' ");
		return $query;
	}

}

?>
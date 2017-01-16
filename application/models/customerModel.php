<?php class customerModel extends CI_Model {

 
        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

 
        public function get_packages()
        {

                $query = $this->db->get('package');

                return $query->result();
        }


        public function get_package_info($package_id)
        {
                $this->db->where("package_id", $package_id);
                $query = $this->db->get('package');

                return $query->row_array();
        }

        public function insert_orders($orders_data)
        {
             
              $this->db->insert('orders', $orders_data);

              return $this->db->insert_id();
        }


        public function get_my_orders()
        {

                $query = $this->db->get('orders');

                $user_id = 1; //* $this->session->userdata('user_id')

                $this->db->where("user_id", $user_id);

                return $query->result();
        }


}

?>
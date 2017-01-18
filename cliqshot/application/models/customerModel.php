<?php class customerModel extends CI_Model {

 
        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

 
        public function get_packages()
        {

                $query = $this->db->get('package');

                $result =  $query->result();
    
               

                  return $result;
      }


        public function get_package_info($package_id)
        {
                $this->db->where("package_id", $package_id);
                $query = $this->db->get('package');

                $result =  $query->row_array();
               
                 
                return $result;
       }

        public function insert_orders($orders_data)
        {
             
              $this->db->insert('orders', $orders_data);

              $result =  $this->db->insert_id();
             
            
                return $result;

        }


        public function get_my_orders($user_id)
        {



                $this->db->where("user_id", $user_id);
    
                $this->db->join('package', 'package.package_id= orders.package_id');
 
                $query = $this->db->get('orders');
                
                $result =  $query->result();

               

                return $result;
        }


}

?>
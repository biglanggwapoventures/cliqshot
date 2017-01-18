<?php class ClerkModel extends CI_Model {

 
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


        public function get_approve_orders()
        {



                $this->db->where("order_status", "approve");
    
                $this->db->join('package', 'package.package_id= orders.package_id');
 
                $query = $this->db->get('orders');
                
                $result =  $query->result();

               

                return $result;
        }

        public function get_pending_orders()
        {



                $this->db->where("order_status", "pending");
    
                $this->db->join('package', 'package.package_id= orders.package_id');
 
                $query = $this->db->get('orders');
                
                $result =  $query->result();

               

                return $result;
        }

         public function approve_order($order_id)
        {
              $this->db->set('order_status', "approve");
              $this->db->where('order_id', $order_id);
              $this->db->update('orders');
        }       

}

?>
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


 
        public function get_photographers()
        {

                $query = $this->db->get('photographer');

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


        public function get_order_info($order_id)
        {
                $this->db->select("*");
                $this->db->from("orders");
                $this->db->where("order_id", $order_id);
                $this->db->join('package', 'package.package_id = package.package_id');
                $query = $this->db->get();

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
                $this->db->where("photographer_id", 0);
    
                $this->db->join('package', 'package.package_id= orders.package_id');
 
                $query = $this->db->get('orders');
                
                $result =  $query->result();

               

                return $result;
        }

        public function get_assigned_orders()
        {



                $this->db->where("photographer_id !=", 0);
    
                $this->db->join('package', 'package.package_id= orders.package_id');
 
                $query = $this->db->get('orders');
                
                $result =  $query->result();

               

                return $result;
        }

        public function get_pending_orders()
        {



                $this->db->where("order_status", "approve");
        
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

          public function assign_photographer($order_id, $photographer_id)
        {
              $this->db->set('photographer_id', $photographer_id);
              $this->db->where('order_id', $order_id);
              $this->db->update('orders');
        }       

}

?>
<?php class Photo_managementModel extends CI_Model {

 
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

        public function get_pending_assignment($photographer_id)
        {

                $this->db->where('photographer_id', $photographer_id);

                $this->db->where('assign_status', 'pending_assignment');

                $this->db->join('package', 'package.package_id = orders.package_id');

                $this->db->join('customer', 'customer.client_id = orders.user_id');

               //. $this->db->where('order_status', 'approve');

                $query = $this->db->get('orders');

                return $query->result();
        }

        public function get_upcoming_orders($photographer_id)
        {

                $this->db->join('package', 'package.package_id = orders.package_id');

                $this->db->join('customer', 'customer.client_id = orders.user_id');

                $this->db->where('photographer_id', $photographer_id);
                $this->db->where('assign_status', 'assigned');
                $this->db->where('event_date <=', date("Y-m-d"));

                $query = $this->db->get('orders');

                return $query->result();
        }

        public function get_pending_album()
        {

                 $this->db->where('assign_status', 'assigned');
                 $this->db->where('event_date >', date("Y-m-d"));


                $this->db->join('package', 'package.package_id = orders.package_id');

                $this->db->join('customer', 'customer.client_id = orders.user_id');

                $query = $this->db->get('orders');

                return $query->result();
        }

        public function get_orders_history()
        {

                $this->db->where('uploaded_status', 'uploaded');


                $this->db->join('package', 'package.package_id = orders.package_id');

                $this->db->join('customer', 'customer.client_id = orders.user_id');

                $query = $this->db->get("orders");

                return $query->result();
        }

        

        public function get_order_info($order_id)
        {
                $this->db->select("*");
                $this->db->from("orders");
                $this->db->where("order_id", $order_id);
  

                $this->db->join('package', 'package.package_id = orders.package_id');

                $this->db->join('customer', 'customer.client_id = orders.user_id');

                $query = $this->db->get();
 
                $result =  $query->row_array();
               
                 
                return $result;
       }

         public function approve_assignment($order_id, $photographer_id)
        {
              $this->db->set('assign_status', "assigned");
              $this->db->where('order_id', $order_id);
              $this->db->where('photographer_id', $photographer_id);
              $this->db->update('orders');
        } 
}



?>
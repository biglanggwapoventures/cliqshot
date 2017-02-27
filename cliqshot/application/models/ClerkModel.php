<?php 
class ClerkModel extends CI_Model 
{

 
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
                $this->db->join('package', 'package.package_id = orders.package_id', 'left');
                $this->db->join('customer', 'customer.client_id = orders.user_id', 'left');
                $query = $this->db->get();

                $result =  $query->row_array();
               
                // die(json_encode($result));
                 
                return $result ?: [];
       }

      public function get_order_info_for_email($order_id)
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

        public function insert_orders($orders_data)
        {
             
              $this->db->insert('orders', $orders_data);

              $result =  $this->db->insert_id();
             
            
                return $result;

        }


        public function get_approved_orders()
        {



                $this->db->where("order_status", "approve");               
            

                $this->db->where("payment_status", "unpaid");
                
    
                $this->db->join('package', 'package.package_id= orders.package_id');
       
                 $this->db->join('customer', 'customer.client_id = orders.user_id');
 
                $query = $this->db->get('orders');
                
                $result =  $query->result();

               

                return $result;
        }



         public function get_deposit_slips()
        {



                $this->db->where("order_status", "pending");               
               
                
                $this->db->where("payment_status", "pending deposit slip");
                
    
                $this->db->join('package', 'package.package_id= orders.package_id');
       
                $this->db->join('customer', 'customer.client_id = orders.user_id');
 
                $query = $this->db->get('orders');
                
                $result =  $query->result();

               

                return $result;
        }













         public function get_approved_orders_1()
        {



                $this->db->where("order_status", "approve");
                $this->db->where("assign_status", "not_assigned");
                $this->db->where("payment_status", "paid");
                $this->db->where("photographer_id", 0);
               
    
                $this->db->join('package', 'package.package_id= orders.package_id');
       
                 $this->db->join('customer', 'customer.client_id = orders.user_id');
 
                $query = $this->db->get('orders');
                
                $result =  $query->result();

               

                return $result;
        }





        public function get_assigned_orders()
        {



                $this->db->where("orders.photographer_id !=", 0);
                $this->db->where("assign_status ", 'assigned');
                
                $this->db->join('package', 'package.package_id= orders.package_id');

                $this->db->join('photographer', 'photographer.photographer_id= orders.photographer_id');
 
                $query = $this->db->get('orders');
                
                $result =  $query->result();

               

                return $result;
        }

        public function get_upcoming_orders()
        { 
                $this->db->where("orders.photographer_id !=", 0);
                $this->db->where('assign_status', 'assigned');
               
                $this->db->join('package', 'package.package_id= orders.package_id');
                $this->db->join('photographer', 'photographer.photographer_id= orders.photographer_id');
                $this->db->join('customer', 'customer.client_id= orders.user_id');

                $query = $this->db->get('orders');

                return $query->result();
        }

        public function get_pending_orders()
        {



                $this->db->where("order_status", "pending");

                $this->db->where("payment_status", "unpaid");
        
                $this->db->join('package', 'package.package_id= orders.package_id');

                $this->db->join('customer', 'customer.client_id = orders.user_id');
 
                $query = $this->db->get('orders');
                
                $result =  $query->result();

               

                return $result;
        }   

        public function get_orders_history()
        {

                $this->db->where('uploaded_status', 'uploaded');

               

                $this->db->join('package', 'package.package_id = orders.package_id');

                $this->db->join('customer', 'customer.client_id = orders.user_id');
 
                $query = $this->db->get("orders");

                return $query->result();
        }

         public function approve_order($order_id)
        {

              $this->db->set('order_status', "approve");
              $this->db->set('payment_status', "unpaid");
              $this->db->where('order_id', $order_id);
              
              $this->db->update('orders');
        } 

         public function paid_order($order_id)
        {
              
              $this->db->set('payment_status', "paid");
              $this->db->set('order_status', "approve");
              $this->db->where('order_id', $order_id);
              $this->db->update('orders');
        } 
          public function assign_photographer($order_id, $photographer_id)
        {
              $this->db->set('photographer_id', $photographer_id);
              $this->db->set('assign_status', 'assigned');
              
              $this->db->where('order_id', $order_id);
              $this->db->update('orders');
        }       




           public function reschedule_appointment($order_id)
        {
              $this->db->set('order_status', "advise to reschedule");
              $this->db->where('order_id', $order_id);
              $this->db->update('orders');
        } 



         public function get_all_my_approved_orders()
        {

                $this->db->where('order_status', 'approve');

                $this->db->join('package', 'package.package_id = orders.package_id');

                $this->db->join('customer', 'customer.client_id = orders.user_id');

               

                $query = $this->db->get('orders');

                return $query->result();

        }






      



         public function get_acct_info($user_name)
        {
                $this->db->where("username", $user_name);
                $query = $this->db->get('user');

                $result =  $query->row_array();
               
                 
                return $result;
       }



          function pending_count()
       {
               $this->db->select('COUNT(order_id) AS pending_count')
              ->from('orders')
              ->where ('order_flag','1')
              ->where("order_status", "pending")
              ->where("payment_status", "unpaid")
              ->join('package', 'package.package_id= orders.package_id')
              ->join('customer', 'customer.client_id = orders.user_id');
                return $this->db->get();
       }



 




}

?>
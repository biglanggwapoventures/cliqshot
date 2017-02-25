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


               $this->db->where('order_flag',1);


                $this->db->where("user_id", $user_id);

    
                $this->db->join('package', 'package.package_id= orders.package_id');

                $this->db->join('customer', 'customer.client_id = orders.user_id');

 
                $query = $this->db->get('orders');


                
                
                $result =  $query->result();

               

                return $result;
        }

        public function get_all_my_approved_orders($user_id)
        {

                $this->db->where('order_status', 'approve');

                $this->db->where('user_id', $user_id);

                $this->db->join('package', 'package.package_id = orders.package_id');

                $this->db->join('customer', 'customer.client_id = orders.user_id');

                $query = $this->db->get('orders');

                return $query->result();

        }

        public function get_order_info($order_id)
        {



                $this->db->where("order_id", $order_id);
    
                $this->db->join('package', 'package.package_id= orders.package_id');
 
                $query = $this->db->get('orders');
                
                $result =  $query->row_array();

               

                return $result;
        }

       public function get_acct_info($user_name)
        {
                $this->db->where("username", $user_name);
                $query = $this->db->get('user');

                $result =  $query->row_array();
               
                 
                return $result;
       }

         public function get_orders_history($user_id)
        {

                $this->db->where('uploaded_status', 'uploaded');


                $this->db->join('package', 'package.package_id = orders.package_id');

                $this->db->join('customer', 'customer.client_id = orders.user_id');

                
                $this->db->where('client_id', $user_id);

                $query = $this->db->get("orders");

                return $query->result();
        }

        public function get_album_details($order_Id)
       
        {

                $this->db->where('orders.order_id', $order_Id);

                $this->db->join('orders', 'orders.order_id = album.order_id');

                //. $this->db->where('order_status', 'approve');

                $query = $this->db->get('album');

                return $query->result();
        }
        
 
        public function get_photo_albums($album_id)
        {

 
                $this->db->where('album_id', $album_id);

 
               //. $this->db->where('order_status', 'approve');

                $query = $this->db->get('photos');

                return $query->result();
        }


     function update_customer($client_id, $data)
    {
        $this->db->where(array('client_id' => $client_id));
        $this->db->update('customer', $data);
    }

     function update_paypal_payment($order_id, $payment_type)
    {
        $data['payment_select'] = $payment_select;
        
        $this->db->where(array('order_id' => $order_id));
        $this->db->update('orders',  $data);
    }

    function client_id($client_id)
    {
        $this->db->select('*')
                 ->from('customer')
                 ->where('client_id', $client_id);
        return $this->db->get();
    }



     function delete_order_flag($order_id)
    {
 

          $this->db->set('order_flag', "0");
                $this->db->where('order_id', $order_id);
                $this->db->update('orders');
                 redirect('CustomerController/my_appointments');

    }



    function reschedule_appointment($order_id)
    {
        $this->db->select('*')
                 ->from('orders')
                 ->where('order_id', $order_id);
         
        return $this->db->get();
    }


    public function get_payment_slip($data,$order_id)
    {




        $this->db->set( ['payment_status'=> 'pending deposit slip', 'payment_slip'=> $data['payment_slip'],'bank_account'=> $data['bank_account'] ] )

        ->where('order_id',$order_id)
        ->update('orders');


    }


        function order_id($order_id)
    {
        $this->db->select('*')
                 ->from('orders')
                 ->where('order_id', $order_id);
        return $this->db->get();
    }

    public function checkDateAvailability($date,$time){

       

        $query = $this->db->select('*')
        ->from('orders')
        ->where('event_date',$date)
        ->where('time_ordered',$time)
        ->get();    

        if($query->num_rows() > 0){
           return 'exist';
        }else{
            return 'okay';
        }


    }
   


}

?>
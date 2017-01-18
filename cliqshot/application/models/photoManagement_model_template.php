<?php class photoManagement_model_template extends CI_Model {

 
        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function get_ingredient_requests(){

                 $this->db->where("approv_stat", "pending");
                 $query = $this->db->get('ingredients_requests');
                return $query->result();

        }



                 
        public function get_products_by_category($category_id)
        {
                $this->db->where("recstat", "active");
                $this->db->where("category_id", $category_id);
                $query = $this->db->get('products');
                return $query->result();
        }

        public function get_products_by_sub_category($category_id, $sub_category_id)
        {
                $this->db->where("recstat", "active");
                $this->db->where("category_id", $category_id);
                $this->db->where("sub_category_id", $sub_category_id);

                $query = $this->db->get('products');

                return $query->result();
        }

        public function get_products_all()
        {

                $this->db->where("recstat", "active");
                $query = $this->db->get('products');
                return $query->result();
        }

        public function get_transactions()
        {
                $query = $this->db->get('transactions');
                return $query->result();
        }

        public function get_transactions_by_filter_date($date_from, $date_to)
        {
                $this->db->where("transaction_date >=", $date_from);            
                $this->db->where("transaction_date <=", $date_to);

                $query = $this->db->get('transactions');
                return $query->result();
        }

         public function get_transactions_by_date($date)
        {
                $this->db->where("transaction_date", $date);            
                $query = $this->db->get('transactions');
                return $query->result();
        }

        public function get_sales_daily_trans()
        {
                $query = $this->db->get('sales_daily_trans');
                return $query->result();
        }

        public function get_inventory_report()
        {
                $query = $this->db->get('inventory_report');
                return $query->result();
        }


        public function get_transactions_info($trans_id)
        {
                $this->db->where("transactions_id", $trans_id);
                $query = $this->db->get('transactions');
                return $query->result();
        }


        public function get_transactions_items($trans_id)
        {
                $this->db->where("transactions_id", $trans_id);
                $this->db->join('products', 'products.product_id = transactions_items.product_id');
                $query = $this->db->get('transactions_items');
                return $query->result();
        } 


     public function get_products_info($prod_id)
        {
                $this->db->where("product_id", $prod_id);

                $query = $this->db->get('products');
                return $query->result();
        }

        public function get_category()
        {
                $query = $this->db->get('category');
                return $query->result();
        }

        public function get_sub_category($category_id)
        {
                $this->db->where("category_id", $category_id);
                $query = $this->db->get('sub_category');
                return $query->result();
        }

        public function  get_cart()
        {   

                $this->db->select('*');
                $this->db->from('transactions_items');
                $this->db->join('products', 'products.product_id = transactions_items.product_id');

                $this->db->where("status", "cart");
                $query = $this->db->get();
                return $query->result();
        }

        public function insert_cart($order_data)
        {
             
              $this->db->insert('transactions_items', $order_data);

        }

        public function insert_products($prod_data)
        {
             
              $this->db->insert('products', $prod_data);

              return $this->db->insert_id();
        }

         public function update_inv_img($id, $img)
        {
              $this->db->set('prod_img ', $img);
              $this->db->where('product_id', $id);
             $this->db->update('products');
        }       

        public function update_trans_tot_amt($id, $total_trans_amount, $cnt_trans_items)
        {
              $this->db->set('total_trans_amount ', $total_trans_amount);
              $this->db->set('no_items ', $cnt_trans_items);
              $this->db->where('transactions_id', $id);
             $this->db->update('transactions');
        }

        public function insert_transactions($data)
        {
                $this->db->insert('transactions', $data);

                return $this->db->insert_id();
        }

        public function deduct_stocks($prod_id, $stocks)
        {
              $this->db->set('product_stocks ',  'product_stocks -'. $stocks, FALSE);
              $this->db->where('product_id', $prod_id);
             $this->db->update('products');
        }

       public function insert_category($cat_data)
        {
             
                $this->db->insert('category', $cat_data);

                return $this->db->insert_id();
        }

        public function update_stocks($prod_id, $stocks)
        {
              $this->db->set('product_stocks ',  'product_stocks +'. $stocks, FALSE);
              $this->db->where('product_id', $prod_id);
             $this->db->update('products');
        }

        public function update_trans_items($trans_id)
        {
              $this->db->set('transactions_id ',  $trans_id);
              $this->db->set('status ',  "ordered");
              $this->db->where('status', "cart");
             $this->db->update('transactions_items');
        }

     public function del_cart($transactions_item_id)
        {
                $this->db->where("transactions_items_id", $transactions_item_id);
                $this->db->delete('transactions_items');
        }


     public function del_product($prod_id)
        {
                $this->db->where("product_id", $prod_id);
                $this->db->set('recstat ',  "deleted");
                $this->db->delete('products');
        }



}

?>
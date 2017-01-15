<?php class modelTemplate extends CI_Model {

 
        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }
 
        public function get_products_all()
        {

                 $query = $this->db->get('package');
                return $query->result();
        }


}

?>
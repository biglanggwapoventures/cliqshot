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


}

?>
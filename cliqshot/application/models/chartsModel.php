<?php class chartsModel extends CI_Model {

 
        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

         public function get_monthly_reports()
        
        {
                $this->db->select("COUNT(*) AS tot_orders, MONTH(date_ordered) AS month, SUM(package_price) AS packageTotal ");
                $this->db->from("orders");
                $this->db->join("package", "package.package_id = orders.package_id");
                $this->db->group_by("MONTH(date_ordered) ");
                $query = $this->db->get('');

                $result =  $query->result_array();

                return $result;
        }

         public function get_report_per_package()
        
        {
                $this->db->select("COUNT(*) AS tot_orders, package_name, SUM(package_price) AS packageTotal ");
                $this->db->from("orders");  
                $this->db->join("package", "package.package_id = orders.package_id");
                $this->db->group_by("package.package_id ");
                $query = $this->db->get('');

                $result =  $query->result_array();

                return $result;
        }

    public function get_report_per_photographer()
        
        {
                $this->db->select("COUNT(*) AS tot_orders, photographer_user, SUM(package_price) AS packageTotal ");
                $this->db->from("orders");  
                $this->db->join("photographer", "photographer.photographer_id = orders.photographer_id");
                $this->db->join("package", "package.package_id = orders.package_id");
                $this->db->group_by("photographer_user");
                $query = $this->db->get('');

                $result =  $query->result_array();

                return $result;
        }
}

?>
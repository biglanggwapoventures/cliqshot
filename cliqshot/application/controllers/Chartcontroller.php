<?php 	

class Chartcontroller extends CI_Controller{



		public function getDataForCharts(){

				$this->load->model('chartsModel','CM');

				$chart = $this->CM->getOrdersReportForChart();
				$data = [];

				foreach($chart as $row):
					$label = date('F',strtotime($row->date_ordered));
					$y = intval($row->packageSalesPerMonth);
					$indexLabel = $row->packagePerMonth;
					$data[] = compact('label','y','indexLabel');	

				endforeach;

				echo json_encode($data);

		}

		public function getInstanceOfPackage(){

		$this->load->model('chartsModel','CM');

		$chart = $this->CM->getMostFrequentPackageForChart();
		$data = [];

		foreach($chart as $row):
			$label = $row->package_name;
			$y = intval($row->packagePerMonth);
			$data[] = compact('label','y');	

		endforeach;

		echo json_encode($data);

		}
		

}
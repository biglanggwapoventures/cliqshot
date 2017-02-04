<?php
	require 'required/connect.inc.php';
	require 'fpdfs/fpdf.php';

	class PDF extends FPDF{

	public $branch_addr, $prod_name;
	
	function Header() {
  
			//Logo

			 //Arial bold 15
			$this->SetFont('Arial','B',15);
			//Move to the right
			$this->Cell(80);
			//Title
			$this->Cell(30,45,'Orders History',0,0,'C');
			$this->Ln(20);
			$this->Cell(30,45,'From: ', 0,0,'C');
			$this->Cell(30,45,'To: ' , 0,0,'C');

			
			//Line break
			$this->SetFont('Arial','B',8);
			$this->Ln(20);
			
				
 				 

			//* This Month's 1st day until this date 

			//$this->Cell(20,10,'Dates: '.date("Y-m-d-"). ' - '. date("Y-m-d"),0,0,'C');

				$this->Ln(20);

	} 

		// Load data
		 

		// Simple table	enrollees
		function BasicTable($data)
		{
		
		   $this->Cell(40,7,"#",1, 0,'C');
		   $this->Cell(40,7,"Total Dine Amount",1, 0,'C');
		   $this->Cell(40,7,"Customer Bill", 1, 0,'C');
		   $this->Cell(40,7,"Orders", 1, 0,'C');
		   $this->Cell(40,7,"Seat Id", 1, 0,'C');
		   $this->Cell(60,7,"Supplied Date", 1, 0,'C');

			 $this->Ln();
			 
			
			 

		$this->SetFont('Arial','', 7);

		for($i= 0; isset($data[$i]); $i++) //* Display Rows of the Table
			{
			
				$this->Cell(40,6,$data[$i]['nos'],1, 0,'C');
				$this->Cell(40,6,$data[$i]['Total_Dine_Amt'],1, 0,'C');
				$this->Cell(40,6,$data[$i]['Customer_Bill'],1, 0,'C');
				$this->Cell(40,6,'Reserve for Orders Items',1, 0,'C');
				$this->Cell(40,6,$data[$i]['Seat_Id'],1, 0,'C');
				$this->Cell(60,6,$data[$i]['Date_Ordered'],1, 0,'C');
				$this->Ln();
			} 
			
			  	//* Display Columns of the Table
				 
				
				 
			 
			
			
		}

		// Page footer
		function Footer()
		{
			// Position at 1.5 cm from bottom
			$this->SetY(-15);
			// Arial italic 8
			$this->SetFont('Arial','I',8);
			// Page number
			$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
		}

		// Better table
		function ImprovedTable($header, $data)
		{
			// Column widths
			$w = array(40, 35, 40, 45);
			// Header
			for($i=0;$i<count($header);$i++)
				$this->Cell($w[$i],7,$header[$i],1,0,'C');
			$this->Ln();
			// Data
			foreach($data as $row)
			{
				$this->Cell($w[0],6,$row[0],'LR');
				$this->Cell($w[1],6,$row[1],'LR');
				$this->Cell($w[2],6,number_format($row[2]),'LR',0,'R');
				$this->Cell($w[3],6,number_format($row[3]),'LR',0,'R');
				$this->Ln();
			}
			// Closing line
			$this->Cell(array_sum($w),0,'','T');
		}

		// Colored table
		function FancyTable($header, $data)
		{
			// Colors, line width and bold font
			$this->SetFillColor(255,0,0);
			$this->SetTextColor(255);
			$this->SetDrawColor(128,0,0);
			$this->SetLineWidth(.3);
			$this->SetFont('','B');
			// Header
			$w = array(40, 35, 40, 45);
			for($i=0;$i<count($header);$i++)
				$this->Cell($w[$i],7,$header[$i],1,0,'C',true);
			$this->Ln();
			// Color and font restoration
			$this->SetFillColor(224,235,255);
			$this->SetTextColor(0);
			$this->SetFont('');

			$fill = false;
			foreach($data as $row)
			{
				$this->Cell($w[0],6,$row[0],'LR',0,'L',$fill);
				$this->Cell($w[1],6,$row[1],'LR',0,'L',$fill);
				$this->Cell($w[2],6,number_format($row[2]),'LR',0,'R',$fill);
				$this->Cell($w[3],6,number_format($row[3]),'LR',0,'R',$fill);
				$this->Ln();
				$fill = !$fill;
			}
			// Closing line
			$this->Cell(array_sum($w),0,'','T');
		}
	}

		$pdf = new PDF(); 
 
		$pdf->AddPage();

  		$order_dine_query = mysqli_query($con, "SELECT * FROM order_dine ");

 		$i= 0;	 	

			while($order_dine_info = mysqli_fetch_assoc($order_dine_query)){
					    
 				  
				// $date_supplied=  date("M d, Y", );
				 
				// $date_supplied= strtotime($date_supplied);
				     
 					$order_dine[$i]['nos'] = 				$order_dine_info['order_dine_id'];
					$order_dine[$i]['Total_Dine_Amt'] = 	$order_dine_info['total_dine_amt'];
					$order_dine[$i]['Customer_Bill'] = 		$order_dine_info['customer_bill'];
					$order_dine[$i]['Seat_Id'] = 			$order_dine_info['seat_id'];
					$order_dine[$i]['Date_Ordered'] =		$order_dine_info['date_ordered'];
					
					$i++;
				
				}
 

		//* $pdf->Image('img/background.png',10,10, 50);
			
		//*For Background: $pdf->Image('img/background.png',0,15,-175);
		
		
		$pdf->BasicTable($enrollee_infos);

		$pdf->SetFont('Arial','', 7);

		$pdf->Cell(0,10,'Date Printed:  '. date("M d Y"));


		$pdf->Output();


?>
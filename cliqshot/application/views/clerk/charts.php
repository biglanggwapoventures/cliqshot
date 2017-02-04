

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">
 
                        </h3>

                         <div class="row">
                            
                            <div class="col-md-12">
                            
                                <div class="panel panel-default">
                        <div class="panel-heading">
                            
                            REPORTS

                        
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

                             <h2>Home Statistics</h2>
                             <table>
                                 <tr><td>Average Photos Per Album: 125
                                 <tr><td>Average Orders Per Package[PACKAGE 1, PACKAGE 2...]: 125
                                 <tr><td>Average Orders Per Week: 12
                                 <tr><td>Total Sales: P500, 000.00
                             </table>

                             <h2>Summary of Package Sale</h2>

                             <table class="table table-striped"> 
                                 
                                    <tr><td>Package Name <td> # Times Ordered <td> Total Sales
                                    <tr><td>Package 1 <td> 32 <td> P35, 000
                                    <tr><td>Package 2 <td> 30 <td> P23, 000
                                    <tr><td>Package 3 <td> 25 <td> P15, 000
                                    <tr><td>Package 4 <td> 23<td> P14, 000
                                    <tr><td>Package 5  <td> 22 <td> P12, 000
                                    <tr><td>Package 6 <td> 21 <td> P10, 000
                                    <tr><td>Package 7 <td> 21 <td> 9, 000
                                    <tr><td>Package 8 <td> 18 <td> P9, 000
                                    <tr><td>Package 9 <td>  18 <td> P9, 500
                                    <tr><td>Package 10 <td> 15<td> P3, 000
                                    <tr><td>Package 11 <td> 15 <td> P3, 000
                                    <tr><td>Package 12 <td> 13 <td> P3, 000
                                    <tr><td>Package 13 <td> 13 <td> P3, 000
                                    <tr><td>Package 14 <td> 12 <td> P2, 800
                                    <tr><td>Package 15 <td> 11 <td> P2, 500

                             </table>

                            <h2>Summary Monthly Sales</h2>
                            <table class="table table-striped table-condensed"> 
                                 
                                    <tr><td>Month <td> Sales 

                                    <?php foreach($monthlyReports as $row) { ?>

                                    <tr>
                                        <td><?php echo date("M", $row['month']); ?> 

                                        <td> P <?php echo number_format($row['tot_orders'], 2); ?>  
                                       
                                    <?php } ?>
                              
                                 
                             </table>

                            <h2>Summary Sales by Day</h2>
                            <table class="table table-striped table-condensed"> 
                                 
                                    <tr><td>Days <td> Sales 
                                    <tr><td>Monday <td> P27, 000.00  
                                    <tr><td>Tuesday <td> P36, 000.00  
                                    <tr><td>Wednesday <td> P27, 000.00  
                                    <tr><td>Thursday<td> P32, 000.00  
                                    <tr><td>Friday <td> P25, 000.00  
                                    <tr><td>Saturday <td> P12, 000.00  
                                    <tr><td>Sunday <td> P18, 000.00   
                              
                                 
                             </table>
                            
                            <h2>Summary Sales by Photographer</h2>
                            <table class="table table-striped table-condensed"> 
                                 
                                    <tr><td>Photographer <td> Sales 
                                    <tr><td>Photographer 1 <td> P27, 000.00  
                                    <tr><td>Photographer 2 <td> P36, 000.00  
                                    <tr><td>Photographer 3 <td> P27, 000.00  
                                    <tr><td>Photographer 4<td> P32, 000.00  
                                    <tr><td>Photographer 5 <td> P25, 000.00  
                               
                                 
                             </table>                              

                             <h2>Average Photos per Package</h2>

                             <table class="table table-striped"> 
                                 
                                    <tr><td>Package Name <td> # of Photos
                                    <tr><td>Package 1 <td> 132 
                                    <tr><td>Package 2 <td> 130 
                                    <tr><td>Package 3 <td> 125 
                                    <tr><td>Package 5  <td> 122 
                                    <tr><td>Package 6 <td> 121 
                                    <tr><td>Package 7 <td> 121 
                                    <tr><td>Package 8 <td> 118 
                                    <tr><td>Package 9 <td>  118 
                                    <tr><td>Package 10 <td> 115
                                    <tr><td>Package 11 <td> 115 
                                    <tr><td>Package 12 <td> 113 
                                    <tr><td>Package 13 <td> 113 
                                    <tr><td>Package 14 <td> 112 

                             </table>
                             </div>

                            </div>
                    </div>

                      </div>

                            </div>

                                                  
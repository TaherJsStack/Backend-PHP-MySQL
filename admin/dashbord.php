<?php

session_start();

if (isset($_SESSION['Admin_name'])) {
/*=============================================================== SESSION IF ==================================================*/
$nav="";
$pageTitle='Dashbord';
include 'init.php';

//print_r($_SESSION);

//======================================== Page Content =====================================================>

?>
	<h1 class="text-center">Admin Dashbord</h1>
	<div class="super_info">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="cust-total">
						<span><i class="fa fa-users"></i></span>
						<h4>clintes Total</h4>
						<a href="clintes.php"><?php echo calc_total('c_id','clints WHERE c_groupID!=1'); ?></a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="trip-total">
						<span><i class="fa fa-bank"></i></span>
						<h4>Hotels Total</h4>
						<a href="hotels.php"><?php echo calc_total('h_id','hotels'); ?></a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="hot-total">
						<span><i class="fa fa-plane"></i></span>
						<h4>Trips Total</h4>
						<a href="trips.php"><?php echo calc_total('t_id','trips'); ?></a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="oth-total">
						<span><i class="fa fa-info"></i></span>
						<h4>Subscrib Member</h4>
						<a href="clintes.php?do=Manage&page=pending"><?php echo calc_total('c_id',"clints WHERE c_name='hayef'"); ?></a>
					</div>
				</div>				
				
			</div>
		</div>
	</div>
	<div class="cst_info">
		<div class="container">
			<div>
				<div class="panel panel-default ">
					<div class="panel-heading">
						<i class="fa fa-group"></i> 
						All Customer info
                        <span><a href=""></a></span>						
					</div>
					<div class="panel-bodu">
						<ul class='cust-info'>
					<?php

						$stmt=$DB->prepare("SELECT * FROM clints,trips,clints_trips,hotels,clints_hotels 
											WHERE clints.c_id=clints_trips.c_id 
											AND trips.t_id=clints_trips.t_id 
											AND hotels.h_id=clints_hotels.h_id 
											AND clints.c_id=clints_hotels.c_id ");
						$stmt->execute();
						$cusomers=$stmt->fetchall();
					?>			
						<div class="table-responsive">
							<table class="main-Table table table-bordered">
								<tr>
									<td>Name</td>
									<td>Phone No</td>
									<td>EMail</td>
									<td>Country</td>
									<td>trip no</td>
									<td>goning to</td>
									<td>fly time</td>
									<td>Hotel Name</td>
									<td>time stay</td>
								</tr>	
					<?php
									foreach ($cusomers as $cusomer) {
										echo "<tr>";
											echo "<td>" . $cusomer['c_name'] 	. "</td>";
											echo "<td>" . $cusomer['c_phone'] 	. "</td>";
											echo "<td>" . $cusomer['c_mail'] 	. "</td>";
											echo "<td>" . $cusomer['c_country'] 	. "</td>";
											echo "<td>" . $cusomer['t_no'] 		. "</td>";
											echo "<td>" . $cusomer['t_place_go'] 	. "</td>";
											echo "<td>" . $cusomer['t_time_go'] 	. "</td>";
											echo "<td>" . $cusomer['h_name'] 	. "</td>";
											echo "<td>" . $cusomer['h_tim_stay'] . " Days</td>";
								
										echo "</tr>";
									}
					?>	
							</table>
						</div>

						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>	
	<div class="container">
		<div class="all-info">
			<div class="cust_hot">
				<div class="col-md-6">
					<div class="panel panel-default">
					  <div class="panel-heading">
					  	<h3 class='text-center'><span><i class="fa fa-bank"></i></span> Customers And Hotels</h3></div>
					  <div class="panel-body">
				  		
					   <?php 
					   	$stmt=$DB->prepare("SELECT clints.c_name,clints.c_id,hotels.h_id,hotels.h_name,hotels.h_tim_stay 
										   		FROM clints_hotels 
										   		JOIN hotels ON hotels.h_id=clints_hotels.h_id 
										   		JOIN clints ON clints.c_id=clints_hotels.h_id");
					   	$stmt->execute();
					   	$clints_hotels=$stmt->fetchall();

					   	echo "<ul>";
					   		foreach ($clints_hotels as $clints_hotels) {
					   			echo "<li>";
					   				echo "<a href='clintes.php?do=Edit&custid=".$clints_hotels['c_id']."'><span class='C_Name'>" . $clints_hotels['c_name'] . "</span></a>";
					   				echo "<a href='hotels.php?do=Edit&custid=".$clints_hotels['h_id']."' class='pull-right'><span class='H_Name'>" . $clints_hotels['h_name'] . "</span></a>";
					   			echo "</li>";
					   		}
					   	echo "<ul>";
					   ?>



					  </div>
					</div>
				</div>
			</div>	
			<div class="cust_trip"> 
				<div class="col-md-6">
					<div class="panel panel-default">
					  <div class="panel-heading">
					  	<h3 class='text-center'><span><i class="fa fa-plane"></i></span> Customers And Trpis</h3></div>
					  <div class="panel-body">
					  	
						<?php
							$stmt=$DB->prepare("SELECT clints.c_name,clints.c_id,trips.t_id,trips.t_place_go,trips.t_time_go 
												FROM clints_trips 
												JOIN clints ON clints.c_id=clints_trips.c_id 
												JOIN trips ON trips.t_id=clints_trips.t_id");
							$stmt->execute();
							$cust_trips=$stmt->fetchall();
							echo "<ul>";
							foreach ($cust_trips as $clints_trips) {
								echo "<li>";
									echo "<a href='clintes.php?do=Edit&custid=".$clints_trips['c_id']."'><span class='C_Name'>" . $clints_trips['c_name'] . "</span></a> ";
									echo "<a href='trips.php?do=Edit&custid=".$clints_trips['t_id']."' class='pull-right'><span class=' TPls_Go'>" . $clints_trips['t_place_go'] . "</span></a> ";
								echo "</li>";
							}
							echo"</lu>";
							?>			
					  </div>
					</div>
				</div>				
			</div>



		</div>
	</div>















<?php


//======================================== End Page Content =================================================>


/*==============================================================  End SESSION IF ==================================================*/
}else{
	echo "<h1>Who Are YOU And What Are You Want <h1>";
}

include 'include/templates/footer.php';


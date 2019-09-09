<?php
$pageTitle='Profile';

session_start();
if (isset($_SESSION['u_name'])) {
		  		
	$header_other='';
	include 'init.php';
//===================================================  Start Page Contant ====================================================>

?>
<div class="container">
	<div class="user">
	<h2 class="text-center"> Welcome Our Clint <strong><?php echo $_SESSION['u_name']; ?></strong></h2>
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-4">
						<?php
							$c_id=$_SESSION['c_id'] . "<br>";
							$stmt=$DB->prepare("SELECT * FROM clints WHERE c_id=? AND c_statues=1 LIMIT 1");
							$stmt->execute(array($c_id));
							$stmt->rowcount();
							$Cusid= $stmt->fetchall();
							
							//print_r($_SESSION) . "iiiiiiiiiiiiiiiiiidddddddddddddddddddddd";
							if ($stmt->rowcount()>0) {
							
							foreach ($Cusid as $user) { }
							$_SESSION['Cusid']=$user['c_id']; 
							$clint_id=@	$_SESSION['Cusid'];
							?>
							<ul class="list-unstyled">
								<h4>personal information</h4>
								<li><i class="fa fa-unlock-alt"></i> 	<span>Name</span>		: <?php echo $user['c_name'];  		?></li>
								<li><i class="fa fa-envelope-o"></i> 	<span>Age</span> 		: <?php echo $user['c_age'];  		?></li>
								<li><i class="fa fa-user"></i> 			<span>phone</span> 		: <?php echo $user['c_phone'];  	?></li>
								<li><i class="fa fa-calendar"></i> 		<span>passpor</span> 	: <?php echo $user['c_passpor'];  	?></li>
								<li><i class="fa fa-calendar"></i> 		<span>mail</span> 		: <?php echo $user['c_mail'];  		?></li>
								<li><i class="fa fa-calendar"></i> 		<span>country</span> 	: <?php echo $user['c_country'];  	?></li>
								<li><i class="fa fa-calendar"></i> 		<span>city</span> 		: <?php echo $user['c_city'];  		?></li>
								<li><i class="fa fa-calendar"></i> 		<span>streat</span> 	: <?php echo $user['c_streat'];  	?></li>
								<li><i class="fa fa-calendar"></i> 		<span>regdate</span> 	: <?php echo $user['c_regdate'];  	?></li>
								<li><a class='btn btn-success btn-xs' href='regester.php?do=Edit_Clint&custid=<?php echo $user['c_id'];?>' ><i class='fa fa-edit'></i> Edit</a>
								<a class='btn  btn-danger btn-xs confirm' href='regester.php?do=Delete_clint&custid=<?php echo $user['c_id'];?>' ><i class='fa fa-close'></i> Delete</a></li>
							</ul>
							<?php }else{
								echo "<h2> Sory Our Clint But Your Request Is Wait Approve </h2>";
								}
							?>

					</div>
					<div class="col-md-4">
						<?php
							$c_id=$_SESSION['c_id'] . "<br>";
							$stmt_t=$DB->prepare("SELECT clints_trips.*,trips.t_no ,
																		trips.t_time_go,
																		trips.t_time_back,
																		trips.t_place_go,
																		trips.t_place_back,
																		trips.t_chair_count,
																		trips.t_fave_com,
																		trips.t_class,
																		trips.t_statues,

																		clints.c_name 
													FROM clints_trips
													INNER JOIN clints ON clints_trips.c_id=clints.c_id
													INNER JOIN trips ON clints_trips.t_id=trips.t_id
													WHERE clints.c_id=? AND trips.t_statues=1");
							$stmt_t->execute(array($c_id));
							$stmt_t->rowcount();
							$row_t=$stmt_t->fetchall();
							
							//print_r($_SESSION) . "iiiiiiiiiiiiiiiiiidddddddddddddddddddddd";
							if ($stmt_t->rowcount()>0) {
							
							foreach ($row_t as $row_t) { 
							?>
							<ul class="list-unstyled">
								<h4>Trip information</h4>
								<li><i class="fa fa-unlock-alt"></i> <span>trip no</span>: <?php echo $row_t['t_no'];  ?></li>
								<li><i class="fa fa-envelope-o"></i> <span>Time go</span> : <?php echo $row_t['t_time_go'];  ?></li>
								<li><i class="fa fa-user"></i> <span>time back</span> : <?php echo $row_t['t_time_back']; ?></li>
								<li><i class="fa fa-calendar"></i> <span>place go</span>: <?php echo $row_t['t_place_go']; ?></li>
								<li><i class="fa fa-calendar"></i> <span>place back</span> : <?php echo $row_t['t_place_back'];?></li>
								<li><i class="fa fa-calendar"></i> <span>chair count</span> : <?php echo $row_t['t_chair_count'];  	?></li>
								<li><i class="fa fa-calendar"></i> <span>favoret com</span>:<?php echo $row_t['t_fave_com'];?></li>
								<li><a class='btn btn-success btn-xs' href='regester.php?do=Edit_trip&custid=<?php echo $row_t['t_id'];  ?>' ><i class='fa fa-edit'></i> Edit</a>
								<a class='btn  btn-danger btn-xs confirm' href='regester.php?do=Delete_trip&custid=<?php echo $row_t['t_id'];  ?>' ><i class='fa fa-close'></i> Delete</a></li>
							</ul>
							<?php }
							}else{
								echo "<h2> Sory Our Clint But Your trip Request Is Wait Approve </h2>";
								}
							?>
					</div>
					<div class="col-md-4">
						<?php
							$c_id=$_SESSION['c_id'] . "<br>";


							$stmt_h=$DB->prepare("SELECT clints_hotels.*,hotels.h_name ,
																		 hotels.h_rom_coun ,
																		 hotels.h_serv_kind ,
																		 hotels.h_tim_stay ,
																		 hotels.h_date_stat ,
																		 hotels.h_cuntry ,
																		 hotels.h_city ,
																		 hotels.h_stat,

																		clints.c_name,clints.c_id 
													FROM clints_hotels
													INNER JOIN clints ON clints_hotels.c_id=clints.c_id
													INNER JOIN hotels ON clints_hotels.h_id=hotels.h_id
													WHERE clints.c_id=? AND hotels.h_stat=1");
							$stmt_h->execute(array($c_id));
							$stmt_h->rowcount();
							$stmt_h->rowcount() . " rowcount";
							//print_r($_SESSION) . "iiiiiiiiiiiiiiiiiidddddddddddddddddddddd";
							if ($stmt_h->rowcount()>0) {
							
							$row_h=$stmt_h->fetchall();
							
							foreach ($row_h as $row_h) { 
							?>
							<ul class="list-unstyled">
								<h4>Hotel information</h4>
								<li><i class="fa fa-unlock-alt"></i> <span> hotel Name</span>:<?php echo $row_h['h_name'];?></li>
								<li><i class="fa fa-unlock-alt"></i> <span> hotel cuntry</span>:<?php echo $row_h['h_cuntry'];?></li>
								<li><i class="fa fa-unlock-alt"></i> <span> hotel city</span>:<?php echo $row_h['h_city'];?></li>
								<li><i class="fa fa-envelope-o"></i> <span> room Count</span>:<?php echo $row_h['h_rom_coun'];?></li>
								<li><i class="fa fa-user"></i> <span> serves</span>:<?php echo $row_h['h_serv_kind']; ?></li>
								<li><i class="fa fa-calendar"></i> <span> Time Stay</span>:<?php echo $row_h['h_tim_stay'];?></li>
								<li><i class="fa fa-calendar"></i> <span> reges Date</span>:<?php echo $row_h['h_date_stat'];?></li>
								<li><a class='btn btn-success btn-xs' href='regester.php?do=Edit_hotel&custid=<?php echo $row_h['h_id'];?>' ><i class='fa fa-edit'></i> Edit</a>
								<a class='btn  btn-danger btn-xs confirm' href='regester.php?do=Delete_hotel&custid=<?php echo $row_h['h_id'];?>' ><i class='fa fa-close'></i> Delete</a></li>
							</ul>

							<?php }
							}else{
								echo "<h2> Sory Our Clint But Your hotel Request Is Wait Approve </h2>";
								}
							?>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<a href="regester.php?do=Add_trip" class="btn btn-warning btn-lg" target="blank">Add New Travel Book</a>  
	        	<a href="regester.php?do=Add_hotel" class="btn btn-warning btn-lg" target="blank">Add New Hotel Book</a> 
			</div>
		</div>
	</div>
</div>


<?php
//=====================================================  End Page Contant ====================================================>
include 'include/templet/footer_other.php'; 
 	
}else{
	
	header("Location:index.php");
}







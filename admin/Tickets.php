<?php

session_start();

if (isset($_SESSION['Admin_name'])) {
/*========================================== SESSION IF ==================================================*/
$nav="";
$pageTitle='tickets';
include 'init.php';

//print_r($_SESSION);

//====================================================================
// [ Desplay All information for Specific Client   ] 
//====================================================================


/*==========================================  Ddte  ==================================================*/
/*
$d=date("d/m/y");
echo "<br><h1>Date " . $d . " </h1> <br>";
/*==========================================  End Ddte  ==================================================*/

?>

<h1 class="text-center"> Search for clint</h1>

<div class="ticket">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<div class="panel panel-default">
				  <div class="panel-heading">
				  	<?php  
						if (isset($_POST['search'])) {
							$rsearch=$_POST['search'];
							$search=preg_replace("#[a-z]#i","", $rsearch);	
						}
						$stmt=$DB->prepare("SELECT c_id,c_name FROM clints WHERE c_passpor=? LIMIT 1");							
						$stmt->execute(array(@$search));
						$sows=$stmt->fetch();

				  	 ?>
				  	<h3><i class="fa fa-user"></i> Client Name <strong>
				  		
				  		<!--<?php //echo "<a href='clintes.php?do=Edit&custid=".$sows['c_id']."'>" . $sows['c_name'] . "</a>";?>-->
				  		<?php echo $cname=isset($_POST['search']) ? "<a href='clintes.php?do=Edit&custid=".$sows['c_id']."'>" . $sows['c_name'] . "</a>" :'.......';?>
				  			
				  		</strong></h3></div>
				  <div class="panel-body">
					<form action="<?php $_SERVER['PHP_SELF']?>" method="POST" class="search">
						<!--======================= search ======================================-->			
						<div class="form-group ">
							<div class="">
								<input 	type="number" 
										name="search" 
										class="form-control"
										required="required" 
										autocomplete="off" 
										placeholder="clint search by passport no">
							</div>
						</div>
						<!--======================== End  search ====================-->		
						<!--==================== sbmit ==========================-->						
						<div class="form-group ">
							<label class="control-label"></label>
							<div class="">		
								<input 	type="submit" class="btn btn-primary" value="Search">
							</div>
						</div>
						<!--============== End submit ==============================-->			
					</form>

					<?php
						if (isset($_POST['search'])) {
							$rsearch=$_POST['search'];
							$search=preg_replace("#[a-z]#i","", $rsearch);	
						}
						$stmt=$DB->prepare("SELECT * FROM clints WHERE c_passpor=? LIMIT 1");							
						$stmt->execute(array(@$search));
						$sows=$stmt->fetchall();
						//echo $sows;
					if ($stmt->rowcount()>0) {
							foreach ($sows as $sow) {}
							?>
								<ul class="list-unstyled">
									<li><i class="fa fa-calendar"></i> 		<span>ID</span> 		: <?php echo $sow['c_id'];  		?></li>
									<li><i class="fa fa-unlock-alt"></i> 	<span>Name</span>		: <?php echo $sow['c_name'];		?></li>
									<li><i class="fa fa-envelope-o"></i> 	<span>Email</span> 		: <?php echo $sow['c_mail'];  		?></li>
									<li><i class="fa fa-user"></i> 			<span>Phone</span> 		: <?php echo $sow['c_phone'];  		?></li>
									<li><i class="fa fa-calendar"></i> 		<span>passpor</span> 	: <?php echo $sow['c_passpor'];  	?></li>
									<li><i class="fa fa-calendar"></i> 		<span>Country</span> 	: <?php echo $sow['c_country'];  	?></li>
									<li><i class="fa fa-calendar"></i> 		<span>City</span> 		: <?php echo $sow['c_city'];  		?></li>
									<li><i class="fa fa-calendar"></i> 		<span>Streat</span> 	: <?php echo $sow['c_streat'];  	?></li>
									<li><i class="fa fa-calendar"></i> 		<span>regesterd</span> 	: <?php echo $sow['c_regdate'];  	?></li>
									<li><i class="fa fa-calendar"></i> 		<span>Statues</span> 	: <?php echo $sow['c_statues'];  	;?></li>	
								</ul>
							    <?php
							   
					}else{    //=====================>     End Of Search statment if rowcount > 0
					  	echo "<h3 class='text-center alert-danger'> please Inter Passport No Valide </h3>";
					  }?>
					</div>				  
				</div>
			</div>
			<div class="col-sm-6">
			    <?php 
					$custid= isset($_GET['custid'])&&is_numeric($_GET['custid']) ? intval($_GET['custid']):0;
					$stmt_t=$DB->prepare("SELECT clints_trips.*,trips.t_no ,trips.t_place_go,clints.c_name 
											FROM clints_trips
											INNER JOIN clints ON clints_trips.c_id=clints.c_id
											INNER JOIN trips ON clints_trips.t_id=trips.t_id
											WHERE clints.c_id=?");
					$stmt_t->execute(array($custid));
					$stmt_t->rowcount();
					$row_t=$stmt_t->fetchall();

					$stmt_h=$DB->prepare("SELECT clints_hotels.*,hotels.h_name ,clints.c_name,clints.c_id 
											FROM clints_hotels
											INNER JOIN clints ON clints_hotels.c_id=clints.c_id
											INNER JOIN hotels ON clints_hotels.h_id=hotels.h_id
											WHERE clints.c_id=?");
					$stmt_h->execute(array($custid));
					$stmt_h->rowcount();
					$row_h=$stmt_h->fetchall();


						foreach ($row_t as $stmtee_t) {}
						foreach ($row_h as $stmtee_h) {}
							
						@$clint_name=isset($stmtee_t['c_name']) ? $stmtee_t['c_name'] :$stmtee_h['c_name'];
						
				?>
				<div class="panel panel-default ">
				  <div class="panel-heading">
				  	<h3><i class="fa fa-user"></i> Clint Name <strong><?php 
				  		echo $clint_name=isset($clint_name)?"<a href='clintes.php?do=Edit&custid=".$custid."'>" . @$clint_name ."</a>" : "...." ?></strong></h3></div>
				  <div class="panel-body ">					
						<ul class='list-unstyled '>
						<?php	
						if ($stmt_t->rowcount()>0 || $stmt_h->rowcount()>0) {
							foreach ($row_t as $stmte_t) {
								echo "<li> <span><i class='fa fa-bank'></i> " . $stmte_t['t_place_go'] . " </span>" ;
								echo '<i class="fa fa-user"></i> ' . $stmte_t['c_name'] . "</li>";
							}
							foreach ($row_h as $stmte_h) {
								echo "<li><span><i class='fa fa-plane'></i> " . $stmte_h['h_name'] . " </span>";
								echo '<i class="fa fa-user"></i> ' . $stmte_h['c_name'] . "</li>";
							}
						}else{
							echo "<h3>You Must Chuse <a href='clintes.php'><strong> Clint </strong></a> To See All Trips For</h3>";
						}
						?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
/*==========================================  Count Visitors ==================================================*/

$Count=$DB->prepare("SELECT * FROM visitors_count");
$Count->execute();
//$rowcount=$Count->fetch();
//$counts=$Count->fetch();
//echo $counts['count'];
while ($row=$Count->fetch()) {
	$curunt_rowcount=$row['count'];
	$new_count=$curunt_rowcount+1;

	$Count=$DB->prepare("UPDATE visitors_count SET count=$new_count ");
	$Count->execute();

}

$Counts=$DB->prepare("SELECT * FROM visitors_count");
$Counts->execute();
$Counts=$Counts->fetch();
echo "<div class='container alert-success text-center'><strong><h1> Visitors Count " . $Counts['count'] . "</h1></strong></div>";


/*==========================================  End Count Visitors ==================================================*/



/*==========================================  End SESSION IF ==================================================*/

}else{
	echo "<h1>Who Are YOU And What Are You Want <h1>";
}

include 'include/templates/footer.php';


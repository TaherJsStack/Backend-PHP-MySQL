<?php

session_start();

if (isset($_SESSION['Admin_name'])) {
/*========================================== SESSION IF ==================================================*/
$nav="";
$pageTitle='Hotels';
include 'init.php';

//print_r($_SESSION);

//====================================================================
// [ Add , Delete , Edite , Manage , Update , Insert , States   ] 
//====================================================================

$do=isset($_GET['do']) ? $_GET['do'] : 'Manage';

//echo $do;

if ($do=='Manage') {
	echo "<h1 class='text-center'>Hotels Manage Page</h1>";

	$sstmt=$DB->prepare("SELECT * FROM hotels  ORDER BY h_id AND h_stat ASC");
	$sstmt->execute();
	$hotels=$sstmt->fetchall();
		?>			
		<div class="container">
			<div class="table-responsive">
				<table class="main-Table table table-bordered">
					<tr>
						<td>H ID</td>
						<td>H NAME</td>
						<td>room count</td>
						<td>serv kind</td>
						<td>time stay</td>
						<td>regstar date</td>
						<td>Controls</td>
					</tr>
					<?php
					foreach ($hotels as $hotel) {
						echo "<tr>";
							echo "<td>" . $hotel['h_id'] 		. "</td>";
							echo "<td>" . $hotel['h_name'] 		. "</td>";
							echo "<td>" . $hotel['h_rom_coun'] 	. "</td>";
							echo "<td>" . $hotel['h_serv_kind'] 	. "</td>";
							echo "<td>" . $hotel['h_tim_stay'] 	. "</td>";
							echo "<td>" . $hotel['h_date_stat'] . "</td>";
							///////////////////////////////////////////////////	
							echo "<td>";
								echo " <a class='btn btn-success btn-xs' href='?do=Edit&custid=".$hotel['h_id']."' ><i class='fa fa-edit'></i> Edit</a>";
								echo " <a class='btn  btn-danger btn-xs confirm' href='?do=Delete&custid=".$hotel['h_id']."' ><i class='fa fa-close'></i> Delete</a>";

									if ($hotel['h_stat']==0) {
										echo " <a class='btn  btn-info btn-xs' href='?do=Approve&custid=".$hotel['h_id']."'><i class='fa fa-info'></i> Approve</a>";	
									}else{
										echo " <a class='btn  btn-success btn-xs' href='#'><i class='fa fa-info'></i> Approved</a>";	
									}
							echo "</td>";
							////////////////////////////////////////////////////
						echo "</tr>";
						}
					?>	
				</table>
			</div>
				<a href="?do=Add" class="btn btn-primary"><i class='fa fa-plus'></i> Add New Hotel Book</a>
		</div>
<?php

//				<!--======================= Manage ======================================-->			

}elseif ($do=='Add') {
	echo "<h1 class='text-center'>Hotels Add Page</h1>";

?>	
		<div class="Add">
			<div class="container">
				<form class="form-horizontal" action="?do=Insert" method="POST">
					<!--======================= h_name ======================================-->			
					<div class="form-group ">
						<label class="col-sm-2 control-label">Hotel Name</label>
						<div class="col-sm-4">
							<input 	type="text" 
									name="h_name" 
									class="form-control"
									required="required" 
									placeholder="Hotel Name">
						</div>
					</div>
					<!--======================== End  h_name ====================-->					
					<!--==================== h_rom_coun ==========================-->			
					<div class="form-group ">
						<label class="col-sm-2 control-label">Room Count</label>
						<div class="col-sm-4">							
							<input 	type="number" 
									name="h_rom_coun" 
									class="form-control"
									required="required" 
									placeholder="Room Count">
						</div>
					</div>
					<!--================= End h_rom_coun =============================-->
					<!--==================== h_serv_kind ==========================-->			
					<div class="form-group ">
						<label class="col-sm-2 control-label">Serves Kind</label>
						<div class="col-sm-4">							
							<input 	type="text" 
									name="h_serv_kind" 
									class="form-control"
									required="required" 
									placeholder=" Serves Kind That you Want">
						</div>
					</div>
					<!--================= End 	h_serv_kind =============================-->
					<!--==================== 	h_tim_stay ==========================-->			
					<div class="form-group ">
						<label class="col-sm-2 control-label">Time Stay</label>
						<div class="col-sm-4">							
							<input 	type="text" 
									name="h_tim_stay" 
									class="form-control"
									required="required" 
									placeholder=" time that you will stay by day ">
						</div>
					</div>
					<!--================= End h_tim_stay =============================-->
					<!--==================== 	clint id ==========================-->			
					<div class="form-group ">
						<label class="col-sm-2 control-label">Clint Passpor</label>

						<?php 

						$stmt=$DB->prepare("SELECT * FROM clints WHERE c_name!='hayef' ");
						$stmt->execute();
						$row=$stmt->fetchall();

						?>
						<div class="col-sm-4">							
							<select name="clint_id" class="form-control" required="required"> 
									<?php 
										foreach($row as $ro){
											echo "<option value=". $ro['c_id'] .">". $ro['c_name'] ."</option>";
										}
								?>" >
							</select>		
						</div>
					</div>
					<!--================= End clint id =============================-->

					<!--==================== sbmit ==========================-->						
					<div class="form-group ">
						<label class="col-sm-2 control-label"></label>
						<div class="col-sm-4">		
							<input 	type="submit" class="btn btn-primary" value="ADD New Hotel">
						</div>
					</div>
					<!--============== End submit ==============================-->			
				</form>
			</div>
		</div>

		<?php

//=========================== End Add Page ==========================================>

}elseif ($do=='Insert') {
	echo "<h1 class='text-center'>Hotels Insert Page</h1>";

if ($_SERVER["REQUEST_METHOD"]=='POST') {

		$h_name 		=$_POST['h_name'];
		$h_rom_coun 	=$_POST['h_rom_coun'];
		$h_serv_kind 	=$_POST['h_serv_kind'];
		$h_tim_stay 	=$_POST['h_tim_stay'];
			
		//echo $h_name," ",$h_rom_coun," ",$h_serv_kind," ",$h_tim_stay;

		$stmt=$DB->prepare("SELECT h_name,h_rom_coun,h_serv_kind,h_tim_stay FROM hotels  
								WHERE h_name=? AND h_rom_coun=? AND h_serv_kind=? AND h_tim_stay=? LIMIT 1");							
		$stmt->execute(array($h_name,$h_rom_coun,$h_serv_kind,$h_tim_stay));
		//	echo $stmt->rowcount();
		if ($stmt->rowcount()>0) {
			echo "<div class='container alert alert-success'>this Book Is Really Exist</div>";
				//=====================================================>
		 		?><div class='container'>
		 				<div class="row">
		 					<div class="col-sm-6">
				 				<a href="trips.php?do=Add"><div class="btn btn-primary pull-right btn-lg">Add Trip</div></a>	 						
		 					</div>
		 					<div class="col-sm-6">
			 					<a href="clintes.php?do=Add"><div class="btn btn-primary btn-lg">Add Clintes</div></a>
			 				</div>
						</div>
		 			</div>   
		 		<?php
				//======================================================>
		}else{
			$ins=$DB->prepare("INSERT INTO hotels (h_name,h_rom_coun,h_serv_kind,h_tim_stay,h_date_stat,h_stat)
						VALUES (:h_name,:h_rom_coun,:h_serv_kind,:h_tim_stay, now(), 0)");
			$ins->execute(array(
				'h_name' 		=> $h_name, 
				'h_rom_coun' 	=> $h_rom_coun, 
				'h_serv_kind' 	=> $h_serv_kind, 
				'h_tim_stay' 	=> $h_tim_stay, 
			 
			));

				//=======================================================
				$c_id=$_POST['clint_id'];

				$stmtt=$DB->prepare("SELECT c_id FROM clints WHERE c_id=? ");
				$stmtt->execute(array($c_id));
				$roww=$stmtt->fetch();
	
					//echo "Clint id you Choice is" . $roww['c_id'];
		
				
				//========================================================

				$stmt=$DB->prepare('SELECT h_id FROM hotels  WHERE h_name=? AND h_rom_coun=? AND h_serv_kind=? AND h_tim_stay=?');
				$stmt->execute(array($h_name,$h_rom_coun,$h_serv_kind,$h_tim_stay));
				$stmt->rowcount();
				$hotell=$stmt->fetch();
			
			//	echo $hotell['h_id'] . "<br>";    //   For Test
			
			//	echo $hotell['h_id'] . " The row t_id <br>";    //   For Test
				$_SESSION['c_id']=$roww['c_id'];
				$_SESSION['hotelid']=$hotell['h_id'];
/*				
				print_r($_SESSION['hotelid']) . " " . " The session <br>";      //   For Test
				print_r($_SESSION) . " " . " The clint session <br>";		    //   For Test
*/


				$hot_id=$_SESSION['hotelid'];
				//$cust_id=$_SESSION['Cusid'];
				//$clint_id=$_SESSION['c_id'];
				
				$id_iss='';
				if (isset($_SESSION['Cusid'])) {
					$id_iss=$_SESSION['Cusid'];
				}else{
					$id_iss=$_SESSION['c_id'];
				}
//				echo $hot_id . " " . $cust_id . "<br>";    //   For Test

				$stmt=$DB->prepare("INSERT INTO clints_hotels(c_id, h_id) VALUES (:Zcust_id,:Zhot_id)");
				$stmt->execute(array(
					'Zcust_id'=> $id_iss,
					'Zhot_id'=> $hot_id,
				));
				echo "<div class='container alert alert-success'>You Have " . $stmt->rowcount()  . "<strong> INSERT </strong> One Recourd</div>";
				//=====================================================>
		 		?><div class='container'>
		 				<div class="row">
		 					<div class="col-sm-6">
				 				<a href="trips.php?do=Add"><div class="btn btn-primary pull-right btn-lg">Add Trip</div></a>	 						
		 					</div>
		 					<div class="col-sm-6">
			 					<a href="?do=Add"><div class="btn btn-primary btn-lg">Add Hotel Book Again</div></a>
			 				</div>
						</div>
		 			</div>   
		 		<?php
				//======================================================>
				//$back=$_SERVER["HTTP_REFERER"];	  
				//header("Refresh:6 ,$back");
				//$back=$_SERVER['HTTP_REFERR'];
			//	header("Refresh:4 ,$back");
				//echo "<div class='container alert alert-success'>You Have " . $ins->rowcount() . "<strong> INSERT </strong> One Recourd</div>";
				//header("Refresh:3,hotel.php?do=Add");
				//redirctHome($message,'back',2);

		}
	}else{
		//echo "You Dont Have Access to inter Here";  // redirect home
		header("Location:index.php");
	}

//=========================== End Insert Page ==========================================>

}elseif ($do=='Edit') {
	echo "<h1 class='text-center'>Hotels Edite Page</h1>";


	$custid= isset($_GET['custid'])&&is_numeric($_GET['custid']) ? intval($_GET['custid']):0;

	$stmt=$DB->prepare("SELECT * FROM hotels WHERE h_id=? LIMIT 1");
	$stmt->execute(array($custid));
	$row=$stmt->fetch();
		
	if ($stmt->rowcount()>0) {
		//echo "string";
		?>	
		<div class="Edit">
			<div class="container">
				<form class="form-horizontal" action="?do=Update" method="POST">
					<!--======================= h_id ID ======================================-->			
					<div class="form-group ">
							<input 	type="hidden" 
									name="h_id" 
									value="<?php  echo $row['h_id']; ?>">
					</div>
					<!--======================== End h_id ID ====================-->
					<!--======================= h_name ======================================-->			
					<div class="form-group ">
						<label class="col-sm-2 control-label">Hotel name</label>
						<div class="col-sm-4">
							<input 	type="text" 
									name="h_name" 
									class="form-control"
									required="required" 
									value="<?php  echo $row['h_name']; ?>">
						</div>
					</div>
					<!--======================== End  h_name ====================-->					
					<!--==================== h_rom_coun ==========================-->			
					<div class="form-group ">
						<label class="col-sm-2 control-label">Room count</label>
						<div class="col-sm-4">							
							<input 	type="number" 
									name="h_rom_coun" 
									class="form-control"
									required="required" 
									value="<?php  echo $row['h_rom_coun']; ?>">
						</div>
					</div>
					<!--================= End h_rom_coun =============================-->
					<!--==================== h_serv_kind ==========================-->			
					<div class="form-group ">
						<label class="col-sm-2 control-label">Serve Kind</label>
						<div class="col-sm-4">							
							<input 	type="text" 
									name="h_serv_kind" 
									class="form-control"
									required="required" 
									value="<?php  echo $row['h_serv_kind']; ?>">
						</div>
					</div>
					<!--================= End 	h_serv_kind =============================-->
					<!--==================== 	h_tim_stay ==========================-->			
					<div class="form-group ">
						<label class="col-sm-2 control-label">Time Stay</label>
						<div class="col-sm-4">							
							<input 	type="text" 
									name="h_tim_stay" 
									class="form-control"
									required="required" 
									value="<?php  echo $row['h_tim_stay']; ?>">
						</div>
					</div>
					<!--================= End h_tim_stay =============================-->
					<!--==================== sbmit ==========================-->						
					<div class="form-group ">
						<label class="col-sm-2 control-label"></label>
						<div class="col-sm-4">	
							<?php
								if ($row['h_reg_stat']==0) {
									echo " <a class='btn  btn-info' href='?do=Approve&custid=".$row['h_id']."'><i class='fa fa-info'></i> Approve</a>";	
								}else{
									echo " <a class='btn  btn-success ' href='#'><i class='fa fa-info'></i> Approved</a>";}

							?>
							<input 	type="submit" class="btn btn-primary" value="Update Hotel">
						</div>
					</div>
					<!--============== End submit ==============================-->			
				</form>
			</div>
		</div>

		<?php
	}else{
		header("Refresh:4,index.php");
	}

//=========================== End Edit Page ==========================================>
}elseif ($do=='Update') {
	echo "<h1 class='text-center'>Hotels Update Page</h1>";


	//if ($_SERVER["REQUEST_METHOD"]=='POST') {

			$h_id   		=$_POST['h_id'];
			$h_name			=$_POST['h_name']; 
			$h_rom_coun		=$_POST['h_rom_coun'];  
			$h_serv_kind	=$_POST['h_serv_kind'];  
			$h_tim_stay		=$_POST['h_tim_stay']; 
			
		$h_name ;//." ".$h_rom_coun." " .$h_serv_kind." ".$h_tim_stay;
			
		$srorrs=array();

		if (empty($h_name)) 		{ $srorrs[]="is <strong> Empty </strong> h_name" ;}	
		if (empty($h_rom_coun)) 	{ $srorrs[]="is <strong> Empty </strong> h_rom_coun" ;}	
		if (empty($h_serv_kind)) 	{ $srorrs[]="is <strong> Empty </strong> h_serv_kind" ;}	
		if (empty($h_tim_stay)) 	{ $srorrs[]="is <strong> Empty </strong> h_tim_stay" ;}	

		if (!empty($srorrs)) {
			echo "<div class='container alert alert-danger'> <strong>" . $srorrs . "</strong></div>" ;
		}else{

			$stmt=$DB->prepare("UPDATE hotels SET 
				h_name=?, h_rom_coun=?, h_serv_kind=?, h_tim_stay=? WHERE h_id=?");
			
			$stmt->execute(array($h_name, $h_rom_coun,$h_serv_kind,$h_tim_stay,$h_id));
			$stmt->rowcount();
			echo $message="<div class='container alert alert-success'>You Have ".$stmt->rowcount()." Recourd <strong>Updated</strong>";
			//$back=$_SERVER["HTTP_REFERER"];	  
			//header("Refresh:4 ,$back");			
			//header("Refresh:4,?do=Update");
			//redirctHome($message,'back',2);

		}// END IF !empty($srorrs[])

	//}// END $_SERVER["REQUEST_METHOD"]=='POST'


//=========================== End Update Page ==========================================>
}elseif ($do=='Delete') {
	echo "<h1 class='text-center'>Hotels Delete Page</h1>";


	$custid= isset($_GET['custid'])&&is_numeric($_GET['custid']) ? intval($_GET['custid']):0;
	//echo $custid;

	$stmt=$DB->prepare("DELETE FROM `hotels` WHERE `h_id` = ?");
	$stmt->execute(array($custid));
	if($stmt->rowcount()>0){
		echo $message="<div class='container alert alert-success'>You Have <strong> DELETE </strong> One Recourd</div>";
		//redirctHome($message,'back',2);
		$back=$_SERVER["HTTP_REFERER"];	  
		header("Refresh:3 ,$back");
	}
//=========================== End Update Page ==========================================>
}elseif ($do=='Approve') {

	$custid= isset($_GET['custid'])&&is_numeric($_GET['custid']) ? intval($_GET['custid']):0;
	//echo $custid;

	$stmt=$DB->prepare("UPDATE hotels SET h_stat=1 WHERE h_id=?");
	$stmt->execute(array($custid));

	if($stmt->rowcount()>0){
		echo $message="<div class='container  alert alert-success'>You Have <strong> Approved </strong> One Customer</div>";
		//redirctHome($message,'back',1);
		$back=$_SERVER["HTTP_REFERER"];	  
		header("Refresh:3 ,$back");
	}

	

}// End    ===>  And All If Satuation




/*==========================================  End SESSION IF ==================================================*/
}else{
	echo "<h1>Who Are YOU And What Are You Want <h1>";
}

include 'include/templates/footer.php';


<?php

session_start();

if (isset($_SESSION['Admin_name'])) {
/*========================================== SESSION IF ==================================================*/
$nav="";
$pageTitle='Trips';
include 'init.php';

//print_r($_SESSION);

//====================================================================
// [ Add , Delete , Edite , Manage , Update , Insert , States   ] 
//====================================================================

$do=isset($_GET['do']) ? $_GET['do'] : 'Manage';

//echo $do;

if ($do=='Manage') {
	echo "<h1 class='text-center'>Trips Manage Page</h1>";

	$sstmt=$DB->prepare("SELECT * FROM trips  ORDER BY t_id AND t_statues ASC");
	$sstmt->execute();
	$trip=$sstmt->fetchall();
		?>			
		<div class="container">
			<div class="table-responsive">
				<table class="main-Table table table-bordered">
					<tr>
						<td>T ID</td>
						<td>T NO</td>
						<td>T Go</td>
						<td>time back</td>
						<td>place go</td>
						<td>place back</td>
						<td>chair count</td>
						<td>fave com</td>
						<td>class</td>
						<td>regstar date</td>
						<td>Controls</td>
					</tr>
					<?php
					foreach ($trip as $trip) {
						echo "<tr>";
							echo "<td>" . $trip['t_id'] 		. "</td>";
							echo "<td>" . $trip['t_no'] 		. "</td>";
							echo "<td>" . $trip['t_time_go'] 	. "</td>";
							echo "<td>" . $trip['t_time_back'] 	. "</td>";
							echo "<td>" . $trip['t_place_go'] 	. "</td>";
							echo "<td>" . $trip['t_place_back'] . "</td>";
							echo "<td>" . $trip['t_chair_count'] . "</td>";
							echo "<td>" . $trip['t_fave_com'] 	. "</td>";
							echo "<td>" . $trip['t_class'] 		. "</td>";
							echo "<td>" . $trip['t_reg_date'] 	. "</td>";
							///////////////////////////////////////////////////	
							echo "<td>";
								echo " <a class='btn btn-success btn-xs' href='?do=Edit&custid=".$trip['t_id']."' ><i class='fa fa-edit'></i> Edit</a>";
								echo " <a class='btn  btn-danger btn-xs confirm' href='?do=Delete&custid=".$trip['t_id']."' ><i class='fa fa-close'></i> Delete</a>";

									if ($trip['t_statues']==0) {
										echo " <a class='btn  btn-info btn-xs' href='?do=Approve&custid=".$trip['t_id']."'><i class='fa fa-info'></i> Approve</a>";	
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
				<a href="?do=Add" class="btn btn-primary"><i class='fa fa-plus'></i> Add New Trip</a>
		</div>
<?php

//				<!--======================= Manage ======================================-->			


//=========================== End Manage Page ==========================================>
}elseif ($do=='Add') {
	echo "<h1 class='text-center'>Trips  Add Page</h1>";

		?>	
		<div class="Add">
			<div class="container">
				<form class="form-horizontal" action="?do=Insert" method="POST">
					<!--======================= t_no ======================================-->			
					<div class="form-group ">
						<label class="col-sm-2 control-label">Trip NO</label>
						<div class="col-sm-4">
							<input 	type="text" 
									name="t_no" 
									class="form-control"
									required="required" 
									placeholder="t_no">
						</div>
					</div>
					<!--======================== End  t_no ====================-->					
					<!--==================== t_time_go ==========================-->			
					<div class="form-group ">
						<label class="col-sm-2 control-label">Time Go</label>
						<div class="col-sm-4">							
							<input 	type="date" 
									name="t_time_go" 
									class="form-control"
									required="required" 
									placeholder="TTim_GoTTim_Go">
						</div>
					</div>
					<!--================= End t_time_go =============================-->
					<!--==================== t_time_back ==========================-->			
					<div class="form-group ">
						<label class="col-sm-2 control-label">Time Back</label>
						<div class="col-sm-4">							
							<input 	type="date" 
									name="t_time_back" 
									class="form-control"
									required="required" 
									placeholder=" t_time_back">
						</div>
					</div>
					<!--================= End 	t_time_back =============================-->
					<!--==================== 	t_place_go ==========================-->			
					<div class="form-group ">
						<label class="col-sm-2 control-label">Pleas Go </label>
						<div class="col-sm-4">							
							<script type= "text/javascript" src = "<?php echo $js; ?>countries.js"></script>
								    <select id="country" name ="t_place_go" class="form-control" required="required"></select>
							<script language="javascript">
								populateCountries("country", "state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
								populateCountries("country2");
								populateCountries("country2");
							</script>
						</div>
					</div>

					<!--================= End t_place_go =============================-->
					<!--==================== t_place_back ==========================-->			
					<div class="form-group ">
						<label class="col-sm-2 control-label">Pleas Back</label>
						<div class="col-sm-4">							
							
							<script type= "text/javascript" src = "<?php echo $js; ?>countries.js"></script>
								    
								    <select id="country2"  name ="t_place_back" class="form-control" required="required"></select>
							<script language="javascript">
								populateCountries("country", "state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
								populateCountries("country2");
								populateCountries("country2");
							</script>

						</div>
					</div>
					<!--================= End t_place_back =============================-->
					<!--==================== t_chair_count ==========================-->			
					<div class="form-group ">
						<label class="col-sm-2 control-label">Chair Count</label>
						<div class="col-sm-4">							
							<input 	type="number" 
									name="t_chair_count" 
									class="form-control"
									placeholder="t_chair_count">
						</div>
					</div>
					<!--================= End t_chair_count =============================-->
					<!--==================== t_fave_com ==========================-->			
					<div class="form-group ">
						<label class="col-sm-2 control-label">Company Favoret</label>
						<div class="col-sm-4">							
							<input 	type="text" 
									name="t_fave_com" 
									class="form-control"
									placeholder="t_fave_com">
						</div>
					</div>
					<!--================= End t_fave_com =============================-->
					<!--==================== t_class ==========================-->			
					<div class="form-group ">
						<label class="col-sm-2 control-label">Class</label>
						<div class="col-sm-4">			
							<select name="t_class" class="form-control">
								<option value="0" selected> ...  </option>
								<option value="1">first	</option>
								<option value="2">second</option>
								<option value="3">theard</option>
								<option value="4">forth </option>
							</select>				

						</div>
					</div>
					<!--================= End t_class =============================-->
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
							<input 	type="submit" class="btn btn-primary" value="ADD New Trip">
						</div>
					</div>
					<!--============== End submit ==============================-->			
				</form>
			</div>
		</div>

		<?php

//=========================== End Add Page ==========================================>
}elseif ($do=='Insert') {
	echo "<h1 class='text-center'>Trips  Insert Page</h1>";

	if ($_SERVER["REQUEST_METHOD"]=='POST') {

		$T_NO 		=$_POST['t_no'];
		$TTim_Go 	=$_POST['t_time_go'];
		$TTim_Back 	=$_POST['t_time_back'];
		$TPls_Go 	=$_POST['t_place_go'];
		$TPls_Back 	=$_POST['t_place_back'];
		$TChair_Cou =$_POST['t_chair_count'];
		$TCom_Fave 	=$_POST['t_fave_com'];
		$T_Class 	=$_POST['t_class'];
			
		//echo $T_NO," ",$TTim_Go," ",$TTim_Back," ",$TPls_Go," " ,$TPls_Back," ",$TChair_Cou," ",$TCom_Fave," ",$T_Class;

		$stmt=$DB->prepare("SELECT t_no,t_time_go,t_time_back,t_place_go,t_place_back,t_class FROM trips  
			WHERE t_no=? AND t_time_go=? AND t_time_back=? AND t_place_go=? AND t_place_back=? AND t_class=? LIMIT 1");							
		$stmt->execute(array($T_NO,$TTim_Go,$TTim_Back,$TPls_Go,$TPls_Back,$T_Class));
		//	echo $stmt->rowcount();
		if ($stmt->rowcount()>0) {
			echo "<div class='container alert alert-success'>this Book Is Really Exist</div>";
				//=====================================================>
		 		?><div class='container'>
		 				<div class="row">
		 					<div class="col-sm-6">
				 				<a href="hotels.php?do=Add"><div class="btn btn-primary pull-right btn-lg">Add Hotel</div></a>	 						
		 					</div>
		 					<div class="col-sm-6">
			 					<a href="?do=Add"><div class="btn btn-primary btn-lg">Add New Trip Again</div></a>
			 				</div>
						</div>
		 			</div>   
		 		<?php
				//======================================================>
		}else{
			$ins=$DB->prepare("INSERT INTO trips (t_no,t_time_go,t_time_back,t_place_go,t_place_back,t_chair_count,t_fave_com,   t_class,t_reg_date,t_statues)
						VALUES (:t_no,:t_time_go,:t_time_back,:t_place_go,:t_place_back,:t_chair_count,:t_fave_com, :t_class, now(), 0)");
			$ins->execute(array(
				't_no' 			=> $T_NO, 
				't_time_go' 	=> $TTim_Go, 
				't_time_back' 	=> $TTim_Back, 
				't_place_go' 	=> $TPls_Go, 
				't_place_back' 	=> $TPls_Back, 
				't_chair_count'	=> $TChair_Cou, 
				't_fave_com' 	=> $TCom_Fave, 
				't_class' 		=> $T_Class, 
			));

				$stmt=$DB->prepare('SELECT t_id FROM trips  WHERE t_no=? AND t_time_go=? AND t_time_back=? AND t_place_go=? AND t_place_back=? ');
				$stmt->execute(array($T_NO,$TTim_Go,$TTim_Back,$TPls_Go,$TPls_Back));
				$stmt->rowcount();
				$tripp=$stmt->fetch();
			


				//=======================================================
			 	$c_id=$_POST['clint_id'];

				$stmtt=$DB->prepare("SELECT c_id FROM clints WHERE c_id=? ");
				$stmtt->execute(array($c_id));
				$roww=$stmtt->fetch();
	
					//echo "Clint id you Choice is" . $roww['c_id'];
		
				
				//========================================================

			//	echo $tripp['t_id'] . "<br>";    //   For Test
			
			//	echo $tripp['t_id'] . " The row t_id <br>";    //   For Test
				$_SESSION['c_id']=$roww['c_id'];
				$_SESSION['tripid']=$tripp['t_id'];
/*
				print_r($_SESSION['tripid']) . " " . " The session <br>";      //   For Test
				print_r($_SESSION) . " " . " The clint session <br>";		    //   For Test
*/
				$trip_id=$_SESSION['tripid'];
				//$cust_id=$_SESSION['Cusid'];

				$id_iss='';
				if (isset($_SESSION['Cusid'])) {
					$id_iss=$_SESSION['Cusid'];
				}else{
					$id_iss=$_SESSION['c_id'];
				}

//				echo $trip_id . " " . $cust_id . "<br>";    //   For Test

				$stmt=$DB->prepare("INSERT INTO clints_trips(c_id, t_id) VALUES (:Zcust_id,:Ztrip_id)");
				$stmt->execute(array(
					'Zcust_id'=> $id_iss,
					'Ztrip_id'=> $trip_id,
				));
				echo "<div class='container alert alert-success'>You Have " . $stmt->rowcount()  . "<strong> INSERT </strong> One Recourd</div>";

								//=====================================================>
		 		?><div class='container'>
		 				<div class="row">
		 					<div class="col-sm-6">
				 				<a href="trips.php?do=Add"><div class="btn btn-primary pull-right btn-lg">Add Trip Book Again</div></a>	 						
		 					</div>
		 					<div class="col-sm-6">
			 					<a href="hotels.php?do=Add"><div class="btn btn-primary btn-lg">Add Hotels</div></a>
			 				</div>
						</div>
		 			</div>   
		 		<?php
				//======================================================>

//				$back=$_SERVER["HTTP_REFERER"];
//				header("Refresh:6 ,$back");
				//echo "<div class='container alert alert-success'>You Have " . $ins->rowcount() . "<strong> INSERT </strong> One Recourd</div>";
				//header("Refresh:3,hotel.php?do=Add");
				//redirctHome($message,'back',2);

		}
	}else{
		//echo "You Dont Have Access to inter Here";  // redirect home
		header("Location:index.php");
	}

//=========================== End Insert Page ==========================================>
//=========================== End Insert Page ==========================================>
}elseif ($do=='Edit') {
	echo "<h1 class='text-center'>Trips  Edit Page</h1>";

	$custid= isset($_GET['custid'])&&is_numeric($_GET['custid']) ? intval($_GET['custid']):0;

	$stmt=$DB->prepare("SELECT * FROM trips WHERE T_id=? LIMIT 1");
	$stmt->execute(array($custid));
	$row=$stmt->fetch();
		
	if ($stmt->rowcount()>0) {
		//echo "string";
		?>	
		<div class="Edit">
			<div class="container">
				<form class="form-horizontal" action="?do=Update" method="POST">
					<!--======================= Admin ID ======================================-->			
					<div class="form-group ">
							<input 	type="hidden" 
									name="t_id" 
									value="<?php  echo $row['t_id']; ?>">
					</div>
					<!--======================== End Admin ID ====================-->
					<!--======================= t_no ======================================-->			
					<div class="form-group ">
						<label class="col-sm-2 control-label">Trip NO</label>
						<div class="col-sm-4">
							<input 	type="text" 
									name="t_no" 
									class="form-control"
									required="required" 
									value="<?php  echo $row['t_no']; ?>">
						</div>
					</div>
					<!--======================== End  t_no ====================-->					
					<!--==================== t_time_go ==========================-->			
					<div class="form-group ">
						<label class="col-sm-2 control-label">Time Go</label>
						<div class="col-sm-4">							
							<input 	type="date" 
									name="t_time_go" 
									class="form-control"
									required="required" 
									value="<?php  echo $row['t_time_go']; ?>">
						</div>
					</div>
					<!--================= End t_time_go =============================-->
					<!--==================== t_time_back ==========================-->			
					<div class="form-group ">
						<label class="col-sm-2 control-label">Time Back</label>
						<div class="col-sm-4">							
							<input 	type="date" 
									name="t_time_back" 
									class="form-control"
									required="required" 
									value="<?php  echo $row['t_time_back']; ?>">
						</div>
					</div>
					<!--================= End 	t_time_back =============================-->
					<!--==================== 	t_place_go ==========================-->			
					<div class="form-group ">
						<label class="col-sm-2 control-label">Pleas Go </label>
						<div class="col-sm-4">							
							<input 	type="text" 
									name="t_place_go" 
									class="form-control"
									required="required" 
									value="<?php  echo $row['t_place_go']; ?>">
						</div>
					</div>
					<!--================= End t_place_go =============================-->
					<!--==================== t_place_back ==========================-->			
					<div class="form-group ">
						<label class="col-sm-2 control-label">Pleas Back</label>
						<div class="col-sm-4">							
							<input 	type="text" 
									name="t_place_back" 
									class="form-control"
									required="required" 
									value="<?php  echo $row['t_place_back']; ?>">
						</div>
					</div>
					<!--================= End t_place_back =============================-->
					<!--==================== t_chair_count ==========================-->			
					<div class="form-group ">
						<label class="col-sm-2 control-label">Chair Count</label>
						<div class="col-sm-4">							
							<input 	type="number" 
									name="t_chair_count" 
									class="form-control"
									value="<?php  echo $row['t_chair_count']; ?>">
						</div>
					</div>
					<!--================= End t_chair_count =============================-->
					<!--==================== t_fave_com ==========================-->			
					<div class="form-group ">
						<label class="col-sm-2 control-label">Company Favoret</label>
						<div class="col-sm-4">							
							<input 	type="text" 
									name="t_fave_com" 
									class="form-control"
									value="<?php  echo $row['t_fave_com']; ?>">
						</div>
					</div>
					<!--================= End t_fave_com =============================-->
					<!--==================== t_class ==========================-->			
					<div class="form-group ">
						<label class="col-sm-2 control-label">Class</label>
						<div class="col-sm-4">			
							<select name="t_class" class="form-control">
								<option value="0" selected> ...  </option>
								<option value="1" <?php if($row['t_class']==1){echo "selected"; }?> >first</option>
								<option value="2" <?php if($row['t_class']==2){echo "selected"; }?> >second</option>
								<option value="3" <?php if($row['t_class']==3){echo "selected"; }?> >theard</option>
								<option value="4" <?php if($row['t_class']==4){echo "selected"; }?> >forth </option>
							</select>				

						</div>
					</div>
					<!--================= End t_class =============================-->
					<!--==================== sbmit ==========================-->						
					<div class="form-group ">
						<label class="col-sm-2 control-label"></label>
						<div class="col-sm-4">	
							<?php
								if ($row['t_statues']==0) {
									echo " <a class='btn  btn-info ' href='?do=Approve&custid=".$row['t_id']."'><i class='fa fa-info'></i> Approve</a>";	
								}else{
									echo " <a class='btn  btn-success ' href='#'><i class='fa fa-info'></i> Approved</a>";	}
							?>
							<input 	type="submit" class="btn btn-primary" value="Update Trip">
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

//=========================== End Update Page ==========================================>
}elseif ($do=='Update') {
	echo "<h1 class='text-center'>Trips  Update Page</h1>";

	if ($_SERVER["REQUEST_METHOD"]=='POST') {

		$T_ID 		=$_POST['t_id'];
		$T_NO 		=$_POST['t_no'];
		$TTim_Go 	=$_POST['t_time_go'];
		$TTim_Back 	=$_POST['t_time_back'];
		$TPls_Go 	=$_POST['t_place_go'];
		$TPls_Back 	=$_POST['t_place_back'];
		$TChair_Cou =$_POST['t_chair_count'];
		$TCom_Fave 	=$_POST['t_fave_com'];
		$T_Class 	=$_POST['t_class'];
			
		echo $T_NO ." ".$TTim_Go." " .$TTim_Back." ".$TPls_Go." ".$TPls_Back." ".$TChair_Cou." ".$TCom_Fave." ".$T_Class;
			
		$srorrs=array();
		if (empty($T_NO)) 		{ $srorrs[]="is <strong> Empty </strong> T_NO" ;}	
		if (empty($TTim_Go)) 	{ $srorrs[]="is <strong> Empty </strong> TTim_Go" ;}	
		if (empty($TTim_Back)) 	{ $srorrs[]="is <strong> Empty </strong> TTim_Back" ;}	
		if (empty($TPls_Go)) 	{ $srorrs[]="is <strong> Empty </strong> TPls_Go" ;}	
		if (empty($TPls_Back)) 	{ $srorrs[]="is <strong> Empty </strong> TPls_Back" ;}	
		if (empty($TChair_Cou)) { $srorrs[]="is <strong> Empty </strong> TChair_Cou" ;}	
		if (empty($TCom_Fave)) 	{ $srorrs[]="is <strong> Empty </strong> TCom_Fave" ;}	
		if (empty($T_Class)) 	{ $srorrs[]="is <strong> Empty </strong> T_Class" ;}	
		if (!empty($srorrs)) {
			echo "<div class='container alert alert-danger'> <strong>" . $srorrs . "</strong></div>" ;
		}else{

			$stmt=$DB->prepare("UPDATE trips SET 
				t_no=?, t_time_go=?, t_time_back=?, t_place_go=?, t_place_back=?, t_chair_count=?, t_fave_com=?, t_class=? WHERE t_id=?");
			
			$stmt->execute(array($T_NO,$TTim_Go,$TTim_Back,$TPls_Go,$TPls_Back,$TChair_Cou,$TCom_Fave,$T_Class,$T_ID));
			$stmt->rowcount();
			echo $message="<div class='container alert alert-success'>You Have ".$stmt->rowcount()." Recourd <strong>Updated</strong>";
			$back=$_SERVER["HTTP_REFERER"];	  
			header("Refresh:6 ,$back");
			//header("Refresh:4,?do=Update");
			//redirctHome($message,'back',2);

		}// END IF !empty($srorrs[])

	}// END $_SERVER["REQUEST_METHOD"]=='POST'

//=========================== End Update Page ==========================================>
}elseif ($do=='Delete') {
	echo "<h1 class='text-center'>Trips  Delete Page</h1>";


	$custid= isset($_GET['custid'])&&is_numeric($_GET['custid']) ? intval($_GET['custid']):0;
	//echo $custid;

	$stmt=$DB->prepare("DELETE FROM `trips` WHERE `t_id` = ?");
	$stmt->execute(array($custid));
	if($stmt->rowcount()>0){
		echo $message="<div class='container alert alert-success'>You Have <strong> DELETE </strong> One Recourd</div>";
		//redirctHome($message,'back',2);
		$back=$_SERVER["HTTP_REFERER"];	  
		header("Refresh:6 ,$back");		
	}
	

//=========================== End Delete Page ==========================================>
}elseif ($do=='Approve') {
	echo "<h1 class='text-center'>Trips  Approve Page</h1>";

	$custid= isset($_GET['custid'])&&is_numeric($_GET['custid']) ? intval($_GET['custid']):0;
	//echo $custid;

	$stmt=$DB->prepare("UPDATE trips SET t_statues=1 WHERE t_id=?");
	$stmt->execute(array($custid));

	if($stmt->rowcount()>0){
		echo $message="<div class='container  alert alert-success'>You Have <strong> Approved </strong> One Customer</div>";
		//redirctHome($message,'back',1);
		$back=$_SERVER["HTTP_REFERER"];	  
		header("Refresh:6 ,$back");		
	}

}// End    ===>  And All If Satuation



/*==========================================  End SESSION IF ==================================================*/
}else{
	echo "<h1>Who Are YOU And What Are You Want <h1>";
}

include 'include/templates/footer.php';


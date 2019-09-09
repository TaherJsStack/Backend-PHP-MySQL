<?php

session_start();

if (isset($_SESSION['Admin_name'])) {
/*========================================== SESSION IF ==================================================*/
$nav="";
$pageTitle='Clints';
include 'init.php';

//print_r($_SESSION);

//====================================================================
// [ Add , Delete , Edite , Manage , Update , Insert , States   ] 
//====================================================================

$do=isset($_GET['do']) ? $_GET['do'] : 'Manage';
//echo $do;
if ($do=='Manage') {
	echo "<h1 class='text-center'>Clints Manage Page</h1>";


		///////////////////////////////////
		//$query='';
		if (isset($_GET['page']) && $_GET['page']=='pending') {
			$query=" AND  c_name='Hayef'";
		}else{
		 	$query=" AND  c_name!='Hayef'";
		}

		//////////////////////////////////


	$sstmt=$DB->prepare("SELECT * FROM clints WHERE c_groupID!=1 $query ORDER BY c_id AND c_statues ASC  ");
	$sstmt->execute();
	$clints=$sstmt->fetchall();

	$clit_trip=$DB->prepare("SELECT clints_trips.*, clints.c_id,trips.t_id,trips.t_place_go
								FROM clints_trips
								INNER JOIN clints ON clints.c_id=clints_trips.c_id
								INNER JOIN trips ON trips.t_id=clints_trips.t_id");
	$clit_trip->execute();
	$clit_trip->fetchall();
	foreach ($clit_trip->fetchall() as $clit_trip) {}

		?>			
		<div class="container">
			<div class="table-responsive">
				<table class="main-Table table table-bordered">
					<tr>
						<td>Name</td>
						<td>Age</td>
						<td>Phone No</td>
						<td>Passport No</td>
						<td>EMail</td>
						<td>Country</td>
						<td>City</td>
						<td>Go To</td>
						<td>Add Date</td>
						<td>Controls</td>
					</tr>
					<?php
					foreach ($clints as $clint) {
						echo "<tr>";
							echo "<td>" . $clint['c_name'] 		. "</td>";
							echo "<td>" . $clint['c_age'] 		. "</td>";
							echo "<td>" . $clint['c_phone'] 	. "</td>";
							echo "<td>" . $clint['c_passpor'] 	. "</td>";
							echo "<td>" . $clint['c_mail'] 		. "</td>";
							echo "<td>" . $clint['c_country'] 	. "</td>";
							echo "<td>" . $clint['c_city'] 		. "</td>";
							echo "<td>" . $clint['c_streat'] 	. "</td>";
							echo "<td>" . $clint['c_regdate'] 	. "</td>";
							///////////////////////////////////////////////////	
							echo "<td>";
								echo " <a class='btn btn-success btn-xs' href='?do=Edit&custid=".$clint['c_id']."' ><i class='fa fa-edit'></i> Edit</a>";

								echo " <a class='btn btn-primary btn-xs' href='Tickets.php?custid=".$clint['c_id']."' ><i class='fa fa-edit'></i> Ticket</a>";
								
								echo " <a class='btn  btn-danger btn-xs confirm' href='?do=Delete&custid=".$clint['c_id']."' ><i class='fa fa-close'></i> Delete</a>";

									if ($clint['c_statues']==0) {
										echo " <a class='btn  btn-info btn-xs' href='?do=Approve&custid=".$clint['c_id']."'><i class='fa fa-info'></i> Approve </a>";	
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
				<a href="?do=Add" class="btn btn-primary"><i class='fa fa-plus'></i> Add New Clint</a>
		</div>
<?php

//				<!--======================= Manage ======================================-->			
//				<!--======================= ADD ======================================-->			

}elseif ($do=='Add') {
	echo "<h1 class='text-center'>Clints Add Page</h1>";
	?>	
	<div class="Edit">
		<div class="container">
			<form class="form-horizontal" action="?do=Insert" method="POST">
				<!--======================= Name ======================================-->			
				<div class="form-group ">
					<label class="col-sm-2 control-label">Name</label>
					<div class="col-sm-4">
						<input 	type="text" 
								name="c_name" 
								class="form-control"
								required="required" 
								placeholder="Customer Name">
					</div>
				</div>
				<!--======================== End  Name ====================-->					
				<!--==================== Age ==========================-->			
				<div class="form-group ">
					<label class="col-sm-2 control-label">Age</label>
					<div class="col-sm-4">							
						<input 	type="text" 
								name="c_age" 
								class="form-control"
								required="required" 
								placeholder="Customer Age">
					</div>
				</div>
				<!--================= End CAge =============================-->
				<!--==================== Phone ==========================-->			
				<div class="form-group ">
					<label class="col-sm-2 control-label">Phone</label>
					<div class="col-sm-4">							
						<input 	type="number" 
								name="c_phone" 
								class="form-control"
								required="required" 
								placeholder="Customer Password">
					</div>
				</div>
				<!--================= End 	C_Phone =============================-->
				<!--==================== 	C_Passpo ==========================-->			
				<div class="form-group ">
					<label class="col-sm-2 control-label">Passpo No</label>
					<div class="col-sm-4">							
						<input 	type="number" 
								name="c_passpor" 
								class="form-control"
								required="required" 
								placeholder="Customer Passpo No">
					</div>
				</div>
				<!--================= End Passpo =============================-->
				<!--==================== Mail ==========================-->			
				<div class="form-group ">
					<label class="col-sm-2 control-label">Mail</label>
					<div class="col-sm-4">							
						<input 	type="Email" 
								name="c_mail" 
								class="form-control"
								required="required" 
								placeholder="Customer Mail">
					</div>
				</div>
				<!--================= End Mail =============================-->
				<!--==================== Counr ==========================-->			
				<div class="form-group ">
					<label class="col-sm-2 control-label">Select Country</label>
					<div class="col-sm-4">							
						<!--<input 	type="text" 
								name="country" 
								class="form-control"
								required="required" 
								placeholder="Customer Country">-->
						<script type= "text/javascript" src = "<?php echo $js; ?>countries.js"></script>
						    <select id="country" name ="country" class="form-control" required="required"></select>
					<script language="javascript">
						populateCountries("country", "state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
						populateCountries("country2");
						populateCountries("country2");
					</script>
					</div>
				</div>
				<!--================= End Counr =============================-->
				<!--==================== City ==========================-->			
				<div class="form-group ">
					<label class="col-sm-2 control-label">Select City</label>
					<div class="col-sm-4">							
					<!--	<input 	type="text" 
								name="state" 
								class="form-control"
								required="required" 
								placeholder="Customer City">-->

						<script type= "text/javascript" src = "<?php echo $js; ?>countries.js"></script>
						    	 <select name ="state" id ="state" class="form-control" required="required"></select>  
					<script language="javascript">
						populateCountries("country", "state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
						populateCountries("country2");
						populateCountries("country2");
					</script>
					</div>
				</div>
				<!--================= End City =============================-->
				<!--==================== Streat ==========================-->			
				<div class="form-group ">
					<label class="col-sm-2 control-label">Streat</label>
					<div class="col-sm-4">							
						<input 	type="text" 
								name="c_streat" 
								class="form-control"
								required="required" 
								placeholder="Customer Streat">
					</div>
				</div>
				<!--================= End Streat =============================-->
				<!--==================== sbmit ==========================-->						
				<div class="form-group ">
					<label class="col-sm-2 control-label"></label>
					<div class="col-sm-4">		
						<input 	type="submit" class="btn btn-primary" value="ADD">
					</div>
				</div>
				<!--============== End submit ==============================-->			
			</form>
		</div>
	</div>

	<?php

}elseif ($do=='Insert') {
	echo "<h1 class='text-center'>Clints Insert Page</h1>";
	//if ($_SERVER["REQUEST_METHOD"]=='POST') {

		$NAME 	=$_POST['c_name'];
		$AGE 	=$_POST['c_age'];
		$PHON 	=$_POST['c_phone'];
		$PASPO 	=$_POST['c_passpor'];
		$EMAIL 	=$_POST['c_mail'];
		$COUNR 	=$_POST['country'];
		$CITY 	=$_POST['state'];
		$STR 	=$_POST['c_streat'];
		$formErorrs=array();
		if (empty($NAME)) 	{ $formErorrs[]=" NAME Is Empty";}
		if ($NAME>8 ) 		{ $formErorrs[]=" NAME Is more than 8";}			
		if (empty($AGE)) 	{ $formErorrs[]=" AGE Is Empty";}
		if (empty($PHON)) 	{ $formErorrs[]=" PHONE Is Empty";}
		if (empty($PASPO)) 	{ $formErorrs[]=" PASPO Is Empty";}
		if (empty($EMAIL)) 	{ $formErorrs[]=" EMAIL Is Empty";}
		if (empty($COUNR)) 	{ $formErorrs[]=" COUNTRY Is Empty";}
		if (empty($CITY)) 	{ $formErorrs[]=" CITY Is Empty"; }
		if (empty($STR)) 	{ $formErorrs[]=" Streat Is Empty"; }										 	
		if (!empty($formErorrs)) {
		 foreach ($formErorrs as $formErorr) {
		 		 	echo $message="<div class='container alert alert-danger'> <strong>" . $formErorr . "</strong></div>";
					//redirctHome($message,'back',2);
		 		}
		 	}else{
				$stmt=$DB->prepare("SELECT c_passpor FROM clints WHERE c_passpor=? LIMIT 1");							
				$stmt->execute(array($PASPO));
				//	echo $stmt->rowcount();
				if ($stmt->rowcount()==1) {
		 			echo $message="<div class='container alert alert-danger'><strong> this User Is Really Exist </strong></div>";
					//redirctHome($message,'back',2);
			 		//========================================================>
			 		 	?>
			 			<div class='container'>
			 				<div class="row">
			 					<div class="col-sm-6">
					 				<a href="hotels.php?do=Add"><div class="btn btn-primary pull-right btn-lg">Add Hotel </div></a>	 						
			 					</div>
			 					<div class="col-sm-6">
				 					<a href="trips.php?do=Add"><div class="btn btn-primary btn-lg">Add Trip </div></a>
				 				</div>
							</div>
			 			</div>
						<?php
			 		//========================================================>
				}else{
		
					$ins=$DB->prepare("INSERT INTO clints (c_name,  c_age,    c_phone,   c_passpor,   c_mail,   c_country, c_city,   c_streat,  c_regdate,c_statues)
												 VALUES (:c_name,  :c_age, :c_phone, :c_passpor, :c_mail, :c_country, :state, :c_streat, now(), 0)");
					$ins->execute(array(
						'c_name' 		=> $NAME, 
						'c_age' 		=> $AGE, 
						'c_phone' 		=> $PHON, 
						'c_passpor' 	=> $PASPO, 
						'c_mail' 		=> $EMAIL, 
						'c_country' 	=> $COUNR, 
						'state' 		=> $CITY, 
						'c_streat' 		=> $STR, 
					));
					$stmt=$DB->prepare("SELECT c_id FROM clints WHERE c_passpor=? LIMIT 1");
					$stmt->execute(array($PASPO));
					//echo $stmt->rowcount() . " rowcount <br>";
					$Cusid= $stmt->fetch();
					//echo $Cusid['c_id'] . " c_id Cusid <br>";
					$_SESSION['Cusid']=$Cusid['c_id'];

				//	print_r("<br>" . $_SESSION['Cusid']);
					
					echo $message="<div class='container alert alert-success'>You Have " . $ins->rowcount() . "<strong> INSERT </strong> One Recourd</div>";
					//redirctHome($message,'back',2);
					//========================================	test erea ================================>
 					?>
		 			<div class='container'>
		 				<div class="row">
		 					<div class="col-sm-6">
				 				<a href="hotels.php?do=Add"><div class="btn btn-primary pull-right  btn-lg">Hotel</div></a>	 						
		 					</div>
		 					<div class="col-sm-6">
			 					<a href="trips.php?do=Add"><div class="btn btn-primary  btn-lg">Trip</div></a>
			 				</div>
						</div>
		 			</div>
					<?php
					//================================ End Insert Page ==========================================>
				}
			} // End Foreach	
	/*}else{
		echo "You Dont Have Access to inter Here";  // redirect home
		header("Refresh:5,index.php");
	}*/

//=========================== End Insert Page ==========================================>

}elseif ($do=='Edit') {
	echo "<h1 class='text-center'>Clints Edite Page</h1>";

	$custid= isset($_GET['custid'])&&is_numeric($_GET['custid']) ? intval($_GET['custid']):0;

	$stmt=$DB->prepare("SELECT * FROM clints WHERE c_id=? LIMIT 1");
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
									name="c_id" 
									value="<?php  echo $row['c_id']; ?>">
					</div>
					<!--======================== End Admin ID ====================-->	
					<!--======================= Admin Name ======================================-->			
					<div class="form-group ">
						<label class="col-sm-2 control-label"> Name</label>
						<div class="col-sm-4">
							<input 	type="text" 
									name="c_name" 
									class="form-control"
									placeholder="Name"
									required="required" 
									value="<?php  echo $row['c_name']; ?>">
						</div>
					</div>
					<!--======================== End Admin Name ====================-->								
					<!--==================== Age ==========================-->			
					<div class="form-group ">
						<label class="col-sm-2 control-label">Age</label>
						<div class="col-sm-4">							
							<input 	type="text" 
									name="c_age" 
									class="form-control"
									placeholder="Customer Age"
									required="required" 
									value="<?php  echo $row['c_age']; ?>">
						</div>
					</div>
					<!--================= End CAge =============================-->
					<!--==================== Phone ==========================-->			
					<div class="form-group ">
						<label class="col-sm-2 control-label">Phone</label>
						<div class="col-sm-4">							
							<input 	type="number" 
									name="c_phone" 
									class="form-control"
									placeholder="Customer Password"
									required="required" 
									value="<?php  echo $row['c_phone']; ?>">
						</div>
					</div>
					<!--================= End 	C_Phone =============================-->
					<!--==================== 	C_Passpo ==========================-->			
					<div class="form-group ">
						<label class="col-sm-2 control-label">Passpo No</label>
						<div class="col-sm-4">							
							<input 	type="number" 
									name="c_passpor" 
									class="form-control"
									required="required" 
									placeholder=" You Must Inter Right Pasport No "
									value="<?php  echo $row['c_passpor']; ?>">
						</div>
					</div>
					<!--================= End Passpo =============================-->
					<!--==================== Mail ==========================-->			
					<div class="form-group ">
						<label class="col-sm-2 control-label">Mail</label>
						<div class="col-sm-4">							
							<input 	type="Email" 
									name="c_mail" 
									class="form-control"
									placeholder="Customer Mail"
									required="required" 
									value="<?php  echo $row['c_mail']; ?>">
						</div>
					</div>
					<!--================= End Mail =============================-->
					<!--==================== Counr ==========================-->			
					<div class="form-group ">
						<label class="col-sm-2 control-label">Country</label>
						<div class="col-sm-4">							
							<input 	type="text" 
									name="country" 
									class="form-control"
									placeholder="Customer Country"
									required="required" 
									value="<?php  echo $row['c_country']; ?>">
						</div>
					</div>
					<!--================= End Counr =============================-->
					<!--==================== City ==========================-->			
					<div class="form-group ">
						<label class="col-sm-2 control-label">City</label>
						<div class="col-sm-4">							
							<input 	type="text" 
									name="state" 
									class="form-control"
									placeholder="Customer City"
									required="required" 
									value="<?php  echo $row['c_city']; ?>">
						</div>
					</div>
					<!--================= End City =============================-->
					<!--==================== Streat ==========================-->			
					<div class="form-group ">
						<label class="col-sm-2 control-label">Streat</label>
						<div class="col-sm-4">							
							<input 	type="text" 
									name="c_streat" 
									class="form-control"
									placeholder="Customer Streat"
									required="required" 
									value="<?php  echo $row['c_streat']; ?>">
						</div>
					</div>

					<!--================= End Streat =============================-->
					<div class="form-group ">
						<label class="col-sm-2 control-label"></label>
						<div class="col-sm-4">		

						</div>
					</div>
					<!--============== End Password ==============================-->			
					<!--================= End Streat =============================-->
					<div class="form-group ">
						<label class="col-sm-2 control-label"></label>
						<div class="col-sm-4">		
							<?php 
								if ($row['c_statues']==0) {
									echo " <a class='btn  btn-info' href='?do=Approve&custid=".$row['c_id']."'><i class='fa fa-info'></i> Approve </a>";	
								}else{
									echo " <a class='btn  btn-success ' href='#'><i class='fa fa-info'></i> Approved</a>";	}
							?>
							<input 	type="submit" class="btn btn-primary" value="Update">
						</div>
					</div>
					<!--============== End Password ==============================-->			
				</form>
			</div>
		</div>
		<?php
	}else{
		header("Refresh:4,index.php");
	}


//=========================== End Edit Page ==========================================>

}elseif ($do=='Update') {
	echo "<h1 class='text-center'>Clints Update Page</h1>";

	if ($_SERVER['REQUEST_METHOD']=='POST') {
		
		$_ID 		=$_POST['c_id'];
		$_NAME 		=$_POST['c_name'];
		$_EMAIL 	=$_POST['c_mail'];
		$_AGE 		=$_POST['c_age'];
		$_PHON 		=$_POST['c_phone'];
		$_PASPO 	=$_POST['c_passpor'];
		$_COUNR 	=$_POST['country'];
		$_CITY 		=$_POST['state'];
		$_STR 		=$_POST['c_streat'];
		
		//echo $_NAME." ".$_AGE." ".$_PHON." ".$_PASPO." ".$_EMAIL." ".$_COUNR." ".$_CITY." ".$_STR." ".$_ID;
			
		$formErorrs=array();

		if (empty($_NAME)) 	{ $formErorrs[]=" NAME Is Empty";}
		if ($_NAME>8 ) 		{ $formErorrs[]=" NAME Is more than 8";}			
		if (empty($_AGE)) 	{ $formErorrs[]=" AGE Is Empty";}
		if (empty($_PHON)) 	{ $formErorrs[]=" PHONE Is Empty";}
		if (empty($_PASPO)) { $formErorrs[]=" PASPO Is Empty";}
		if (empty($_NAME)) 	{ $formErorrs[]=" EMAIL Is Empty";}
		if (empty($_COUNR)) { $formErorrs[]=" COUNTRY Is Empty";}
		if (empty($_CITY)) 	{ $formErorrs[]=" CITY Is Empty"; }
		if (empty($_STR)) 	{ $formErorrs[]=" Streat Is Empty"; }										 	
		if (!empty($formErorrs)) {
		 foreach ($formErorrs as $formErorr) {
		 			echo $message="<div class='container alert alert-danger'> <strong>" . $formErorr . "</strong></div>";
					//redirctHome($message,'back',2);
		 		}
		 	}else{
/*
				$stmt=$DB->prepare("SELECT c_passpor FROM clints WHERE c_passpor=? LIMIT 1");							
				$stmt->execute(array($_PASPO));
				//	echo $stmt->rowcount();
				if ($stmt->rowcount()==1) {
		 			$message="<div class='container alert alert-danger'><strong> this User Is Really Exist </strong></div>";
					//redirctHome($message,'back',2);
				}else{
*/
					$stmt=$DB->prepare("UPDATE clints SET c_name=?, c_age=?, c_phone=?, c_passpor=?, c_mail=?, c_country=?, c_city=?, c_streat=? WHERE c_id=?");
					$stmt->execute(array($_NAME,$_AGE,$_PHON,$_PASPO,$_EMAIL,$_COUNR,$_CITY,$_STR,$_ID));
					echo $message="<div class='container alert alert-success'>You Have One Recourd <strong>Updated</strong>";
					
					$back=$_SERVER["HTTP_REFERER"];	  
					header("Refresh:4 ,$back");					
					//header("Refresh:4,?do=Update");
					//redirctHome($message,'back',2);
				}
			}else{
				echo "string";
			}

//=========================== End Update Page ==========================================>

}elseif ($do=='Delete') {
	echo "<h1 class='text-center'>Clints Delete Page</h1>";

	$custid= isset($_GET['custid'])&&is_numeric($_GET['custid']) ? intval($_GET['custid']):0;
	//echo $custid;

	$stmt=$DB->prepare("DELETE FROM `clints` WHERE `c_id` = ?");
	$stmt->execute(array($custid));
	if($stmt->rowcount()>0){
		echo $message="<div class='container alert alert-success'>You Have <strong> DELETE </strong> One Recourd</div>";
		//redirctHome($message,'back',2);
		$back=$_SERVER["HTTP_REFERER"];	  
		header("Refresh:3 ,$back");		
	}
	

//=========================== End Delete Page ==========================================>
}elseif ($do=='Approve') {

	$custid= isset($_GET['custid'])&&is_numeric($_GET['custid']) ? intval($_GET['custid']):0;
	//echo $custid;

	$stmt=$DB->prepare("UPDATE clints SET c_statues=1 WHERE c_id=?");
	$stmt->execute(array($custid));

	if($stmt->rowcount()>0){
		echo $message="<div class='container  alert alert-success'>You Have <strong> Approved </strong> One Customer</div>";
		//redirctHome($message,'back',1);
		$back=$_SERVER["HTTP_REFERER"];	  
		header("Refresh:3 ,$back");
	}





}// End All Off Else

/*==========================================  End SESSION IF ==================================================*/
}else{
	echo "<h1>Who Are YOU And What Are You Want <h1>";
}

include 'include/templates/footer.php';


<?php
session_start();
		$header_other='';

		$pageTitle='Clients';			// Show TiTel Page
		include 'init.php';

		//echo "yes you are "  ; // For Test
		//print_r($_SESSION);

//=================================== Start Of The content =========================================================>


//====================================================================
// [ Add , Delete , Edit , Manage , Update , Insert , States   ] 
//====================================================================

$do=isset($_GET['do']) ? $_GET['do'] : 'Manage';


//echo $do;

if ($do=='Manage') {
	echo "<h1 class='text-center'>Welcom In Manage Page</h1>";
	echo "<a href='?do=Add'>Add</a>";

//=========================== End Manage Page ==========================================>

}elseif ($do=='Add_Clint') {
	echo "<h1 class='text-center'> Add_Clint Page</h1>";
			$clint_id=@$_SESSION['Cusid'];
	if (isset($clint_id)) {
		 echo $message="<div class='container alert alert-danger'><strong> this User Is Really Exist </strong></div>";
					 		//========================================================>
			 		 	?>
			 			<div class='container'>
			 				<div class="row">
			 					<div class="col-sm-6">
					 				<a href="?do=Add_hotel"><div class="btn btn-primary pull-right btn-lg">Add Hotel </div></a>		
			 					</div>
			 					<div class="col-sm-6">
				 					<a href="?do=Add_trip"><div class="btn btn-primary btn-lg">Add Trip </div></a>
				 				</div>
							</div>
			 			</div>
						<?php
			 		//========================================================>
	}else{
?>	
	<div class="Add">
		<div class="container">
			<form class="form-horizontal" action="?do=Insert_Clint" method="POST">
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
						    <select id="country" name ="c_country" class="form-control" required="required"></select>
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
						    	 <select name ="c_city" id ="state" class="form-control" required="required"></select>  
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
}
//=========================== End Add Clint Page ==========================================>

}elseif ($do=='Add_trip') {
	echo "<h1 class='text-center'>Add_trip Page</h1>";


		?>	
		<div class="Add">
			<div class="container">
				<form class="form-horizontal" action="?do=Insert_trip" method="POST">
					
					<!--==================== t_time_go ==========================-->			
					<div class="form-group ">
						<label class="col-sm-2 control-label">Time Go</label>
						<div class="col-sm-4">							
							<input 	type="date" 
									name="t_time_go" 
									class="form-control"
									required="required" 
									value="<?php=date('y-m-d')?>" 
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

//=========================== End Add_trip Page ==========================================>

}elseif ($do=='Add_hotel') {
	echo "<h1 class='text-center'>Add_hotel Page</h1>";

?>	
		<div class="Add">
			<div class="container">
				<form class="form-horizontal" action="?do=Insert_hotel" method="POST">
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
						    <select id="country" name ="h_cuntry" class="form-control" required="required"></select>
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
						    	 <select name ="h_city" id ="state" class="form-control" required="required"></select>  
					<script language="javascript">
						populateCountries("country", "state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
						populateCountries("country2");
						populateCountries("country2");
					</script>
					</div>
				</div>
				<!--================= End City =============================-->

					<!--==================== 	clint id ==========================-->			
					
								<!-- "<option value=". $ro['c_id'] .">". $ro['c_name'] ."</option>"-->;
				
	
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

//=========================== End Add_hotel Page ===============================================================================>
//=========================== End Add_hotel Page ===============================================================================>
//=========================== End Add_hotel Page ===============================================================================>
//=========================== End Add_hotel Page ===============================================================================>
//=========================== End Add_hotel Page ===============================================================================>

}elseif ($do=='Insert_Clint') {
	echo "<h1 class='text-center'>Insert Clint Page</h1>";


	//if ($_SERVER["REQUEST_METHOD"]=='POST') {

echo "<div class='user'>";
		$NAME 	=$_POST['c_name'];
		$AGE 	=$_POST['c_age'];
		$PHON 	=$_POST['c_phone'];
		$PASPO 	=$_POST['c_passpor'];
		$EMAIL 	=$_POST['c_mail'];
		$COUNR 	=$_POST['c_country'];
		$CITY 	=$_POST['c_city'];
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
		 		}
		 	}else{
				$stmt=$DB->prepare("SELECT c_passpor FROM clints WHERE c_passpor=? LIMIT 1");							
				$stmt->execute(array($PASPO));
				if ($stmt->rowcount()==1) {
		 			echo $message="<div class='container alert alert-danger'><strong> this User Is Really Exist </strong></div>";
		 			$stmt=$DB->prepare("SELECT c_id FROM clints WHERE c_passpor=? LIMIT 1");
					$stmt->execute(array($PASPO));
					$Cusid= $stmt->fetch();
					$_SESSION['Cusid']=$Cusid['c_id'];
					
			 		//========================================================>
			 		 	?>
			 			<div class='container'>
			 				<div class="row">
			 					<div class="col-sm-6">
					 				<a href="?do=Add_hotel"><div class="btn btn-primary pull-right btn-lg">Add Hotel </div></a>		
			 					</div>
			 					<div class="col-sm-6">
				 					<a href="?do=Add_trip"><div class="btn btn-primary btn-lg">Add Trip </div></a>
				 				</div>
							</div>
			 			</div>
						<?php
			 		//========================================================>
				}else{
		
					$ins=$DB->prepare("INSERT INTO clints (c_name,  c_age,    c_phone,   c_passpor,   c_mail,   c_country, c_city,   c_streat,  c_regdate,c_statues)
												 VALUES (:c_name,  :c_age, :c_phone, :c_passpor, :c_mail, :c_country, :c_city, :c_streat, now(), 0)");
					$ins->execute(array(
						'c_name' 		=> $NAME, 
						'c_age' 		=> $AGE, 
						'c_phone' 		=> $PHON, 
						'c_passpor' 	=> $PASPO, 
						'c_mail' 		=> $EMAIL, 
						'c_country' 	=> $COUNR, 
						'c_city' 		=> $CITY, 
						'c_streat' 		=> $STR, 
					));
					$stmt=$DB->prepare("SELECT c_id FROM clints WHERE c_passpor=? LIMIT 1");
					$stmt->execute(array($PASPO));
					$Cusid= $stmt->fetch();
					$_SESSION['Cusid']=$Cusid['c_id'];
					
					echo $message="<div class='container alert alert-success'>You Have " . $ins->rowcount() . "<strong> INSERT </strong> One Recourd</div>";

					//========================================	test erea ================================>

					//$trip_id=$_SESSION['tripid'];
					//$clint_id=$_SESSION['Cusid'];

					if (isset($trip_id) && isset($clint_id)) {
						

						$stmt=$DB->prepare("INSERT INTO clints_trips(c_id, t_id) VALUES (:Zcust_id,:Ztrip_id)");
						$stmt->execute(array(
							'Zcust_id'=> $clint_id,
							'Ztrip_id'=> $trip_id,
						));
					}

					//========================================	test erea ================================>

					//$hot_id=$_SESSION['hotelid'];
					//$clint_id=$_SESSION['Cusid'];
				
					if (isset($hot_id) && isset($clint_id)) {
						
						$stmt=$DB->prepare("INSERT INTO clints_hotels(c_id, h_id) VALUES (:Zcust_id,:Zhot_id)");
						$stmt->execute(array(
							'Zcust_id'=> $clint_id,
							'Zhot_id'=> $hot_id,
						));
					}
					//========================================	test erea ================================>
 					?>
		 			<div class='container'>
		 				<div class="row">
		 					<div class="col-sm-6">
				 				<a href="?do=Add_hotel"><div class="btn btn-primary pull-right  btn-lg">Add Hotel</div></a>	 						
		 					</div>
		 					<div class="col-sm-6">
			 					<a href="?do=Add_trip"><div class="btn btn-primary  btn-lg">Add Trip</div></a>
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

echo "</div>";




//=========================== End Insert_Clint Page ==========================================>
}elseif ($do=='Insert_trip') {
	echo "<h1 class='text-center'>Insert trip Page</h1>";

echo "<div class='user'>";

	if ($_SERVER["REQUEST_METHOD"]=='POST') {

		$TTim_Go 	=$_POST['t_time_go'];
		$TTim_Back 	=$_POST['t_time_back'];
		$TPls_Go 	=$_POST['t_place_go'];
		$TPls_Back 	=$_POST['t_place_back'];
		$TChair_Cou =$_POST['t_chair_count'];
		$TCom_Fave 	=$_POST['t_fave_com'];
		$T_Class 	=$_POST['t_class'];
			
		//echo $TTim_Go," ",$TTim_Back," ",$TPls_Go," " ,$TPls_Back," ",$TChair_Cou," ",$TCom_Fave," ",$T_Class;

		$stmt=$DB->prepare("SELECT t_time_go,t_time_back,t_place_go,t_place_back,t_class FROM trips  
			WHERE t_time_go=? AND t_time_back=? AND t_place_go=? AND t_place_back=? AND t_class=? LIMIT 1");							
		$stmt->execute(array($TTim_Go,$TTim_Back,$TPls_Go,$TPls_Back,$T_Class));
		//	echo $stmt->rowcount();
		if ($stmt->rowcount()>0) {
			echo "<div class='container alert alert-success'>this Book Is Really Exist</div>";
				$stmt=$DB->prepare('SELECT t_id FROM trips  WHERE t_time_go=? AND t_time_back=? AND t_place_go=? AND t_place_back=? ');
				$stmt->execute(array($TTim_Go,$TTim_Back,$TPls_Go,$TPls_Back));
				$stmt->rowcount();
				$tripp=$stmt->fetch();


			//	echo $tripp['t_id'] . "<br>";    //   For Test
			
			//	echo $tripp['t_id'] . " The row t_id <br>";    //   For Test
				$_SESSION['tripid']=$tripp['t_id'];
				$trip_id=$_SESSION['tripid'];
				//=====================================================>
		 		?><div class='container'>
		 				<div class="row">
		 					<div class="col-sm-6">
				 				<a href="?do=Add_Clint"><div class="btn btn-primary pull-right btn-lg">Add Clint</div></a>
		 					</div>
						</div>
		 			</div>   
		 		<?php
				//======================================================>
		}else{
			$ins=$DB->prepare("INSERT INTO trips (t_time_go,t_time_back,t_place_go,t_place_back,t_chair_count,t_fave_com,   t_class,t_reg_date,t_statues)
						VALUES (:t_time_go,:t_time_back,:t_place_go,:t_place_back,:t_chair_count,:t_fave_com, :t_class, now(), 0)");
			$ins->execute(array(
				't_time_go' 	=> $TTim_Go, 
				't_time_back' 	=> $TTim_Back, 
				't_place_go' 	=> $TPls_Go, 
				't_place_back' 	=> $TPls_Back, 
				't_chair_count'	=> $TChair_Cou, 
				't_fave_com' 	=> $TCom_Fave, 
				't_class' 		=> $T_Class, 
			));

				$stmt=$DB->prepare('SELECT t_id FROM trips  WHERE t_time_go=? AND t_time_back=? AND t_place_go=? AND t_place_back=? ');
				$stmt->execute(array($TTim_Go,$TTim_Back,$TPls_Go,$TPls_Back));
				$stmt->rowcount();
				$tripp=$stmt->fetch();


				$_SESSION['tripid']=$tripp['t_id'];

				$trip_id=$_SESSION['tripid'];
				$clint_id=@	$_SESSION['Cusid'];

				if (isset($trip_id) && isset($clint_id)) {
				
					$stmt=$DB->prepare("INSERT INTO clints_trips(c_id, t_id) VALUES (:Zcust_id,:Ztrip_id)");
					$stmt->execute(array(
						'Zcust_id'=> $clint_id,
						'Ztrip_id'=> $trip_id,
					));
				echo "<div class='container alert alert-success'>You Have " . $stmt->rowcount()  . "<strong> INSERT </strong> One Recourd</div>";

								//=====================================================>
			 		?><div class='container'>
			 				<div class="row">
			 					<div class="col-sm-6">
					 				<a href="?do=Add_hotel"><div class="btn btn-primary pull-right  btn-lg">Add Hotel</div></a>		
			 					</div>
			 					<div class="col-sm-6">
				 					<a href="?do=Add_trip"><div class="btn btn-primary  btn-lg">Add New Trip Again</div></a>
				 				</div>
							</div>
			 			</div>   
			 		<?php
					//======================================================>

				}else{
					//=====================================================>
			 		?><div class='container'>
			 				<div class="row">
			 					<div class="col-sm-6 pull-right">
				 					<a href="?do=Add_Clint"><div class="btn btn-primary  btn-lg">Add Clint</div></a>
				 				</div>
							</div>
			 			</div>   
			 		<?php
					//======================================================>

				}

		}
	}else{
		echo "</div>";  
		header("Location:index.php");
	}



//=========================== End Insert_trip Page ==========================================>
}elseif ($do=='Insert_hotel') {
	echo "<h1 class='text-center'>Insert hotel Page</h1>";

if ($_SERVER["REQUEST_METHOD"]=='POST') {
echo "<div class='user'>";

		$h_name 		=$_POST['h_name'];
		$h_rom_coun 	=$_POST['h_rom_coun'];
		$h_serv_kind 	=$_POST['h_serv_kind'];
		$h_tim_stay 	=$_POST['h_tim_stay'];
		$h_cuntry 		=$_POST['h_cuntry'];
		$h_city 		=$_POST['h_city'];
			
		//echo $h_name," ",$h_rom_coun," ",$h_serv_kind," ",$h_tim_stay;

		$stmt=$DB->prepare("SELECT h_name,h_rom_coun,h_serv_kind,h_tim_stay FROM hotels  
								WHERE h_name=? AND h_rom_coun=? AND h_serv_kind=? AND h_tim_stay=? LIMIT 1");							
		$stmt->execute(array($h_name,$h_rom_coun,$h_serv_kind,$h_tim_stay));
		//	echo $stmt->rowcount();
		if ($stmt->rowcount()>0) {
			echo "<div class='container alert alert-success'>this Book Is Really Exist</div>";

				$stmt=$DB->prepare('SELECT h_id FROM hotels  WHERE h_name=? AND h_rom_coun=? AND h_serv_kind=? AND h_tim_stay=?');
				$stmt->execute(array($h_name,$h_rom_coun,$h_serv_kind,$h_tim_stay));
				$stmt->rowcount();
				$hotell=$stmt->fetch();
			
				$clint_id=@$_SESSION['Cusid'];
			
				$hot_id=$_SESSION['hotelid']=$hotell['h_id'];
				if (isset($hot_id) && isset($clint_id)) {
						
						$stmt=$DB->prepare("INSERT INTO clints_hotels(c_id, h_id) VALUES (:Zcust_id,:Zhot_id)");
						$stmt->execute(array(
							'Zcust_id'=> $clint_id,
							'Zhot_id'=> $hot_id,
						));
					
				//=====================================================>
		 		?><div class='container'>
		 				<div class="row">
		 					<div class="col-sm-6">
				 				<a href="?do=Add_hotel"><div class="btn btn-primary pull-right btn-lg">Add HOTEL Book Again</div></a>			
		 					</div>
		 					<div class="col-sm-6">
			 					<a href="?do=Add_trip"><div class="btn btn-primary btn-lg">Add TRIP </div></a>
			 				</div>
						</div>
		 			</div>   
		 		<?php
		 	}else{
				//=====================================================>
		 		?><div class='container'>
		 				<div class="row">
		 					<div class="col-sm-6">
				 				<a href="?do=Add_Clint"><div class="btn btn-primary pull-right btn-lg">Add Clint</div></a>
		 					</div>
						</div>
		 			</div>   
		 		<?php		 		
				//======================================================>
		 	}
		}else{
			$ins=$DB->prepare("INSERT INTO hotels (h_name,h_rom_coun,h_serv_kind,h_tim_stay,h_cuntry,h_city,h_date_stat,h_stat)
						VALUES (:h_name,:h_rom_coun,:h_serv_kind,:h_tim_stay,:h_cuntry,:h_city, now(), 0)");
			$ins->execute(array(
				'h_name' 		=> $h_name, 
				'h_rom_coun' 	=> $h_rom_coun, 
				'h_serv_kind' 	=> $h_serv_kind, 
				'h_tim_stay' 	=> $h_tim_stay, 
			 	'h_cuntry'		=> $h_cuntry,
			 	'h_city'		=> $h_city,
			));

				$stmt=$DB->prepare('SELECT h_id FROM hotels  WHERE h_name=? AND h_rom_coun=? AND h_serv_kind=? AND h_tim_stay=?');
				$stmt->execute(array($h_name,$h_rom_coun,$h_serv_kind,$h_tim_stay));
				$stmt->rowcount();
				$hotell=$stmt->fetch();
			
				$_SESSION['hotelid']=$hotell['h_id'];

				$hot_id=$_SESSION['hotelid'];
				$clint_id=@$_SESSION['Cusid'];
			

				if (isset($hot_id) && isset($clint_id)) {
					
				
				$stmt=$DB->prepare("INSERT INTO clints_hotels(c_id, h_id) VALUES (:Zcust_id,:Zhot_id)");
				$stmt->execute(array(
					'Zcust_id'=> $clint_id,
					'Zhot_id'=> $hot_id,
				));
				echo "<div class='container alert alert-success'>You Have " . $stmt->rowcount()  . "<strong> INSERT </strong> One Recourd</div>";
				//=====================================================>
		 		?><div class='container'>
		 				<div class="row">
		 					<div class="col-sm-6">
				 				<a href="?do=Add_trip"><div class="btn btn-primary pull-right btn-lg">Add Trip</div></a>			
		 					</div>
		 					<div class="col-sm-6">
			 					<a href="?do=Add_hotel"><div class="btn btn-primary btn-lg">Add Hotel Book Again</div></a>
			 				</div>
						</div>
		 			</div>   
		 		<?php
		 		}else{
		 		?><div class='container'>
		 				<div class="row">
		 					<div class="col-sm-6">
				 				<a href="?do=Add_Clint"><div class="btn btn-primary pull-right btn-lg">You Must Add Clint</div></a>
		 					</div>
						</div>
		 			</div>   
		 		<?php
	


		 		}
		}
	}else{
		echo "</div>";  // redirect home
		header("Location:index.php");
	}





//=========================== End Insert_hotel Page ===========================================================================>
//=========================== End Insert_hotel Page ===========================================================================>
//=========================== End Insert_hotel Page ===========================================================================>
//=========================== End Insert_hotel Page ===========================================================================>
//=========================== End Insert_hotel Page ===========================================================================>
//=========================== End Insert_hotel Page ===========================================================================>

}elseif ($do=='Edit_Clint') {
	echo "<h1 class='text-center'> Edit_Clint Page</h1>";
echo "<div class='user'>";

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
									name="c_country" 
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
									name="c_city" 
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
							<input 	type="submit" class="btn btn-primary" value="Update">
						</div>
					</div>
					<!--============== End Password ==============================-->			
				</form>
			</div>
		</div>
		<?php
	}else{
echo "</div>";

		header("Refresh:4,index.php");
	}


//=========================== End EditClint Page ==========================================>

}elseif ($do=='Edit_trip') {
	echo "<h1 class='text-center'>Edit_trip Page</h1>";

		?>	
		<div class="Add">
			<div class="container">
				<form class="form-horizontal" action="?do=Update_trip" method="POST">
					
					<!--==================== t_time_go ==========================-->			
					<div class="form-group ">
						<label class="col-sm-2 control-label">Time Go</label>
						<div class="col-sm-4">							
							<input 	type="date" 
									name="t_time_go" 
									class="form-control"
									required="required" 
									value="<?php=date('y-m-d')?>" 
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
							<input 	type="text" 
									name="t_place_go" 
									class="form-control"
									required="required" 
									placeholder=" t_place_go ">
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
									placeholder=" t_place_back">
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



//=========================== End Edit_trip Page ==========================================>

}elseif ($do=='Edit_hotel') {
	echo "<h1 class='text-center'>Add_hotel Page</h1>";
	echo "<a href='?do=Insert'>Insert</a>";

?>	
		<div class="Add">
			<div class="container">
				<form class="form-horizontal" action="?do=Update_hotel" method="POST">
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




//=========================== End Edit_hotel Page ===============================================================================>
//=========================== End Edit_hotel Page ===============================================================================>
//=========================== End Edit_hotel Page ===============================================================================>
//=========================== End Edit_hotel Page ===============================================================================>
//=========================== End Edit_hotel Page ===============================================================================>








//=========================== End Edit Page ==========================================>

}elseif ($do=='Update') {
	echo "<h1 class='text-center'>Welcom In Update Page</h1>";
	echo "<a href='?do=Delete'>Delete</a>";






//=========================== End Update Page ==========================================>

}elseif ($do=='Delete_clint') {
	echo "<h1 class='text-center'>clints Delete Page</h1>";


	$custid= isset($_GET['custid'])&&is_numeric($_GET['custid']) ? intval($_GET['custid']):0;
	//echo $custid;

	$stmt=$DB->prepare("DELETE FROM `clints` WHERE `c_id` = ?");
	$stmt->execute(array($custid));
	if($stmt->rowcount()>0){
		echo $message="<div class='container alert alert-success'>You Have <strong> DELETE </strong> One Recourd</div>";
		//redirctHome($message,'back',2);
		$back=$_SERVER["HTTP_REFERER"];	  
		header("Refresh:3 ,$back");		
	

}elseif ($do=='Delete_trip') {
	echo "<h1 class='text-center'>trips Delete Page</h1>";


	$custid= isset($_GET['custid'])&&is_numeric($_GET['custid']) ? intval($_GET['custid']):0;
	echo $custid;

	$stmt=$DB->prepare("DELETE FROM `clints` WHERE `c_id` = ?");
	$stmt->execute(array($custid));
	if($stmt->rowcount()>0){
		echo $message="<div class='container alert alert-success'>You Have <strong> DELETE </strong> One Recourd</div>";
		//redirctHome($message,'back',2);
		$back=$_SERVER["HTTP_REFERER"];	  
		header("Refresh:3 ,$back");		
	}

}elseif ($do=='Delete_hotel') {
	echo "<h1 class='text-center'>hotels Delete Page</h1>";


	$custid= isset($_GET['custid'])&&is_numeric($_GET['custid']) ? intval($_GET['custid']):0;
	echo $custid;

	$stmt=$DB->prepare("DELETE FROM `clints` WHERE `c_id` = ?");
	$stmt->execute(array($custid));
	if($stmt->rowcount()>0){
		echo $message="<div class='container alert alert-success'>You Have <strong> DELETE </strong> One Recourd</div>";
		//redirctHome($message,'back',2);
		$back=$_SERVER["HTTP_REFERER"];	  
		header("Refresh:3 ,$back");		
	}
}

}







//=========================== End Delete Page ==========================================>
//=========================== End Update Page ==========================================>



//=========================== End Delete Page ==========================================>









///========================== Footer Of The Page ================================================================>

include 'include/templet/footer_other.php';





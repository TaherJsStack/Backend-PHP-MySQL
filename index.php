<?php
$pageTitle='Login';

session_start();
if (isset($_SESSION['u_name'])) {
		header("Location:profile.php");
		exit();

}
  		
	$header_other='';
	include 'init.php';
 	

 	 ?>
 	 
<div class="user_back">
	<div class="user_login">
		<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
			<h3>Welcom Our User</h3>
			<input 	type="text" 
					class="form-control" 
					name="user_emil" 
					placeholder="Clint_Email" 
					required="required">
			
			<input 	type="number" 
					class="form-control" 
					name="user_pass" 
					placeholder="Your Passport No" 
					required="required">

			<input type="submit" value="login" class="btn btn-primary btn-block">

			<p>
				<a href="regester.php?do=Add_trip" class="btn btn-warning btn-sm" target="blank">Book Travel</a> 
				<a href="regester.php?do=Add_hotel" class="btn btn-warning btn-sm" target="blank">Book Hotel</a> 
				<a href="regester.php?do=Add_Clint" class="btn btn-warning btn-sm" target="blank">Regest Clint</a> 
			</p>
			<?php 
			if ($_SERVER['REQUEST_METHOD']=='POST') {
				$A_EMAIL=$_POST['user_emil'];
				$A_PASS	=$_POST['user_pass'];

				$stmt=$DB->prepare("SELECT c_id,c_name,c_mail,c_passpor FROM clints WHERE c_mail=? AND c_passpor=? LIMIT 1");
				$stmt->execute(array($A_EMAIL,$A_PASS));
				$row=$stmt->fetch();

				//echo $stmt->rowcount();       /// For Test
				//print_r($row);


					if (isset($stmt) && $stmt->rowcount()>0) {
						echo " It Done";             /// For Test
						
						echo $_SESSION['u_name'] =$row['c_name'];
						echo $_SESSION['c_id'] = $row['c_id'];
						//echo print_r($_SESSION);
						header("Location:profile.php");
						exit();

					}else {
				 		?><div class='container'>
				 				<div class="row">
					 				<div class="btn btn-warning  btn-lg">This User Is Not Really Exisest</div></a>
								</div>
				 			</div>   
				 		<?php
					}
				}
			?>
		</form>
	</div>
</div>



<?php include 'include/templet/footer_other.php'; ?>

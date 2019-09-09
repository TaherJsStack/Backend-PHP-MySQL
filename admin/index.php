<?php
session_start();
//$nav="";
$pageTitle='indexPage';

if (isset($_SESSION['Admin_name'])) {
    	header("Location:dashbord.php");
    	exit();	
}
include 'init.php';



if ($_SERVER['REQUEST_METHOD']=="POST") {

	$USERNAME=$_POST['username'];
	$USERPASP=$_POST['Admin_pass'];

	//echo $USERNAME . " " . $USERPASP;

	$stmt=$DB->prepare("SELECT 	c_id,c_name,c_passpor FROM clints WHERE c_name=? AND c_passpor=? AND c_groupID=1");
	$stmt->execute(array($USERNAME,$USERPASP));
	$row=$stmt->fetch();
	if ($stmt->rowcount()>0) {
		$_SESSION['Admin_name']=$USERNAME;
		$_SESSION['Admin_ID']=$row['c_id'];
    	header("Location:dashbord.php");
		
		//echo $row['c_id'];
		//print_r($_SESSEON);
	}

}
?>

<form class="LogIn" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
	<h2>Admin Name</h2>
	<input type="text" class="form-control" name="username" placeholder="Admin_name" autocomplete="off">
	<input type="password" class="form-control" name="Admin_pass" placeholder="Admin_pass" autocomplete="new-password">
	<input type="submit" value="LogIn" class="btn btn-primary btn-block">
</form>








<?php
include 'include/templates/footer.php';

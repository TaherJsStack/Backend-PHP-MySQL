<?php


function getTitle()
{
  GLOBAL $pageTitle;
	if (isset($pageTitle)) {
		echo $pageTitle;
	}else {
		echo 'Defulte Title';
	}
}





/*
** function get titale from page if is really exist
** like  $pageTitle='page title'
**
*/
/*
function getTitle()
{
	GLOBAL $pageTitle;

	if (isset($pageTitle)) {
		echo $pageTitle;
	}else {
		echo "Defulte Page";
	}
}
*//////////////////////////////

//$same=$_SERVER['HTTP_REFERER'];





/*
function Success_redirctHome($url='$_SERVER["HTTP_REFERER"]',$secnd=4){


	header("Refresh: $secnd; $url");
	
	exit();
}
*/
////////////////////////////////////////////////////////

function redirctHome($message,$url= null , $secnd=4){
	if ($url===null) {
		$url="index.php";
	}else{
		if (isset($_SERVER["HTTP_REFERER"])&&$_SERVER["HTTP_REFERER"] !=="") {		
		$url=$_SERVER["HTTP_REFERER"];
		}else{
			$url='index.php';
		}
	}
	echo  $message ;
			//$url=$_SERVER["HTTP_REFERER"];
	header("Refresh: $secnd; $url");
	
	exit();
}

///////////////////////////////////////////////////////////////


/*
**
** Approve or Un Uprove Customer Function 
** it change customer statues 
*/

function un_Aproved($CID){
	GLOBAL $DB;
		$stmt=$DB->prepare("UPDATE customer SET C_Status=0 WHERE C_ID=?");
		$stmt->execute(array($CID));
		header("Refresh:1");
}

function Aproved($CID){
	GLOBAL $DB;
		$stmt=$DB->prepare("UPDATE customer SET C_Status=1 WHERE C_ID=?");
		$stmt->execute(array($CID));
		header("Refresh:.1");
		
}


/////////////////////////////////////////////////////////


function calc_total($selecto,$from)
{
	GLOBAL $DB;
	$stmt=$DB->prepare("SELECT $selecto FROM $from ");
	$stmt->execute();

	return $stmt->rowcount();
}

/*
function getCust($selector){
	GLOBAL $DB;

	$sstmt=$DB->prepare("SELECT customer.C_ID,cust_hot.H_ID,cust_trip.T_ID
						 FROM customer
						 JOIN cust_hot ON cust_hot.C_ID=customer.C_ID
						 JOIN cust_trip ON cust_trip.C_ID=customer.C_ID
						  ");
	$sstmt->execute();
	$coc=$sstmt->fetch();
	return $coc[$selector];
}

*/

/*=========================*/

function getcust()
{
	GLOBAL $DB;
	$stmt=$DB->prepare("SELECT * FROM customer");
	$stmt->execute();
	$rows=$stmt->fetchall();

	return $rows;
}

 
function gettrip()
{
	GLOBAL $DB;
	$stmt=$DB->prepare("SELECT * FROM trip");
	$stmt->execute();
	$rows=$stmt->fetchall();

	return $rows;
}


 
function gethot($H_ID)
{
	GLOBAL $DB;
	$stmt=$DB->prepare("SELECT * FROM hotel WHERE H_ID=?");
	$stmt->execute(array($H_ID));
	$rows=$stmt->fetchall();

	return $rows;
}













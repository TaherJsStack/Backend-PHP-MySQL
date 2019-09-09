<?php


	include 'admin/conDB.php';

	$tpl="include/templet/";              	//templetes Rout
	$css="layout/css/";              		//css Rout
	$js	="layout/js/";              		//js Rout
	$fun="include/function/";              	//function Rout


include $fun . "function.php";
//include $tpl . 'header.php';

if (isset($header_other)) {
	include $tpl . 'header_other.php';
}else {
	include $tpl . 'header.php';
}








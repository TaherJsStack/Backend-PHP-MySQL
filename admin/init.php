<?php 


include 'conDB.php';

/*================= rouets =======================*/


	$tpl="include/templates/";
	$func="include/function/";
	$css="layout/css/";
	$js	="layout/js/";

include $func . 'function.php';

include $tpl . 'header.php';

if (isset($nav)) { include $tpl . 'navbar.php'; }












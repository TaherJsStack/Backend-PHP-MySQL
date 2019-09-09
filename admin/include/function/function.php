<?php


/*
** 	function get title page
** 	put getTitle($frasee) in header
**	put  $pageTitle=''; in each page with title that you named or what you want	
*/

function getTitle()
{
 	GLOBAL $pageTitle;

	if (isset($pageTitle)) {
		echo $pageTitle;
	}else {
		 echo  "Default Titele";
	}

}


/////////////////////////////////////////////////////////
/*
**
**
**
*/


function calc_total($selecto,$from)
{
	GLOBAL $DB;
	$stmt=$DB->prepare("SELECT $selecto FROM $from ");
	$stmt->execute();

	return $stmt->rowcount();
}










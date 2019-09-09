<?php



try {
	$DB= NEW PDO("mysql:local=host;dbname=ticketcompant","root","");
	//echo "Connect With Database Is Done";
} catch (Exception $e) {
	echo "Sorry You Have Some Erorres" . $e->getMessage();
}




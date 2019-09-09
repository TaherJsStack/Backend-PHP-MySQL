<?php

//====================================================================
// [ Add , Delete , Edite , Manage , Update , Insert , States   ] 
//====================================================================

$do=isset($_GET['do']) ? $_GET['do'] : 'Manage';


echo $do;

if ($do=='Manage') {
	echo "<h1 class='text-center'>Welcom In Manage Page</h1>";
	echo "<a href='?do=Add'>Add</a>";
}elseif ($do=='Add') {
	echo "<h1 class='text-center'>Welcom In Add Page</h1>";
	echo "<a href='?do=Insert'>Insert</a>";

}elseif ($do=='Insert') {
	echo "<h1 class='text-center'>Welcom In Insert Page</h1>";
	echo "<a href='?do=Edite'>Edite</a>";

}elseif ($do=='Edite') {
	echo "<h1 class='text-center'>Welcom In Edite Page</h1>";
	echo "<a href='?do=Update'>Update</a>";

}elseif ($do=='Update') {
	echo "<h1 class='text-center'>Welcom In Update Page</h1>";
	echo "<a href='?do=Delete'>Delete</a>";

}elseif ($do=='Delete') {
	echo "<h1 class='text-center'>Welcom In Delete Page</h1>";

}


/////////////////////////////////////////////////////////////////////////////////////


//=================================== Start Of The content =========================================================>



//====================================================================
// [ Add , Delete , Edit , Manage , Update , Insert , States   ] 
//====================================================================

$do=isset($_GET['do']) ? $_GET['do'] : 'Manage';


echo $do;

if ($do=='Manage') {
	echo "<h1 class='text-center'>Welcom In Manage Page</h1>";
	echo "<a href='?do=Add'>Add</a>";





//=========================== End Manage Page ==========================================>

}elseif ($do=='Add') {
	echo "<h1 class='text-center'>Welcom In Add Page</h1>";
	echo "<a href='?do=Insert'>Insert</a>";





//=========================== End Add Page ==========================================>

}elseif ($do=='Insert') {
	echo "<h1 class='text-center'>Welcom In Insert Page</h1>";
	echo "<a href='?do=Edite'>Edite</a>";






//=========================== End Insert Page ==========================================>

}elseif ($do=='Edit') {
	echo "<h1 class='text-center'>Welcom In Edite Page</h1>";
	echo "<a href='?do=Update'>Update</a>";






//=========================== End Edit Page ==========================================>

}elseif ($do=='Update') {
	echo "<h1 class='text-center'>Welcom In Update Page</h1>";
	echo "<a href='?do=Delete'>Delete</a>";






//=========================== End Update Page ==========================================>

}elseif ($do=='Delete') {
	echo "<h1 class='text-center'>Welcom In Delete Page</h1>";

}









//=========================== End Delete Page ==========================================>









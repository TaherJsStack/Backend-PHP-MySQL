<?php
$pageTitle='Home';

include 'init.php';
?>
<div  id="welcome">
<div class="welcome">
	<div class="container">
		<div class="row">
			<h1 CLASS="wow fadeInDown" data-wow-duration='3s' data-wow-offset='100'>Welcome Where Can You Save Your Time</h1>
			<div class="col-xs-6 col-md-6">
				<div class="info wow fadeInLeft" data-wow-duration='3s' data-wow-offset='100'>
					hrer where can you get all funy and saving time
				</div>
			</div>
			<div class="col-xs-6 col-md-6">
				<div class="more-info">

					<a class="btn btn-primary  btn-lg wow fadeInRight" data-wow-duration='3s' data-wow-offset='100' href="#deal">
					  Get Started And Make deal
					</a>
					<button class="btn btn-primary  btn-lg wow fadeInRight" data-wow-duration='3s' data-wow-offset='100' type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
					  Login And Check Your Book
					</button>
					<div class="collapse" id="collapseExample">
					  <div class="well">

<?php
session_start();
if (isset($_SESSION['u_name'])) {
	echo "<button class='btn btn-primary' type='button'><a href='profile.php'>Open Profile</a></button>";
}else{

?>					  	
					    <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
					    	<input type="text" name="usremail" placeholder="Here Can You Insert Your Email" class="form-control">
					    	<input type="pas" name="usrpass" placeholder="And Here Pas No" class="form-control">
					    	<input type="submit" value="Login"  class="btn btn-primary ">
					    </form>
<!--========================================== Login Form   ===============================================================-->

<?php

if ($_SERVER['REQUEST_METHOD']=='POST') {
	$A_EMAIL=@$_POST['usremail'];
	$A_PASS	=@$_POST['usrpass'];

	$stmt=$DB->prepare("SELECT c_id,c_name,c_mail,c_passpor FROM clints WHERE c_mail=? AND c_passpor=? LIMIT 1");
	$stmt->execute(array($A_EMAIL,$A_PASS));
	$row=$stmt->fetch();

	//echo $stmt->rowcount();       /// For Test
	//print_r($row);


	if ($stmt->rowcount()>0) {
		echo " It Done";             /// For Test
		
		echo $_SESSION['u_name'] =$row['c_name'];
		echo $_SESSION['c_id'] = $row['c_id'];
		//echo print_r($_SESSION);
			header("refresh:1,profile.php");
			exit();

    	

		exit();

	}else { echo "What Do You Try To Do"; }
}
}
?>
<!--========================================== End Login Form =================================================================-->
					  </div>
					</div>
				</div>
                        
				</div>
			</div>
		</div>
	</div>
</div>
</div>

<div class="head" id="head" >
	<div class="top">
		<div class="container">
		<p class="text-center">We search for the best travel offers from countless online travel providers covering flights, package holidays and hotels. We always assess each offer independently to ensure that not only is the price right, but also that the quality also meets our expectations. In addition, we only recommend trips that we would be happy to book ourselves. Our years of experience help us to know where and when bargains can be found.</p>			
		</div>
	</div>
	<div class="under" id="under">
		<video autoplay="autoplay" loop="loop">
			<source src="layout/img/banner1.mp4" type="video/mp4">
		</video>
	</div>
</div>


<section class="map ">
	<iframe class="wow fadeInUp" data-wow-duration='3s' data-wow-offset='100' src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14324.088807248801!2d32.70948892414536!3d26.163406402206036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x144eb621bbcb5683%3A0x4c13ad65644fa92f!2spandaicerolls!5e0!3m2!1sen!2sin!4v1501261423454" frameborder="0"  allowfullscreen></iframe>
</section>
<section class="latest padding">
	<div class="container">
		<div class="row">
			<h1 class="text-center"><i class="fa fa-binoculars"></i> Latest News</h1>
			<div class="col-md-3 col-sm-6  col-xs-6  wow fadeInUp" data-wow-duration='3s' data-wow-offset='100'>
				<div class="box">
					<div class="btop">
						<img src="layout/img/latestNews/lts2.jpg">
						<!--<video><source src="layout/img/banner1.mp4" type="mp4"></video>-->
					</div>
					<div class="bunder">
						<h3>this is the Title </h3>
						<p>
							<span>End in <i class=" fa fa-calendar"></i> 4/5/2017</span>
							this is the this is the this is the this is the this is the this is the this is the this is the 
						</p>
					</div>
				</div>
			</div>
			<!--====================-->
			<!--====================-->
			<div class="col-md-3  col-sm-6  col-xs-6 wow fadeInUp" data-wow-duration='3s' data-wow-offset='100'>
				<div class="box">
					<div class="btop">
						<img src="layout/img/latestNews/lts3.jpg">
					</div>
					<div class="bunder">
						<h3>this is the Title </h3>
						<p>
							<span>End in <i class=" fa fa-calendar"></i> 4/5/2017</span>
							this is the this is the this is the this is the this is the this is the this is the this is the 
						</p>
					</div>
				</div>
			</div>
			<!--====================-->
			<!--====================-->
			<div class="col-md-3 col-sm-6  col-xs-6 wow fadeInUp" data-wow-duration='3s' data-wow-offset='100'>
				<div class="box">
					<div class="btop">
						<img src="layout/img/latestNews/lts4.jpg">
					</div>
					<div class="bunder">
						<h3>this is the Title </h3>
						<p>
							<span>End in <i class=" fa fa-calendar"></i> 4/5/2017</span>
							this is the this is the this is the this is the this is the this is the this is the this is the 
						</p>
					</div>
				</div>
			</div>
			<!--====================-->			
			<!--====================-->
			<div class="col-md-3 col-sm-6  col-xs-6 wow fadeInUp" data-wow-duration='3s' data-wow-offset='100'>
				<div class="box">
					<div class="btop">
						<img src="layout/img/latestNews/lts1.jpg">
					</div>
					<div class="bunder">
						<h3>this is the Title </h3>
						<p>
							<span>End in <i class=" fa fa-calendar"></i> 4/5/2017</span>
							this is the this is the this is the this is the this is the this is the this is the this is the 
						</p>
					</div>
				</div>
			</div>
			<!--====================-->	
			<div class="col-md-12"> 
				<div class="sometext class='wow fadeInUp" data-wow-duration='3s' data-wow-offset='100'>
					<h3 ><i class=" fa fa-info wow fadeInUp" data-wow-duration='3s' data-wow-offset='100'></i> International Getaway Deals</h3>
					<h5 class='wow fadeInUp" data-wow-duration='3s' data-wow-offset='100'>
<strong class='wow fadeInUp" data-wow-duration='3s' data-wow-offset='100'>Book international vacation packages with</strong> <span>ticket.info</span> and create memories that will last a lifetime! No matter if you are on your annual holiday as a family, or just starting out your vacation traditions as newlyweds, with <span>ticket.info</span> you will create your very own travel history. White sand beaches and pristine coastlines call some, while others prefer hiking the mountains. <span>ticket.info</span> offers you the rest and relaxation you prefer. Treat yourself to a top vacation. Select one of the many all-inclusive vacation packages fulfilling all of your vacation dreams. With <span>ticket.info</span>, booking a vacation has never been easier.</h5>
					<p class='wow fadeInUp" data-wow-duration='3s' data-wow-offset='100'>Cheap Vacation Spots in the US & Canada
With so many options on top vacation spots to choose from, <span>ticket.info</span> can help you find vacation deals in the US and Canada. Maximize your savings by booking an attractive vacation packages on <span>ticket.info</span> . For trips from New York to Vancouver, <span>ticket.info</span> offers vacations that you are looking for. <br> Affordable Vacations in Europe
 <span>ticket.info</span> makes it easy to book European vacation packages. With top deals on international flights & hotels, anyone can discover Europe's hidden treasures - often at a discount. From Ireland to Italy we are your one-stop shop for your dream getaways. On  <span>ticket.info</span> , you can compare prices on your favorite vacation destinations. Learn about what each destination has to offer. We let you in on secrets on how to create cheap and affordable vacations. Wherever your European vacations take you, you will spend more time making the most of your trips when booking with  <span>ticket.info</span> .</p>
				</div>				
			</div>				
		</div>
	</div>
</section>
<section class="scrib padding">
	<div class="container">
		<div class="row">
			<h5>You can save <span> 10% or more </span> off things to do with member prices. subScribe, it's free!</h5>
			<div class="col-md-6 col-md-reset-6"></div>
			<div class="col-md-6">
				<div class="scripe-box wow fadeInUp" data-wow-duration='3s' data-wow-offset='100'>
					<div class="Submit">
						<form class="navbar-form navbar-left" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
						  <div class="form-group">
						    <input type="email" name="c_mail" class="form-control wow fadeInUp" data-wow-duration='3s' data-wow-offset='100' placeholder="Put Your Mail To SubScripe">
						  </div>
						  <button type="submit" class="btn btn-default">SubScrip</button>
						</form>
						<?php 
						if ($_SERVER["REQUEST_METHOD"]=='POST') {
							$EMAIL=filter_var($_POST['c_mail'],FILTER_SANITIZE_EMAIL);
							if (empty($EMAIL)) {
									echo $MS= "The Email Empty You Must Inter Right Email";
								}else{
									$quer=$DB->prepare("SELECT c_mail FROM clints WHERE c_mail=? LIMIT 1");
									$quer->execute(array($EMAIL));
									if ($quer->rowcount()>0) {
										echo "<div class=' alert alert-success'><strong> Thanks You Are Already Subscripe Us</strong></div>";
									}else{
										$stmt=$DB->prepare("INSERT INTO clints (c_name,c_mail) VALUES('Hayef',:EMAIL) ");
										$stmt->execute(array('EMAIL' => $EMAIL));
										echo "<div class=' alert alert-success'><strong> Thank You for Subscripe Us</strong></div>";
									}
								}
							}
						 ?>
						<br><hr>
						<h4 class="text-center wow fadeInUp" data-wow-duration='3s' data-wow-offset='100'>SubScripe for <span>NewsLetter</span></h4>
					</div>
				</div>
			</div>
		</div>		
	</div>
</section>
<section class="offers">
	<div class="container padding">
		<div class="row">
				<h1 class="text-center"><i class=" fa fa-suitcase wow fadeInUp" data-wow-duration='3s' data-wow-offset='100'></i> Latest offers </h1>
			<!--====================-->
			<div class="col-md-4  col-xs-4 wow fadeInUp" data-wow-duration='3s' data-wow-offset='100'>
				<div class="offer-box">
					<div class="otop">
						<img src="layout/img/Newfolder/it1 (1).jpg">
					</div>
					<div class="medl">
						<h4>Medel  </h4>
					</div>
					<div class="ounder">
						<h3>titel</h3>
						<p>prefix prefix prefix prefix prefix prefix prefix </p>
						<span>$20</span> 
					</div>
				</div>
			</div>
			<!--====================-->
			<!--====================-->
			<div class="col-md-4 col-xs-4 wow fadeInUp" data-wow-duration='3s' data-wow-offset='100'>
				<div class="offer-box">
					<div class="otop">
						<img src="layout/img/Newfolder/it1 (2).jpg">
					</div>
					<div class="ounder">
						<h3>titel</h3>
						<p>prefix prefix prefix prefix prefix prefix prefix </p>
						<span>$20</span> 
					</div>
				</div>
			</div>
			<!--====================-->
			<!--====================-->
			<div class="col-md-4  col-xs-4 wow fadeInUp" data-wow-duration='3s' data-wow-offset='100'>
				<div class="offer-box">
					<div class="otop">
						<img src="layout/img/Newfolder/it1 (3).jpg">
					</div>
					<div class="ounder">
						<h3>titel</h3>
						<p>prefix prefix prefix prefix prefix prefix prefix </p>
						<span>$20</span> 
					</div>
				</div>
			</div>
			<!--====================-->
		</div>
	</div>
</section>
<section class="deal" id="deal">
	<div class="container padding">
		<div class="row">
			<!--====================-->
				<h1 class="text-center"><i class="fa fa-handshake-o"></i> Lets Make Deal </h1>
			<!--====================-->
			<div class="col-md-6 wow fadeInUp" data-wow-duration='3s' data-wow-offset='100'>
				<div class="deal-box">
				<!--=========================================================================-->
				<h2>Book on ticket.info <i class="fa fa-camera-retro"></i></h2>
				<p> Book on TripAdvisor  you’ll benefit from the knowledge and know-how of the world’s largest travel community, with trusted reviews and knowledgeable owners helping you have your best trip yet. And with TripAdvisor’s unique Payment Protection, you can enjoy the peace of mind that comes with booking on the world’s largest travel site </p>
				<div>
				 <div class="thumbnail">
			      <img src="" alt="">
			      <div class="caption">
			        <h3>the offers real and bookable</h3>
			        <p>We Are here For You</p>
			        <p>
			        	<a href="regester.php?do=Add_trip" class="btn btn-primary" target="blank">Book Travel</a> 
			        	<a href="regester.php?do=Add_hotel" class="btn btn-default" target="blank">Book Hotel</a> 
			        	<a href="regester.php?do=Add_Clint" class="btn btn-primary" target="blank">Regest Clint</a> 
			        </p>
			      </div>
			    </div>
				</div>
				<!--=================================================================================-->
			</div>
			<div class="col-md-6"></div>
		</div>
	</div>
</section>

<section class="how-it-work">
	<div class="container padding">
		<h1 class="text-center"><i class=" fa fa-archive"></i> How It Work</h1>
		<div class="row">

			<div class="col-md-6 wow fadeInUp" data-wow-duration='3s' data-wow-offset='100'>
				<div class="col-md-1"><h3>1</h3></div>
				<div class="col-md-11">
					<h4>Register Now</h4>
					<p>reservations months in advance to land cheap cruise deals, because you'll find bargains tailored to meet all your individual needs and preferences right here, right now. Discover how easy it is to book a personalized trip, even from your mobile device, as you embark on a cruise that will relax and take you awa</p>
				</div>
			</div>

			<div class="col-md-6 wow fadeInUp" data-wow-duration='3s' data-wow-offset='100'>
				<div class="col-md-1"><h3>2</h3></div>
				<div class="col-md-11">
					<h4>We Will Contact Weth You In The Next Hours</h4>
					<p class="p">reservations months in advance to land cheap cruise deals, because you'll find bargains tailored to meet all your individual needs and preferences right here, right now. Discover how easy it is to book a personalized trip, even from your mobile device, as you embark on a cruise that will relax and take you awa </p>
				</div>
			</div>

			<div class="col-md-6 wow fadeInUp" data-wow-duration='3s' data-wow-offset='100'>
				<div class="col-md-1"><h3>3</h3></div>
				<div class="col-md-11">
					<h4>Your proPeryt Will Be Set In The Next Few Days </h4>
					<p>reservations months in advance to land cheap cruise deals, because you'll find bargains tailored to meet all your individual needs and preferences right here, right now. Discover how easy it is to book a personalized trip, even from your mobile device, as you embark on a cruise that will relax and take you awa</p> 
				</div>
			</div>

			<div class="col-md-6 wow fadeInUp" data-wow-duration='3s' data-wow-offset='100'>
				<div class="col-md-1"><h3>4</h3></div>
				<div class="col-md-11">
					<h4>Finaly Check and Start Selling Globally</h4>
					<p>reservations months in advance to land cheap cruise deals, because you'll find bargains tailored to meet all your individual needs and preferences right here, right now. Discover how easy it is to book a personalized trip, even from your mobile device, as you embark on a cruise that will relax and take you awa</p>
				</div>
			</div>


			
		</div>
	</div>
</section>
<!------------------------------------------ Testimonials Section ------------------------------------------------------>
<section class="Testimonials wow fadeInUp" data-wow-duration='3s' data-wow-offset='100'>
	<div class="container">
		<img src="layout/img/Testimonials/Duble.png">
		<h1 class="text-center"><i class=" fa fa-comments"></i> Testimonials</h1>
		<div class="test">
			<div id="carousel-example-generi" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
				<li data-target="#carousel-example-generi" data-slide-to="0" class="active">
					<img src="layout/img/Testimonials/cust1.jpg">
				</li>
				<li data-target="#carousel-example-generi" data-slide-to="1">
					<img src="layout/img/Testimonials/cust2.jpg">				  
				  </li>
				<li data-target="#carousel-example-generi" data-slide-to="2">
					<img src="layout/img/Testimonials/cust3.jpg">
				  </li>
			  </ol>
			  <!-- Wrapper for slides -->
			  <div class="carousel-inner text-center" role="listbox">
				<div class="item active">
				  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type speci
					book. It has survived not only five centuries, but also the leap into electronic typesetting.
					 unchanged.		
					</p>
					<h6>Client Name</h6>
					<span>Designation</span>
				</div>
				<div class="item">
				  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type speci
					book. It has survived not only five centuries, but also the leap into electronic typesetting.
					 unchanged.		
					</p>
					<h6>Client Name</h6>
					<span>Designation</span>					
				</div>
				<div class="item">
				  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type speci
					book. It has survived not only five centuries, but also the leap into electronic typesetting.
					 unchanged.		
					</p>
					<h6>Client Name</h6>
					<span>Designation</span>
				</div>
		
				 <!-- you can add new image here -->
			  </div>
			</div>			
		</div>
	</div>
</section>
	
	
<!--------------------------------------- End Testimonials Section ------------------------------------------>

<section class="partener">
	<div class="container padding">
		<div class="partener-box wow fadeInUp" data-wow-duration='3s' data-wow-offset='100'>
			<!--====================-->
				<h1 class="text-center"><i class=" fa fa-cogs"></i> Oru Partenrs</h1>
			<div class="partener-info">
				<h5 class="text-center wow fadeInUp" data-wow-duration='3s' data-wow-offset='100'>Our parteners Pepole WHo Support Our Sucsessful Work</h5>
				<p>
Our US headquarters are located in Charlestown, MA while our global headquarters are in Berlin. We have additional offices in London, Belgrade, Seville, and Lyon.</p>
			</div><!--====================-->
			<div class="ul wow fadeInUp" data-wow-duration='3s' data-wow-offset='100'>
				<ul>
					<li><img src="layout/img/par/c01.gif" alt=""></li>
					<li><img src="layout/img/par/c02.gif" alt=""></li>
					<li><img src="layout/img/par/c03.gif" alt=""></li>
					<li><img src="layout/img/par/c04.gif" alt=""></li>
					<li><img src="layout/img/par/c05.gif" alt=""></li>
				</ul>
			</div>
		</div>
	</div>
</section>




<?php include 'include/templet/footer.php'; ?>


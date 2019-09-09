

<section id="up" >
	<div>
		<a href="#"><i class=" fa fa-angle-double-up"></i></a>
	</div>
</section>






		<section class="End">
			<div class="container padding">
				<div class="row">
				<div class="footer">
					<div class="col-md-6">
						<div class="left-side">
							<div class="col-md-6">
								<h3></h3>
								<ul>
									<li><a href="">Data protection</a></li>
									<li><a href="">newsletter</a></li>
									<li><a href="">FAQ</a></li>
									<li><a href=""><img src="layout/img/Ticket.png"></a></li>
								</ul>
							</div>
							<div class="col-md-6">
								<h3></h3>
								<ul>
									<li><a href="">Contact ticket.info</a></li>
									<li><a href="">Customers</a></li>
									<li><a href="">Jobs</a></li>
									<li><a href="">Terms</a></li>
								</ul>						
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="right-side">
							<p>Connect With Us 
								<span class="pull-right">
									<a href="wwww.facebook.com" target="plank"><i class="fa fa-facebook-square fa-2x"></i></a>
									<a href="wwww.twitter.com" target="plank"><i class="fa fa-twitter-square fa-2x"></i></a>
									<a href="wwww.youtube.com" target="plank"><i class="fa fa-youtube-square fa-2x"></i></a>
								</span>
							</p>
							<hr>
							<form action="<?php $_SERVER['REQUEST_METHOD']=='POST' ?>" method="POST">
								<p>Sign Up Today And Never Miss Another Deal Again</p>
								<input type="Email" name="c_mail" placeholder="get Cheap Air Mail">
								<input type="submit" value="Sign Up">
							</form>
							<?php 
							if ($_SERVER["REQUEST_METHOD"]=='POST') {
								$EMAIL=filter_var($_POST['c_mail'],FILTER_SANITIZE_EMAIL);
								if (empty($EMAIL)) {
										echo $MS= "<div class=' alert alert-dangare'><strong> The Email Empty You Must Inter Right Email</strong></div>";
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
						</div>
					</div>
				</div></div>
			</div>
		</section>


	<script type="text/javascript" src="<?php echo $js; ?>jquery-1.12.0.min.js"></script>
	<script type="text/javascript" src="<?php echo $js; ?>bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo $js; ?>Myjs.js"></script>
	<script type="text/javascript" src="<?php echo $js; ?>wow.min.js"></script>
		<script>new WOW().init();</script>

</body>
</html>
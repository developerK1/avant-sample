<?php
	include_once "../header.php";
	session_start();

	if(!isset($_SESSION['cart'])){
	      header("location: ../");
	 }else {
		 echo '<header>
						<div class="container-fluid" >
							<div class="row">
								<div class="contacts">
									<div class="contHOld">
										<a href="tel:+27761762729"><p>+2776 176 2729</p></a>
										<a href="#" data-toggle="modal" data-target="#contact-open"><p class="p">MaobaTechsolution@gmail.com</p></a>
									</div>
									<div class="socialie-icon">
										<img src="../images/social/facebook.png" alt="facebook-icon" />
										<a href="https://wa.me/+27761762729?text=I%27m%20interested%20in%20your%20"><img src="../images/social/whatsapp.png" alt="whatsAPP-icon" /></a>
										<a href="tel:+27761762729"><img src="../images/social/call.png" alt="phone-icon" /></a>
										<a href="#" data-toggle="modal" data-target="#contact-open"><img src="../images/social/email.png" alt="email-adress-icon" /></a>
										<!--  <img src="images/social/twitter.png" alt="twitter-icon" />
										<img src="images/social/instagram.jpg" alt="instagram-icon" /> -->
									</div>
								</div>
							</div>
						</div>
					<nav class="navbar navbar-expand-lg navbar-light bg-light">

					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
					  </button>
						<a class="navbar-brand" href="#"><img src="../mtslogo.png" height="56px"/>
								</a>
					  <div class="collapse navbar-collapse" id="navbarSupportedContent">
					    <ul class="navbar-nav mr-auto">
								<li class="nav-item active at-page">
									<a class="nav-link" href="../index.html">ABOUT</a>
								</li>
							  <li class="nav-item">
									<a class="nav-link" href="../services.html">PACKAGES</a>
							  </li>
							  <!--
							  <li class="nav-item">
									<a class="nav-link" href="#">GALLERY</a>
							  </li>
							  -->
							  <li class="nav-item">
									<a href="#" data-toggle="modal" class="nav-link" data-target="#contact-open">CONTACT US</a>
							  </li>
						</ul>
					  </div>
					</nav>
					</header>
					<section class="message-content">
					<div class="msg-cont">
						<div class="messgae">
							<h2> MESSAGE SUCCESFULLY SENT</h2>
						</div>
						</div>
						<div class="container-wrapper container">
						<article>
							<h3 class="three">THANKS FOR CONTACTING MTS</h3>
						</article>
						<aside class="container">
								<aside >
									<a href="../index.html"><button > BACK HOME HERE </button></a>
								</aside>
						</aside>
						<div id="orange">
								<p>We are beauty and functionality meets your online presence need.</p>
								<p>Our design structure and building...</p>
						</div>
						</div>

					</section>
			';
}
echo "<script>setTimeout(()=>window.location.href='../',3000)</script>";
//include_once "../footer.php";
?>

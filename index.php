<?php
	include_once "dynamics/dynamics.php";
	include_once "header.php";
	session_unset();
?>
<header >
	<a name="to-top"></a>
	<div class="container-fluid" >
			<div class="contacts">
				<div class="contHOld">
					<a href="tel:+27798879375"><p>TELL :<?php echo $busphone ?></p></a>
					<a data-toggle="modal" data-target="#mail-modal"><p class="p">EMAIL: <?php echo $busmail ?></p></a>
				</div>
				<div class="socialie-icon">
					<img src="image/social/facebook.png" alt="facebook-icon" />
					<a href="https://wa.me/+27798879375?text=I'm%20interested%20in%20">
						<img src="image/social/whatsapp.png" alt="whatsAPP-icon" />
					</a>
					<a href="tel:+27798879375">
						<img src="image/social/call.png" alt="phone-icon" />
					</a>
					<a data-toggle="modal" data-target="#mail-modal" id="not-show">
						<img src="image/social/email.png" alt="email-adress-icon" />
					</a>
					<!--<img src="image/social/twitter.png" alt="twitter-icon" />
					<img src="image/social/instagram.jpg" alt="instagram-icon" />-->
				</div>
			</div>
	</div>
<nav class="navbar navbar-expand-lg navbar-light clr1">
  <a class="navbar-brand" href="#"><img src="image/logo.jpg" height="56px"/>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<!--<span class="navbar-toggler-icon"></span>-->
		<div id="hamburger" class="columned">
			<div class="lines" id="line1"></div>
			<div class="lines" id="line2"></div>
			<div class="lines" id="line3"></div>
		</div>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
			<li class="nav-item active at-page">
				<a class="nav-link" href="#"><button>ABOUT</button></a>
			</li>
		  <li class="nav-item">
				<!--<a class="nav-link" href="services.html"><button>GALLERY</button></a>-->
				<a data-toggle="modal" class="nav-link" data-target="#functional-modal"><button>GALLERY</button></a>
		  </li>
		  <li class="nav-item">
				<!--<a class="nav-link " href="#"><button>CONTACT US</button></a>-->
				<a data-toggle="modal" class="nav-link" data-target="#functional-modal"><button>CONTACT US</button></a>
		  </li>
		  <li class="nav-item green">
		  		<a data-toggle="modal" class="nav-link" data-target="#functional-modal"><button>BOOK</button></a>
		  </li>
	</ul>
  </div>
</nav>
</header>
<div id="carouselControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
		<div class="carousel-item active slide-Item1">
			<div class="wrapper">
					<div class="content">
						<h1><?=$busName ?></h1>
						<a data-toggle="modal" data-target="#mail-modal"><button class="read">READ MORE<buton></a>
					</div>
			</div>
		</div>
		<div class="carousel-item slide-Item2">
			<div class="wrapper">
				<div class="content">
					<h1>Accomodations</h1>
					<a data-toggle="modal" class="nav-link" data-target="#functional-modal"><button class="read">READ MORE<buton></a>
				</div>
			</div>
		</div>
		<div class="carousel-item slide-Item3">
			<div class="wrapper">
				<div class="content">
					<h1>Wedding Ceremony</h1>
					<a data-toggle="modal" class="nav-link" data-target="#functional-modal"><button class="read">READ MORE<buton></a>
				</div>
			</div>
		</div>
    </div>
  <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- CARO end -->
<!-- ===================>>> WELCOME <<<===================== -->
<section id="welcome" classs="container">
	<div class="row">
		<aside class="col-lg-6 col-md-6 centerfy">
			<img src="image/gallery/entrance.jpg" />
		</aside>
		<aside class="col-lg-6 col-md-6 columned">
			<p class="welcome-p">WELCOME</p>
			<h3><?=$busName ?></h3>
			<p><?=$who ?></p>
		</aside>
	</div>
</section>
<!-- ===================>>> |DISPLAY <<<===================== -->
<div class="divider clr1"></div>
<!-- ===================>>> |DISPLAY <<<===================== -->
<section id="display">
	<div class="container">
		<div class="row">
			<aside class="col-lg-4 col-md-4 columned">
				<div class="img-wrapper">
					<img src="image/gallery/wedd.jpg" />
					<div class="overlay centerfy">
						<a href="#gallery"><h4>View Gallery</h4></a>
					</div>
				</div>
				<h4>WEDDINGS</h4>
				<p><?=$who ?></p>
			</aside>
			<aside class="col-lg-4 col-md-4 columned">
				<div class="img-wrapper">
					<img src="image/gallery/functions.jpg" />
					<div class="overlay centerfy">
						<a href="#gallery"><h4>View Gallery</h4></a>
					</div>
				</div>
				<h4>FUNCTIONS</h4>
				<p><?=$who ?></p>
			</aside>
			<aside class="col-lg-4 col-md-4 columned">
				<div class="img-wrapper">
					<img src="image/gallery/decor.jpg" />
					<div class="overlay centerfy">
						<a href="#gallery"><h4>View Gallery</h4></a>
					</div>
				</div>
				<h4>DECOR</h4>
				<p><?=$who ?></p>
			</aside>
		</div>
	</div>
</section>
<!-- ===================>>> BIG BOOK <<<===================== -->
<section class="horizontal-center" id="room-book">
	<div class="horizontal-center">
		<h3>Book With US</h3>
		<p>Get that service you deserve</p>
		<a data-toggle="modal" class="nav-link" data-target="#functional-modal"><button>BOOK</button></a>
	</div>
</section>
<!-- ===================>>> Portfolio <<<===================== -->
<section id="portfolio" class="portfolio pb-0 pt-5">
	<a name="to-portfolio"></a>
	<div class="container">
		<div class="row mb-5">
			<a name="gallery"></a>
			<div class="col-md-12 text-center mb-3">
				<div class="heading wow fadeInUp" data-wow-delay="0.3s">
					<h1>GALLERY</h1>
					<div class="bord-bot"></div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-sm-6 p-0">
				<div class="port-cont">
					<a href="image/gallery/pic001.jpg" title="">
						<img src="image/gallery/pic01.jpg" alt="" class="img-fluid">
					</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 p-0">
				<div class="port-cont">
					<a href="image/gallery/pic003.jpg" title="">
						<img src="image/gallery/pic03.jpg" alt="" class="img-fluid">
					</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 p-0">
				<div class="port-cont">
					<a href="image/gallery/pic002.jpg" title="">
						<img src="image/gallery/pic02.jpg" alt="" class="img-fluid">
					</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 p-0">
				<div class="port-cont">
					<a href="image/gallery/pic004.jpg" title="">
						<img src="image/gallery/pic04.jpg" alt="" class="img-fluid">
					</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 p-0">
				<div class="port-cont">
					<a href="image/gallery/pic005.jpg" title="">
						<img src="image/gallery/pic05.jpg" alt="" class="img-fluid">
					</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 p-0">
				<div class="port-cont">
					<a href="image/gallery/pic006.jpg" title="">
						<img src="image/gallery/pic06.jpg" alt="" class="img-fluid">
					</a>
				</div>
			</div>


			<div class="col-md-4 col-sm-6 p-0">
				<div class="port-cont">
					<a href="image/gallery/wedding.jpg" title="">
						<img src="image/gallery/wedding1.jpg" alt="" class="img-fluid">
					</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 p-0">
				<div class="port-cont">
					<a href="image/gallery/wall.jpg" title="">
						<img src="image/gallery/wall1.jpg" alt="" class="img-fluid">
					</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 p-0">
				<div class="port-cont">
					<a href="image/gallery/cerom.jpg" title="">
						<img src="image/gallery/cerom1.jpg" alt="" class="img-fluid">
					</a>
				</div>
			</div>


		</div>
	</div>
</section>
<!-- ===================>>> Portfolio <<<===================== -->
<div class="border columned ">
	<div class="row">
		<div class="centerfy">
			<article class="col-lg-8 col-md-8 centerfy">
				<p><?=$who ?></p>
			</article>
			<article class="col-lg-4 col-md-4 centerfy">
				<a data-toggle="modal" data-target="#functional-modal"><button class="butn">Get in Touch</button></a>
			</article>
		</div>
	</div>
</div>
<!-- ===================>>> WHAT WE DO <<<===================== -->
<section id="what-we-do">
	<h3>WHAT WE DO</h3>
	<div class="row">
		<aside class="col-lg-4 col-md-4 horizontal-center">
			<div class="icon"><i class="material-icons">event</i></div>
			<h5>Event Venue</h5>
			<p><?=$who ?></p>
		</aside>
		<aside class="col-lg-4 col-md-4 horizontal-center">
			<div class="icon"><i class="material-icons">cake</i></div>
			<h5>Wedding</h5>
			<p><?=$who ?></p>
		</aside>
		<aside class="col-lg-4 col-md-4 horizontal-center">
			<div class="icon"><span class="material-icons">bed</span></div>
			<h5>Accomodation</h5>
			<p><?=$who ?></p>
		</aside>
	</div>
	<!--<div class="row">
		<aside class="col-lg-4 col-md-4">
			<div class="icon">ICON</div>
			<h5>HEADING</h5>
			<p><?=$who ?></p>
		</aside>
		<aside class="col-lg-4 col-md-4">
			<div class="icon">ICON</div>
			<h5>HEADING</h5>
			<p><?=$who ?></p>
		</aside>
		<aside class="col-lg-4 col-md-4">
			<div class="icon">ICON</div>
			<h5>HEADING</h5>
			<p><?=$who ?></p>
		</aside>
	</div>-->
</section>
<!-- ===================>>> TESTIMONIALS <<<===================== -->
<section class="container-fluid columned" id="testimons">
	<h3>WHAT OTHER SAYS</h3>
	<div id="testimonials" class="carousel slide centerfy" data-ride="carousel">
		<!-- Carousel indicators -->
		<ol class="carousel-indicators">
			<li data-target="#testimonials" data-slide-to="0" class="active"></li>
			<li data-target="#testimonials" data-slide-to="1"></li>
			<li data-target="#testimonials" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active slide-Item1">
				<div class="centerfy">
					<article class="columned">
						<img src="image/gallery/testinmonial-1.jpg" />
						<p>"For sure!Hierdie plek stann absoluut uit in Zeerust! Elke funkasie uit die Boeke! Annete Smit..jy en Avanti span is die beste!"</p>
						<p class="name">Mariet Coetzer Stander</p>
					</article>
				</div>
			</div>
			<div class="carousel-item slide-Item2">
				<div class="centerfy">
					<article class="columned">
						<img src="image/gallery/testinmonial-2.jpg" />
						<p>"It is difficult planning the wedding being far from the venue, but the service I recieved at Avanti was absolutely awesome. The team takes time to listen to what you want and execute it with excellence. I was blown by what you did on my wedding day."</p>
						<p class="name">Tshegofatso Mtee Njolo</p>
					</article>
				</div>
			</div>
			<div class="carousel-item slide-Item3">
				<div class="centerfy">
					<article class="columned">
						<img src="image/gallery/testinmonial-3.jpg" />
						<p>"We had a serious challenge organising without seeing each other until last moments, the results were amazing. Loved everything about the wedding. They totally understood what I wanted executed! Thanks you very much."</p>
						<p class="name">Thabiso Modiselle</p>
					</article>
				</div>
			</div>
			<!--
			<a class="carousel-control-prev" href="#testimonials" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#testimonials" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
	show-btna>
			-->
		</div>
	</div>
</section>
<!-- ===================>>> TESTIMONIALS <<<===================== -->
<section id="news-update">
	<h3>RECENT EVENTS</h3>
	<div class="row">
		<article class="col-lg-6 col-md-6">
			<img src="image/gallery/johan.jpg" />
			<h4>Johan en Raquel</h4>
			<div class="content">
				<p><?=$who ?></p>
			</div>
			<a data-toggle="modal" data-target="#functional-modal"><button class="show-btn">Show More</button></a>
		</article>
		<article class="col-lg-6 col-md-6">
			<img src="image/gallery/lebogang.jpg" />
			<h4>Lebogang & Refilwe</h4>
			<div class="content">
				<p><?=$who ?></p>
			</div>
			<a data-toggle="modal" data-target="#functional-modal"><button class="show-btn">Show More</button></a>
		</article>
	</div>
</section>





<a href="#to-top"><div class="move-up-icon">
	<img src="image/social/black-up.png" />
</div></a>
<!-- ==================MODALS===================== -->
<?php include_once "dynamics/modals.php" ?>
<!-- ========================================== -->
<?php
	include_once "footer.php";
?>

<?php
	include_once "../dynamics/dynamics.php";
	include_once "../dynamics/modals.php";
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="EI=egde">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php echo $description ?>">
	<meta name="keywords" content="<?php echo $keywords ?>">
	<link rel="shortcut icon" type="images/png" href="favicon.png" />
	<!-- FACEBOOK -->
	<meta name="keywords" content="<?php echo $keywords ?>">
	<meta property="og:url" content="http://maobatechsolutions.com">
	<meta property="og:type" content="website">
	<meta property="og:title" content="<?php echo $title ?>">
	<meta property="og:description" content= "<?php echo $description ?>">

	<!-- DEPENDENCY -->
	<link rel="stylesheet" href="../css/bootstrap.min.css" >
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<title><?php echo $title ?></title>
	<link rel="stylesheet"  href="../css/Style.css" href=”image.css”>
	<link rel="stylesheet"  href="../css/sample.css" href=”image.css”>
	<style>
		#thanks {
			height: 60vh;
			width : 100%;
			display :flex;
			background : url("mtslogo.png") repeat;
		}
		#thanks aside {
			margin :auto;
			display :flex;
			flex-direction : column;
			justify-content :center;
			align-items :center;
			background-color : #c5e6c4;
			min-height : 26vh;
			width : 80%;
		}
		 h1 {
			text-decoration : underline;
			text-decoration-color : #d7b34b;
			font-family : ariel;
		}
		h3 {
			margin-top : 18px;
			text-decoration : underline;
			text-decoration-color :  #d7b34b;
		}
		h3 span {
			text-shadow : none ;
			font-weight : 700;
			width : 20px;
			height : 20px;
			background-color : black;
			color: white;
			text-decoration : none;
		}
		@media(max-width : 543px){
			#thanks aside {
				width : 98%;
				padding : 3% 1%;
				text-align :center;
				padding-bottom : 46px;
			}
		}
		h4 {
			font-style: italic;
			text-align: center;
			font-weight: 700;
			font-size: 38px;
			text-decoration :underline;
			text-shadow: 2px 3px 0px #ffbd00;
		}


		@media(max-width : 440px){
			#thanks aside h3 span {
				transform: translateY(41px);
				display: inline-block;
			}
		}
		@media(max-width : 350px){
			#thanks aside h3 span {
				transform: translateY(41px);
				display: inline;
			}
		}
	</style>
</head>
<body>
<header >
	<a name="to-top"></a>
	<div class="container-fluid" >
			<div class="contacts">
				<div class="contHOld">
					<a href="tel:+27813159025"><p>TELL :<?php echo $busphone ?></p></a>
				</div>
				<div class="socialie-icon">
					<img src="../image/social/facebook.png" alt="facebook-icon" />
					<a href="https://wa.me/+27813159025?text=I'm%20interested%20in%20">
						<img src="../image/social/whatsapp.png" alt="whatsAPP-icon" />
					</a>
					<a href="tel:+27813159025">
						<img src="../image/social/call.png" alt="phone-icon" />
					</a>
				</div>
			</div>
	</div>
<nav class="navbar navbar-expand-lg navbar-light clr1">
  <a class="navbar-brand" href="#"><img src="../image/logo.jpg" height="56px"/>
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
				<a class="nav-link" href="../"><button class="show-btn">HOME</button></a>
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
				<a class="nav-link" href="#"><button>BOOK</button></a>
		  </li>
	</ul>
  </div>
</nav>
</header>
<section id="thanks">
		<aside>
			<h4><?php echo isset($_POST['book']) ? ucFirst($_POST['name']) : ''; ?><h4>
			<h1>THANKS FOR TRYING OUT THIS SAMPLE</h1>
			<h3>REDIRECTING YOU IN <span>7</span></h3>
		</aside>
</section>
<footer>
	<div id="quick-links" class="centerfy">
			<aside class="centerfy">
				<a data-toggle="modal" data-target="#notice-modal"><button class="one">GALLERY</button></a>
				<a data-toggle="modal" data-target="#notice-modal"><button class="two">CONTACT US</button></a>
				<a href="#"><button class="three">BOOK</button></a>
			</aside>
	</div>
	<p>&COPY <span class="year"></span> ALL RIGHT RESERVED / DESINGED by <a href="index.html">MAOBA TECH</a> </p>
</footer>
</main>
<!--- JQUERY =========================== -->
<script src="../js/jquery.js"></script>
<!-- BOOTSTRAP ========================= -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../js/costomuzed.js"></script>
<script>
	const spanH3 = document.querySelector("h3 span");
	let countDonw = parseInt(spanH3.textContent);

	(function(){
		let startCount = setInterval(()=>{
			countDonw--;
			countDonw === 0 ? stopCount() : spanH3.textContent = countDonw;
		},1000);

		function stopCount(){
			clearInterval(startCount);
			setTimeout(()=> window.location.href = "../index.php",1100);
			spanH3.textContent = 0;
		}
	}())
</script>
</body>
</html>

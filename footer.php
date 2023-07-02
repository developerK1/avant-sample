<section id="adress" class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-lg-6    ">
				<form role="form" class="#dd3c15" action="mail/testpage.php"    Method="POST"><!--contact_us.php"-->
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" name="name" class="form-control" id="name" placeholder="Enter Name">
					</div>
					<div class="form-group">
						<label for="name">eMAIL</label>
						<input type="text" name="email" class="form-control" id="email" placeholder="Enter eMail">
					</div>
					<div class="form-group">
						<label for="name">Phone Number</label>
					</div>
					<input type="tel" name="tel" class="form-control" id="email" placeholder="Phone Number">
					<div class="form-group">
						<label for="name">Message</label>
						<textarea type="text" name="message" rows="5" class="form-control" id="message" placeholder="How Can We Help You...?"></textarea>
					</div>
					<button type="submit" class="btn btn-default" name="sendMailBtn" >Submit</button>
				</form>
			</div>
			<div class= "col-lg-6 col-lg-6 adress clr1">
				<div class="locationIconAds" style="margin:15px;">
					<img src="image/social/location-icon.jpg" alt="location-icon" style=" border-radius : 20px"/>
				</div>
				<h3> Adress </h3>
				<a data-toggle="modal" data-target="#functional-modal"><button type="submit" class="btn">DIRECTION</button></a>
				<!--- https://www.google.com/maps/dir//Dinokana+2868/@-25.4432013,25.8640062,14z/data=!4m5!4m4!1m0!1m2!1m1!1s0x1ebcd74e65f1d201:0x5bca1fdebf5ea66a----->
				<p>1km out of Zeerust along N4</p>
				<p>Zeerust</p>
				<p>North West</p>
				<p>2865</p>
				<p>South Africa</p>
			</div>
		</div>
	</div>
</section>
<!------->
<section id="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3599.5278432893615!2d26.067911314097426!3d-25.554099983731376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1ebd197381084395%3A0xad2da8a8ff76ba5b!2sAvanti%20Guesthouse!5e0!3m2!1sen!2sza!4v1680650432689!5m2!1sen!2sza" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
<footer>
	<div id="quick-links" class="centerfy">
			<aside class="centerfy">
				<a href="#to-portfolio"><button class="one">GALLERY</button></a>
				<a href="tel:+27798879375"><button class="two">CONTACT US</button></a>
				<a data-toggle="modal" data-target="#functional-modal"><button class="three">BOOK</button></a>
			</aside>
	</div>
	<p>&COPY <span class="year"></span> ALL RIGHT RESERVED / DESINGED by <a href="index.html">MAOBA TECH</a> </p>
</footer>
</main>
<!--- JQUERY =========================== -->
<script src="js/jquery.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script>
	$(window).on('load', function(){ $(".loader").fadeOut(2000); });
	$(function () {
		new WOW().init();
	});
</script>
<!-- BOOTSTRAP ========================= -->
<Script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/costomuzed.js"></script>
</body>
</html>

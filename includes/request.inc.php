<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="EI=egde">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<title>BOOKING</title>
	<link rel="stylesheet"  href="../css/style.css" href=”image.css”>
	<link rel="stylesheet"  href="../css/sample.css" href=”image.css”>
</head>
<body>
<main><!--- booking.php --->
<section id="reservation">
	<form action="../mail/testpage.php" method="POST" id="book-form">
		<div class="form-fields columned">
			<label for="name">NAME</label>
			<input type="text" name="name" placeholder="Please state your name">
		</div>
		<div class="form-fields columned">
			<label for="name">LAST NAME</label>
			<input type="text" name="lname" placeholder="Please state your last name">
		</div>
		<div class="form-fields columned">
			<label for="name">PHONE</label>
			<input type="tel" name="numbers" placeholder="Please state your name">
		</div>
		<div class="form-fields columned">
			<label for="name">SUBJECT</label>
			<input type="text" name="subject" placeholder="Please state your subject" >
		</div>
		<div class="form-fields columned">
			<label for="name">EMAIL</label>
			<input type="text" name="email" placeholder="Please state your email" >
		</div>
		<div class="note">
			<label for="name">NOTE</label>
			<textarea name="note" ></textarea>
		</div>
		<div class="columned">
			<button type="submit" id="book" name="book">BOOK</button>
		</div>
	</form>

</section>
<?php
$lname = "maoba";
$name = "kekaone";
?>

</main>

</body>
</html>

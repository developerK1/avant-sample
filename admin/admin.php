<?php
	include_once "conection.php";
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="EI=egde">
	<link rel="shortcut icon" type="images/png" href="favicon.png" />
	<link rel="stylesheet"  href="../css/sample.css" href=”image.css”>
	<title>ADMINSTRATION</title>
</head>
<body>
<main>
	<section id="log-in">
		<div class="login">
			<form>
				<div class="control columned">
					<label>USERNAME</label>
					<input type="text" placeholder="username..."/>
				</div>
				<div class="control columned">
					<label>SIGNATURE</label>
					<input type="text" placeholder="signature"/>
				</div>
				<div class="centerfy">
					<button type="submit">Log In</button>
				</div>
			</form>
		</div>
	</section>
</main>
<footer>
<p>&COPY <span class="year"></span> ALL RIGHT RESERVED / DESINGED by <a href="index.html">MAOBA TECH</a> </p>
</footer>
<script>
	document.querySelector(".year").textContent = new Date().getFullYear();
</script>
</body>
</html>

<?php

	$content = "";

	$status = false;
	$template = "";
	$fromEmail = $_POST['email'];
    $name = $_POST['name'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $numbers = $_POST['numbers'];
    $subjectName = $_POST['subject'];
	$message = $_POST['note'];


    $to = 'maobakg@yahoo.com'; //DONT FORGET TO PUST YUOUR EMAIL TO
    $subject = $subjectName;
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: '.$fromEmail.'<'.$fromEmail.'>' . "\r\n".'Reply-To: '.$fromEmail."\r\n" . 'X-Mailer: PHP/' . phpversion();
    $message = '<!doctype html>
				<html lang="en">
				<head>
					<meta charset="UTF-8">
					<meta name="viewport"
						  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
					<meta http-equiv="X-UA-Compatible" content="ie=edge">
					<title>Document</title>
				</head>
				<body>
					<span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">
					'.$message.'
					</span>
					<div class="container">
						<p> FROM: '.$name." ".$lname.'</p>
						<p>'.$numbers.'</p>
						<p>'.$message.'<p/><br/>
						<p>From : '.$fromEmail.'<p/><br/>
					</div>
				</body>
				</html>';
    $result = @mail($to, $subject, $message, $headers);

	$status = true;
?>
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
<main>
	<section id="booking-page">
		<?php
			if(!$status){
				echo '
					<div style="width :350px;height : 28px;margin : 50pz auto">
						<h4>SORRY</h4>
						<p>BOOKING FAILED</p>
						<a href="../index.php">HOME</a>
					</div>
				';
			}else{
				echo '
					<article class="message-modal">
						<div class="wrapper columned">
							<h3>THANKS FOR BOOKING</h3>
							<p>We will sort you out</p>
							<h6>Re DIrection you in <span class="redirect">10</h6>
							<button onclick="hideClose();">CLOSE</button>
						</div>
					</article>
					<aside class="background-remain">
							<h3>We Will Get Bacj To You Shortly</h3>
					</aside>
					<script>
						const stayCont = document.querySelector(".background-remain");
						const nameCont = document.querySelector(".redirect");
						const modal = document.querySelector(".message-modal");
							let num = 10;

							const showModal = e =>{
								modal.style.display = "flex";

								const countDown = setInterval(()=>{
									num--;
									nameCont.textContent = num;

									if(num === 0){
										clearAll();
									}
								}, 1000);

								function clearAll(){
									clearInterval(countDown);
									nameCont.textContent = 0;
									hideClose();
								}
							}

							const hideClose = ()=>{
								modal.style.display = "none";
								stayCont.style.display = "flex";
								window.location.href = "../index.php";
							}

							setTimeout(()=>showModal(), 0);
					</script>
				';
			}
		?>

	</section>
</main>
</body>
</html>

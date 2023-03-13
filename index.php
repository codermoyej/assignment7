

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Popup</title> 
	<link rel="stylesheet" type="text/css" href="style.css">
	<!--<link rel="stylesheet" type="text/css" href="magnific-popup.css">-->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

	<div id="main_popup">

		<div class="form_wraper">
			<?php ?>
			<!-- <div class="popupCloseButton">&times;</div> -->
			<div class="wraper_left">
				<img class="form_img" src="2.jpg" alt="">
			</div>
			<div class="wraper_right">
				<h2 class="form_heading">Login Form</h2>
				<p>Enter your name and email , password, profile picture and click the button</p>
				<form method="post" action="process.php" enctype="multipart/form-data">
					
					<div class="input-block">
					<!-- <label for="name" class="input-label">name</label> -->
						<input type="name" name="name" id="name" placeholder="Full Name">
					</div>
					<div class="input-block">
					<!-- <label for="email" class="input-label">Email</label> -->
						<input type="email" name="email" id="email" placeholder="Email address">
					</div>
					<div class="input-block">
					<!-- <label for="name" class="input-label">Name</label> -->
						<input type="password" name="password" id="password" placeholder="Password">
					</div>
					<div class="input-block">
					<!-- <label for="name" class="input-label">Name</label> -->
					<input type="file" name="profile_image" class="form-control-file">
					</div>
					<div class="modal-buttons">
					<!-- <a href="" class="">Forgot your password?</a> -->
						<button type="submit" value="Submit" class="input-button">Log In</button>
					</div>
				</form>
			</div>
		</div>
	</div>

</body>
</html>
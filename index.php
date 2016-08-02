<?php
	if ($_POST["submit"]) {
		if (!$_POST["name"]) {
			$error = "Please enter your name";
		}
		if (!$_POST["email"]) {
			$error = $error."<br />Please enter your email";
		}
		if (!$_POST["message"]) {
			$error = $error."<br />Please enter a message";
		}
		if ($error) {
			$result = '<div class="alert alert-danger"><strong>Oopsie! Seems like you missed something:</strong><br />'.$error."</div>";
		}
		else {
			mail("alexmezx@gmail.com", "Inquiry", $_POST["message"], "From: ".$_POST["name"]);
			$result = '<div class="alert alert-success">Email sent! We will reach out to you as soon as possible.</div>';
		}
	}
?>
<!doctype html>
<html lang="en">
<head>
	<title>Contact Us</title>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge />">
	<meta http-equiv="content-type" content="text/html" charset="utf-8"/>
	<meta name="viewport" content="width=device-width, intial-scale=1" />
	<meta name="author" content="Christian Meza" />
	<meta name="keywords" content="HTML, CSS, JavaScript, jQuery, jQueryUI, Bootstrap" />
	<meta name="prototype" content="0" />
	<meta name="date" content="" />
	<meta name="description" content="" />
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/main.css" />
	<link rel="stylesheet" href="css/jquery-ui.min.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
</head>
<body>
	<!-- wrapper start -->
		<div class="container">
			<div class="row">
			 	<div class="contact-form form-group col-md-6">
				 	<form method="post">
				 		<h1 class="h1">CONTACT US</h1>
				 		<?php 
				 			echo $result;
				 		?>
				 		<hr />
				 		<label for="name">Name:</label><br />
				 		<input type="text" class="form-control" id="name" placeholder="Your name" name="name" value="<?php echo $_POST['name']?>">
				 		</input>
				 		<br />
				 		<label for="email">Email:</label><br />
				 		<input type="email" class="form-control" id="email" placeholder="Your email" name="email" value="<?php echo $_POST['email']?>">
				 		</input>
				 		<br />
				 		<label for="message">Message:</label><br />
				 		<input type="text" class="form-control" id="message" name="message" placeholder="Add a brief message.." value="<?php echo $_POST['message']?>">
				 		</input>
				 		<div id="buttondiv">
				 			<input type="submit" class="btn btn-default" name="submit" />
				 		</div>
				 	</form>
			 	</div>
			</div>
		</div>
	<!-- wrapper ends -->
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>

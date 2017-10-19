<?php

	if(isset($_POST) && $_POST["submit"] == "Submit"){

		$name = $_POST["name"];
		$email = $_POST["email"];
		$phone = $_POST["phone"];
		$company = $_POST["company"];
		$comment = $_POST["comment"];


		$to = "ian.rj.powell@gmail.com";

		$subject = "Portfolio Inquiry from " . $name;

		$message = "
			Name: $name
			Email: $email
			Phone: $phone
			Company: $company

			Message: $comment 
		";

		mail($to, $subject, $message);

	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact | Ian Powell</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" type="text/css" href="lib/css/reset.css">
  <link rel="stylesheet" type="text/css" href="lib/css/main.css">
  <link href="https://fonts.googleapis.com/css?family=Catamaran" rel="stylesheet">
</head>
<body>
	<?php include('inc/header.php'); ?>

  <main class="main-content">
  	<h1>Contact Me!</h1>
  	<div class="form-container">
	  	<form action="#" method="POST" name="contact" id="comment-form">

		  	<div class="form-block">
			  	<label for="name">Name:*</label>
			  	<input type="text" name="name" placeholder="Ian Powell" id="name">
				</div>

		  	<div class="form-block">
			  	<label for="email">Email:*</label> 
			  	<input type="email" name="email" placeholder="example@example.com" id="email">
		  	</div>

		  	<div class="form-block">
			  	<label for="phone">Phone Number:*</label>
			  	<input type="tel" name="phone" placeholder="555-555-5555" id="phone">
		  	</div>

		  	<div class="form-block">
			  	<label for="company">Company:</label>
			  	<input type="text" name="company" placeholder="Company" id="company">
		  	</div>

		  	<div class="form-block">
			  	<label for="comment">Leave a comment!</label>
			  	<textarea rows="4" cols="50" placeholder="Type your comment here!" name="comment" id="comment"></textarea>
		  	</div>

		  	<input type="submit" name="submit" value="Submit">
	  	</form>
  	</div>
  </main>

  <?php include('inc/footer.php') ?>
  <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  <script src="lib/scripts/scripts.js"></script>
</body>
</html>
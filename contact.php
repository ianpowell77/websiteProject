<!DOCTYPE html>
<html>
<head>
	<title>Contact | Ian Powell</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" type="text/css" href="lib/css/reset.css">
  <link rel="stylesheet" type="text/css" href="lib/css/main.css">
  <link href="https://fonts.googleapis.com/css?family=Catamaran" rel="stylesheet">
  <script src="lib/scripts/scripts.js"></script>
</head>
<body>
	<?php include('inc/header.php'); ?>

  <main class="main-content">
  	<h1>Contact Me!</h1>
  	<form action="#" method="GET" name="contact"  onSubmit="formValidation()">

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
		  	<textarea rows="4" cols="50" placeholder="Type your comment here!" id="comment"></textarea>
	  	</div>

	  	<input type="submit" name="submit" value="Submit">
  	</form>
  </main>

  <?php include('inc/footer.php') ?>
</body>
</html>
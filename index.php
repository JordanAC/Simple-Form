<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Simple Signup Form</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/login.css">
</head>
<body>
	<div class="container">
	<h1 class="page-head"> Welcome To Signup.com </h1>
	<?php include("form-checker.php");?>
	<form class="signup-form" method="post">
		<h1 class="form-head">Please Sign Up</h1>
		 <input class="form-input" type="text"  name="first-name" value="<?php echo $valid_name; ?>" placeholder="First Name">
		 <?php echo $name_error;?><br>
		 <input class="form-input" type="email" name="email" value="<?php echo $valid_email; ?>" placeholder="Email Address">
		 <?php echo $email_error;?><br>
		 <input class="form-input" type="submit" name="submit" value="SIGN UP">
	</form>
	</div>
</body>
</html>

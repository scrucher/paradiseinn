<?php
require_once"srcd/log.php";
?>

<!DOCTYPE html>
<html>
<head>
     <meta charset="UTF-8">
     <title>Registration Form</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
     <link href="assets/css/main.css" rel="stylesheet">


</head>
<body>
<div class="login-wrap" style="padding-top: 50px;">
<form method="POST">
	<div class="login-html">
		<label for="tab-1" class="tab">Sign In</label>
		<?php echo display_error(); ?>
		<div class="login-form">
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">Username or Email</label>
					<input id="user" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign In" name="login">
				</div>
				<div class="hr"></div>
			</div>
			
		</div>
	</div>
</form>
</div>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>
</html>
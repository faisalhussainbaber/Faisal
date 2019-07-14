
<link rel="stylesheet" type="text/css" href="style.css">

<?php 

if (isset($_POST['submit'])) {

	$user = $_POST['username'];
	$pass = $_POST['password'];
	$pass_length = strlen($pass);
	$email = $_POST['email'];
	# code...

	if(empty($user)){

		$msg = "please enter ur username";
	}

	else if (empty($pass)) {
		$msg = "please enter your password";

		# code...
	}
	else if ($pass_length<=6) {
		$msg = "password should be more than 6 characters long";
		# code...
	}
	elseif (empty($email)) {

$msg = "please enter your email";		# code...
	}
	else if(!filter_var ($email, FILTER_VALIDATE_EMAIL)){
$msg = "please enter VALID EMAIL";
	}
	

else{

	echo"successful sumited";
}
}

 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>

<div id="frm">
<form action="" method="post">

username
<input type="text" name="username" /><br><br>

password
<input type="text" name="password" /><br><br>

email
<input type="text" name="email"><br><br>

<input type="submit" name="submit" value="signup" /><br><br>
<p style="color: red;">

	<?php 
if(isset($msg)){

	echo $msg;
}

	 ?>

	</p>

</form>
</div>
</body>
</html>
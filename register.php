<?php
include_once('controller/registercontroller.php');
if (isset($_POST['reg'])) {
	$email=$_POST['email'];
	$password=$_POST['psw'];
	$logincontroller=new RegisterController();
	$logincontroller->create($email,$password);//insert data to phpmyadmin
	//header('location:success.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<form method="POST">
	<label>Email:</label>
	<input type="text" name="email">
	<label>Password:</label>
	<input type="password" name="psw"> 
	<button type="submit" name="reg" value="register"></button>
</form>
</body>
</html>
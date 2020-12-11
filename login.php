<?php
session_start();
if (isset($_POST['login'])) {
	include_once('controller/registercontroller.php');
	$email=$_POST['email'];
	$password=$_POST['psw'];
	$logincontroller=new RegisterController();
	$results=$logincontroller->get();//get data from phpmyadmin h@gmail.com hsu
	//header('location:success.php');
	foreach ($results as $result) {//$result['email']h@gmail.com $result['password'] hsu
		if($email==$result['email'] && $password==$result['password'] ){
			$cresults=$logincontroller->getReg($email);
			foreach ($cresults as $cresult) {
				$_SESSION['name']=$cresult['email'];
			}
			
			header('location:success.php');
		}
	}

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
	<button type="submit" name="login" value="login"></button>
</form>
</body>
</html>
<?php

	if(isset($_GET['action']) && $_GET['action'] == 'logout')
	{
		session_start();
		session_destroy();
		header('Location: index.php');
	}
	
	if(isset($_POST['submit']))
	{
		$login = 'pedro';
		$password = 'pass';
		
		if($_POST['login'] == $login && $_POST['password'] == $password)
		{
			session_start();
			$_SESSION['connected'] = true;
			header('Location: admin/index.php');
		}
	}
?>

<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta name="description" content="Ouby">
		<meta name="author" content="Roh Sylvain, Pedro Ferreira">

		<title>Login</title>
	</head>
	<body style="max-width:300px; margin : 0 auto; font-family : Arial;">
		<div align="center">
			<form action="login.php" method="POST">
				<br />
				<p>Login - Sandwicherie</p>
				<p><input type="text" name="login" /></p>
				<p><input type="password" name="password" /></p>
				<p><input type="submit" name="submit" /></p>
				<p style="font-size : 10px;">Audrey - Flavien - Rafael - Pedro</p>
			</form>
		</div>
	</body>
</html>
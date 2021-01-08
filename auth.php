<?php
	$email = filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);

	$pass = md5($pass."dkfgodkgodkgod");

	$conn = mysqli_connect('localhost', 'root', '', 'reg-bd');
	
	$result = mysqli_query($conn, "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$pass'");

	$user = mysqli_fetch_assoc($result);
	if(count($user) == 0) {
		echo "Такой пользователь не найден";
		exit();
	} else {
		echo "Вы успешно вошли!!!";
	}

	setcookie('user', $user['name'], time() + 3600, "/");

	mysqli_close($conn);
	header("Refresh: 3; url=index.php");
?>
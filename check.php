<?php
	$name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
	$surname = filter_var(trim($_POST['surname']),FILTER_SANITIZE_STRING);
	$email = filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);

	if (mb_strlen($name) < 2 || mb_strlen($name) > 90) {
		echo "Недопустимая длина имени";
		exit();
	} else if (mb_strlen($surname) < 3 || mb_strlen($surname) > 50) {
		echo "Недопустимая длина фамилии";
		exit();
	} else if (mb_strlen($pass) < 6 || mb_strlen($pass) > 60) {
		echo "Недопустимая длина пароля(должна быть от 6 до 50)";
		exit();
	}

	$pass = md5($pass."dkfgodkgodkgod");

	$conn = mysqli_connect('localhost', 'root', '', 'reg-bd');
	if (!$conn) {
    	die("Connection failed: " . mysqli_connect_error());
	}


	$mysql = "INSERT INTO users (name, surname, email, password) VALUES('$name', '$surname', '$email', '$pass')";

	if (mysqli_query($conn, $mysql)) {
      echo "Новая запись создана успешно";
	} else {
      echo " Error: " . $mysql . "<br>" . mysqli_error($conn);
	}
	mysqli_close($conn);
	header("Refresh: 3; url=index.php");
?>
<?php
	$name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
	$email = filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);
	$theme = filter_var(trim($_POST['theme']),FILTER_SANITIZE_STRING);
	$item = filter_var(trim($_POST['item']),FILTER_SANITIZE_STRING);

	$conn = mysqli_connect('localhost', 'root', '', 'orders');
	if (!$conn) {
    	die("Connection failed: " . mysqli_connect_error());
	}


	$mysql = "INSERT INTO items (name, email, theme, item) VALUES('$name', '$email', '$theme', '$item')";

	if (mysqli_query($conn, $mysql)) {
      echo "Мы ответим Вам в течении нескольких дней";
	} else {
      echo " Error: " . $mysql . "<br>" . mysqli_error($conn);
	}
	mysqli_close($conn);
	header("Refresh: 3; url=index.php");
?>
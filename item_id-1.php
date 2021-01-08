<?php
	$name = 'Nike HYPERVENOM Phantom FDG';
	$quantity = filter_var(trim($_POST['quantity']),FILTER_SANITIZE_STRING);
	$size = filter_var(trim($_POST['size']),FILTER_SANITIZE_STRING);
	$telephone = filter_var(trim($_POST['telephone']),FILTER_SANITIZE_STRING);

	

	$conn = mysqli_connect('localhost', 'root', '', 'orders-bd');
	if (!$conn) {
    	die("Connection failed: " . mysqli_connect_error());
	}

	$mysql = "INSERT INTO items (name, quantity, size, telephone) VALUES('$name', '$quantity', '$size', '$telephone')";

	if (mysqli_query($conn, $mysql)) {
      echo "Новая запись создана успешно";
      echo "Вы будете перенаправлены на главную страницу через 3 секунды";
	} else {
      echo " Error: " . $mysql . "<br>" . mysqli_error($conn);
	}
	mysqli_close($conn);
	header("Refresh: 3; url=index.php");
?>
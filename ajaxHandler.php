<?php
	if($_POST['id'] && $_POST['sob'] == 'hide') {
		$id = $_POST['id'];
		$link = mysqli_connect(localhost, mysql, mysql, testzad)
			or die("Ошибка " . mysqli_error($link)); 

		$query = "UPDATE products SET HIDDEN_STATUS = 1 WHERE ID = " . $id;

		mysqli_query($link, $query);
	}
	if($_POST['id'] && $_POST['sob'] == 'plus') {
		$id = $_POST['id'];
		$link = mysqli_connect(localhost, mysql, mysql, testzad)
			or die("Ошибка " . mysqli_error($link)); 

		$query = "UPDATE products SET PRODUCT_QUANTITY = PRODUCT_QUANTITY + 1 WHERE ID = " . $id;

		mysqli_query($link, $query);
	}
	if($_POST['id'] && $_POST['sob'] == 'minus') {
		$id = $_POST['id'];
		$link = mysqli_connect(localhost, mysql, mysql, testzad)
			or die("Ошибка " . mysqli_error($link)); 

		$query = "UPDATE products SET PRODUCT_QUANTITY = PRODUCT_QUANTITY - 1 WHERE ID = " . $id;

		mysqli_query($link, $query);
	}
?>
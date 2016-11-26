<?
	$dbc = mysqli_connect(DB_HOST,"phpLearn", "art/kot.65", "phpLearn");
	if (!$dbc) {
		// код вывода страницы ошибки
		die();
	}

	$query = "INSERT INTO `goods`(`name`, `price`, `description`) 
			  VALUES             ('testLenovo',2500.35,'dfgdfgfdfdgdfgdfg')";

	$res = mysqli_query($dbc, $query);
	if (!$res) {
		var_dump($query);
	}
	// var_dump($res);
	mysqli_close($dbc);
?>
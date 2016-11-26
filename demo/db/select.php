<?
	$dbc = mysqli_connect("localhost","phpLearn", "art/kot.65", "phpLearn");
	if (!$dbc) {
		// код вывода страницы ошибки
		die();
	}

	$id = $_GET["id"];

	
	$query = "INSERT INTO `goods`(`name`, `price`, `description`, `public`) 
					VALUES       ('lenovo',2554,'sdfdsfdfdsf',1)";
	
	$res = mysqli_query($dbc, $query);
	

	if (!$res) {
		var_dump($query);
		die();
	}
	var_dump(mysqli_insert_id($dbc));
	// $res = mysqli_fetch_array($res, MYSQLI_ASSOC);
	
	// if ($res == NULL) {
	// 	// 404
	// }

	$arr = [];
	while($row = mysqli_fetch_array($res, MYSQLI_ASSOC)){
		$arr[] = $row;
	}
	
	echo "<pre>";
	print_r($arr);

	

	mysqli_close($dbc);

?>


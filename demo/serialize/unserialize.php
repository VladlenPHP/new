<?

	$arr = $_COOKIE["serializedArr"];

	$arr = unserialize($arr);

	var_dump($arr);
?>
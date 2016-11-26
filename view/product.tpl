<?
	$id = (int)$_GET["id"];

	$good = $goods[$id];

	if ($good) {
		var_dump($good);
	}else{
		include "view/404.tpl";
	}
?>
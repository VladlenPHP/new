<?
	setcookie("userName", "vasya", 0, "/");
	setcookie("userName", "petya");
	var_dump($_COOKIE["userName"]);
?>
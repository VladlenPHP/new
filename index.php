<?
	session_start();
	include "db/goods.base";
	echo $_SESSION["REFERRER"]."<br>";
	echo $_SERVER['REQUEST_URI'];
	$route = $_GET["route"];

	if ($_SESSION["REFERRER"] != $_SERVER['REQUEST_URI']) {
		$_SESSION["REFERRER"] = $_SERVER['REQUEST_URI'];
	}
	
	switch ($route) {
		case NULL:
			break;
		case 'about':
			break;
		case 'contacts':
			break;
		case 'product':
			break;
		case 'catalog':
			break;
		default:
			header("HTTP/1.1 404 Not Found");
			break;
		}
	include "view/template.tpl";

?>
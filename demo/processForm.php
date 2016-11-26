<?
	
	// $userName = $_GET["userNameForm"];
	
	$userName = trim(htmlspecialchars(strip_tags($_GET["userNameForm"])));

	setcookie("userName", $userName);

	header("Location: form.php");
	die();	
?>

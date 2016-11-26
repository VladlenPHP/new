<?
	$_SESSION["REFERRER"] = $_SERVER["REQUEST_URI"];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Титул страницы</title>
	<link rel="stylesheet" type="text/css" href="">
	<script type="text/javascript"></script>
</head>
<body>
	<header>
		<ul class="menu">
			<li><a href="/">Главная</a></li>
			<li><a href="/?route=about">О нас</a></li>
			<li><a href="/?route=contacts">Контакты</a></li>
			<li><a href="/?route=catalog">Каталог</a></li>
		</ul>
	</header>

	<?
		include "route.php";
	?>

</body>
</html>
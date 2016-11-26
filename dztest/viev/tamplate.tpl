<!DOCTYPE html>
<html>
<head>
	<title>Титульная страница</title>
</head>
<body>
	<header>
			<? if ($_COOKIE["username"] && $_COOKIE["Surname"]){
				echo "Hello ". $_COOKIE["username"]." ". $_COOKIE["Surname"];
				}else{
			?>
			<form action="process.php">
				<input type="text" name="usernameform"></br>
				<input type="text" name="Surnameform"></br>
				<input type="submit">
			</form>
			<?}?>
		<ul>
			<li><a href="/">Главная</a></li>
			<li><a href="/?route=about">О нас</a></li>
			<li><a href="/?route=contacts">Контакты</a></li>
			<li><a href="/?route=catalog">Каталог</a></li>
		</ul>

		<? include "route.php" ?>
			
	</header>
</body>
</html>
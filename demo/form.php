<?
	if ($_COOKIE["userName"]) {
		echo "Hello ". $_COOKIE["userName"];
	}else{
?>
<form action="processForm.php">
	<input type="text" maxlength="5" name="userNameForm" /><br />
	<input type="text" name="userSecondNameForm" /><br />
	<input type="submit">
</form>
<?
	}
?>

<!-- ?userNameForm=vasya -->
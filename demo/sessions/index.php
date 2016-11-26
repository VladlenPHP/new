<?
	// echo "string";
	// session_start();
	// $_SESSION["auth"] = true;
	
	$hash = md5("12345");

	for ($i=0; $i < 7; $i++) { 
		$hash = md5("salt".$i.$hash.$i*7%2);
	}
	echo $hash;
	// $hash = password_hash("12345", PASSWORD_DEFAULT);
	// var_dump(password_verify("1234", $hash));
?>

<!-- 
	password_hash
	password_verify
 -->
<?
	file_put_contents("text.txt", "Hello World2\n",  FILE_APPEND);
	echo file_get_contents("text.txt");
?>
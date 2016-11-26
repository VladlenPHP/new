<?
	session_start();

	echo session_name();

	session_destroy();
?>

<!-- 
session_unset — Удалить все переменные сессии
session_id() - Получить.удалить id сессии
 -->
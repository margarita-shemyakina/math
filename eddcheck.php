<?php
	$tema = filter_var(trim($_POST['tema']), FILTER_SANITIZE_STRING);
	$text = filter_var(trim($_POST['text']), FILTER_SANITIZE_STRING);
$mysql = new mysqli('127.0.0.1','root','','try');
$result = $mysql->query("INSERT INTO `tema` (`tema`, `text`) VALUES ('$tema', '$text')");

$mysql->close();

header('Location: /admin.php');
?>

<?php
	$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
	$secname = filter_var(trim($_POST['secname']), FILTER_SANITIZE_STRING);
	$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
	$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
	if(mb_strlen($login)<3 || mb_strlen($login)>25){
		echo"Недопустимая длина введенных данных";
		exit();
  } else if (mb_strlen($name)<1 || mb_strlen($name)>50){
		echo"Недопустимая длина введенных данных";
		exit();
	} else if (mb_strlen($secname)<1 || mb_strlen($secname)>50){
		echo"Недопустимая длина введенных данных";
		exit();
	} else if (mb_strlen($password)<5 || mb_strlen($password)>20){
		echo"Недопустимая длина пароля(от 8 до 20 символов)";
		exit();
	}
$password =md5($password."jfleu");
$mysql = new mysqli('127.0.0.1','root','','try');
$mysql->query("INSERT INTO `vhod` (`name`, `secondname`, `login`, `password`) VALUES('$name', '$secname', '$login', '$password')");
$result = $mysql->query("SELECT * FROM `vhod` WHERE `login` = '$login' AND `password` = '$password'");
$user = $result->fetch_assoc();
if(count($user) == 0){
		echo "Пользователь не найден";
		exit();
}
setcookie('user', $user['name'], time() + 3600 * 24, "/");

$mysql->close();

header('Location: /tema.php');
?>

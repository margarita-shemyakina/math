<?php
	$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
  $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

  $password =md5($password."jfleu");

  $mysql = new mysqli('127.0.0.1','root','','try');
  $result = $mysql->query("SELECT * FROM `admin` WHERE `login` = '$login' AND `password` = '$password'");
  $user = $result->fetch_assoc();
  if(count($user) == 0){
      echo "Неверный логин или пароль";
      exit();
  }
  setcookie('user', $user['name'], time() + 3600 * 24, "/");

  $mysql->close();

  header('Location: /admin.php');
?>

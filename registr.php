<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-eguiv="X-UA-Compatible" content="ie=edge">
	<title>Курсы по математике</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1 class="custom-colored-h1"	>Курсы по математике</h1>
		<form action="checkreg.php" method="post">
			<input type="text" class="form-control" name="name" id="name" placeholder="Имя" class="form-control"><br><br>
			<input type="text" class="form-control" name="secname" id="secname" placeholder="Фамилия" class="form-control"><br><br>
			<input type="text" class="form-control" name="login" id="login" placeholder="Логин" class="form-control"><br><br>
			<input type="password" class="form-control" name="password" id="password" placeholder="Пароль" class="form-control"><br><br>
			<button type="submit" name="sendTask" class="btn1">Зарегистрироваться</button>
		</form>
	</div>
	</body>
</html>

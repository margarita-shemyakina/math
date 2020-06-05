<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-eguiv="X-UA-Compatible" content="ie=edge">
		<title>Курсы по математике</title>
		<style type="text/css">
	   body { margin: 0; }
	   #sidebar, #content { position: absolute; }
	   #sidebar, #content { overflow: auto; padding: 10px; }
	   #header {
	    height: 80px; /* Высота слоя */
	    background: #a6e0c0; border-bottom: 2px solid #7B5427;
	   }
	   #header h1 { padding: 20px; margin: 0; }
	   #sidebar {
	    width: 150px; background: #ECF5E4; border-right: 1px solid #231F20;
	    top: 82px; /* Расстояние от верхнего края */
	    bottom: 0; /* Расстояние снизу  */
	   }
	   #content {
	    top: 82px; /* Расстояние от верхнего края */
	    left: 170px; /* Расстояние от левого края */
	    bottom: 0; right: 0;
	   }
	  </style>

		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	</head>
	<body>

		<div class="container">
					<form action="checkvhod.php" method="post">
				<input type="text" class="form-control" name="login" id="login" placeholder="Логин"><br><br>
				<input type="password" class="form-control" name="password" id="password" placeholder="Пароль"><br><br>
				<button type="submit" name="sendTask" class="btn1">Войти</button>
			</form>
		</div>
			  </div>
	</body>
</html>

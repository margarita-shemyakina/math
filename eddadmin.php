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
				<form action="eddcheck.php" method="post">
				      <input type="text" class="form-control" name="tema" id="tema" placeholder="Тема"><br>
              <textarea name="text" id="text" placeholder="Содержание" required maxlength="100000" style="height: 30em; width: 30em;"></textarea>
              <br><br>
				      <button type="submit" name="sendTask" class="btn1">Добавить</button>
			  </form>
		</div>
	</body>
</html>

<!DOCTYPE html>
<html lang="ru">
	<head>
		<style>
			#button1
			{
				background-color: #b2c7da;
				border: 2px solid #b2c7da;
				border-radius: 5px;
				margin:auto;
				position:absolute;
				left:50%;
			}
			#button2
			{
				background-color: #b2c7da;
				border: 2px solid #b2c7da;
				border-radius: 5px;
				margin:auto;
				position:absolute;
			}
			#header {
	     height: 80px; /* Высота слоя */
	     background: #07080a; border-bottom: 2px solid #7B5427;
	    }
	    #header h1 { padding: 20px; margin: 0; }
			#div{padding-left: 15%; padding-right: 15%; margin: 0;}
		</style>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-eguiv="X-UA-Compatible" content="ie=edge">
		<title>Курсы по математике</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	</head>
	<body>
		<div id="header">
			<table width="100%">
 				<tr>
					<td><font size="5" color="white" face="Times New Roman">Курсы по математике</font></td>
   				<td align="right"><a href = "adminvhod.php">Войти как администратор</a></td>
 				</tr>
			</table>
		</div>

	<div id="div"><font color="white"></br></br></br>Обучение математике закладывает основы для формирования приемов умственной деятельности: школьники учатся проводить анализ, сравнение, классификацию объектов, устанавливать причинно-следственные связи, закономерности, выстраивать логические цепочки рассуждений. Изучая математику, они усваивают определенные обобщенные знания и способы действий. Универсальные математические способы познания способствуют целостному восприятию мира, позволяют выстраивать модели его отдельных процессов и явлений, а также являются основой формирования универсальных учебных действий. Универсальные учебные действия обеспечивают усвоение предметных знаний и интеллектуальное развитие учащихся, формируют способность к самостоятельному поиску и усвоению новой информации, новых знаний и способов действий, что составляет основу умения учиться. Цель веб-приложения – формировать систему первоначальных математических знаний, воспитывать у обучающихся интерес к математике, умственной деятельности.
	</font></div>
	<div class="container" id="div1">
		<div class="row">
			<div class="col">
				<?php
				echo '<button id="button1" onclick="window.location=\'vhod.php\'" class="button-on-form">Вход</button>'; ?>
			</div>
		<div class="col">
			<?php
				echo '<button id="button2" onclick="window.location=\'registr.php\'" class="button-on-form">Регистрация</button>';
			?>
		</div>
		</div>
	</div>
	</body>
</html>

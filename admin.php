<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-eguiv="X-UA-Compatible" content="ie=edge">
   <title>Курсы по математике</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
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
 </head>
 <body>
	 <div id="header">
     <table width="100%">
       <tr>
         <td><font size="7" face="Times New Roman">Курсы по математике</font></td>
         <td align="right"><p>Администратор. <a href="/exit.php">ВЫХОД</a></p></td>
       </tr>
     </table>
   </div>
   <p><a href="users.php">Просмотр пользователей</a></p>
		 <?php
		   $host = '127.0.0.1';  // Хост, у нас все локально
		   $user = 'root';    // Имя созданного вами пользователя
		   $pass = ''; // Установленный вами пароль пользователю
		   $db_name = 'try';   // Имя базы данных
		   $link = mysqli_connect($host, $user, $pass, $db_name); // Соединяемся с базой
		   if (isset($_GET['del_id'])) { //проверяем, есть ли переменная
		     //удаляем строку из таблицы
		     $sql = mysqli_query($link, "DELETE FROM `tema` WHERE `id` = {$_GET['del_id']}");
		     if ($sql) {
		     } else {
		       echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
		     }
		   }
		 ?>
		 <table border='1'>
		   <?php
		     $sql = mysqli_query($link, 'SELECT `id`, `tema`, `text` FROM `tema`');
		     while ($result = mysqli_fetch_array($sql)) {
		       echo '<tr>' .
		            "<td>{$result['tema']}</td>" .
		            "<td>{$result['text']}</td>" .
		            "<td><a href='?del_id={$result['id']}'>Удалить</a></td>" .
		            '</tr>';
		     }
		   ?>
		 </table>
		 <p><a href="eddadmin.php">Добавить новую запись</a></p>
  </div>
 </body>
</html>

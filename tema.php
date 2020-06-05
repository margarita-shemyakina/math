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
         <td align="right"><p>Привет <?=$_COOKIE['user']?>. <a href="/exit.php">ВЫХОД</a></p></td>
       </tr>
     </table></div>
   <div id="sidebar">
     Доступные темы</br></br>
       <?php
         $link = mysqli_connect('127.0.0.1', 'root', '', 'try');
         $sql = mysqli_query ($link, 'SELECT `tema` FROM `tema`');
         while($result = mysqli_fetch_array($sql)){
         echo"{$result['tema']}<br><br>";
         }
       ?>
   </div>
   <div id="content">
     <?php
       $link = mysqli_connect('127.0.0.1', 'root', '', 'try');
       $sql = mysqli_query ($link, 'SELECT `tema`, `text` FROM `tema`');
       while($result = mysqli_fetch_array($sql)){
         echo"<b>{$result['tema']}<br></b>";
         echo"{$result['text']}<br><br><hr>";
       }
     ?>
  </div>
 </body>
</html>

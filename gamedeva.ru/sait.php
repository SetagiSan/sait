<!DOCTYPE html>
<html>
     <style>
      #main {
        display: none;
        position: relative;
	z-index:99999999999;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
      }
      #okno {
        width: 300px;
        height: 50px;
        text-align: center;
        padding: 15px;
        border: 3px solid #0000cc;
        border-radius: 10px;
        color: #0000cc;
        position: relative;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        margin: auto;
      }
      #main:target {display: block;}
    </style>
 <head>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="https://www.gamedeva.ru/GD.png" type="image/x-icon">
  <title>Календарь записи</title>
  </head>
<body>
        <a href="#" id="main">
      <div id="okno">
        Вы записаны!
      </div>
<h1>
	<a href="http://www.gamedeva.ru/sait2.php">Переход</a>
<table border="2">
<form action="script.php" method="post">
  	<a href="http://www.gamedeva.ru/logout.php">Выход</a>
</form>
   <caption>Расписание</caption>
   <tr>
    <th>Пары</th>
    <th>1-я</th>
    <th>2-я</th>
    <th>3-я</th>
    <th>4-я</th>
    <th>5-я</th>
    <th>6-я</th>
    <th>7-я</th>
   </tr>
   <tr> <td>Время</td>    <td>08:00-09:35</td>   <td>09:50-11:25</td>  <td>11:55-13:30</td> <td>13:45-15:20</td>    <td>15:50-17:25</td>   <td>17:40-19:15</td>  <td>19:30-21:05</td></tr>
   <tr> <td>Пнд</td>
    <td><a href="http://www.gamedeva.ru/script.php">Запись</a></td></td>  <td> <a href="#main">Записаться</a></td>  <td> <a href="#main">Записаться</a></td> <td> <a href="#main">Записаться</a></td>    <td> <a href="#main">Записаться</a></td>   <td> <a href="#main">Записаться</a></td>  <td> <a href="#main">Записаться</a></td></tr>
   <tr> <td>Втр</td>    <td> <a href="#main">Записаться</a></td>   <td> <a href="#main">Записаться</a></td>  <td> <a href="#main">Записаться</a></td> <td> <a href="#main">Записаться</a></td>    <td> <a href="#main">Записаться</a></td>   <td> <a href="#main">Записаться</a></td>  <td> <a href="#main">Записаться</a></td></tr>
   <tr> <td>Срд</td>    <td> <a href="#main">Записаться</a></td>   <td> <a href="#main">Записаться</a></td>  <td> <a href="#main">Записаться</a></td> <td> <a href="#main">Записаться</a></td>    <td> <a href="#main">Записаться</a></td>   <td> <a href="#main">Записаться</a></td>  <td> <a href="#main">Записаться</a></td></tr>
   <tr> <td>Чтв</td>    <td> <a href="#main">Записаться</a></td>   <td> <a href="#main">Записаться</a></td>  <td> <a href="#main">Записаться</a></td> <td> <a href="#main">Записаться</a></td>    <td> <a href="#main">Записаться</a></td>   <td> <a href="#main">Записаться</a></td>  <td> <a href="#main">Записаться</a></td></tr>
   <tr> <td>Птн</td>    <td> <a href="#main">Записаться</a></td>   <td> <a href="#main">Записаться</a></td>  <td> <a href="#main">Записаться</a></td> <td> <a href="#main">Записаться</a></td>    <td> <a href="#main">Записаться</a></td>   <td> <a href="#main">Записаться</a></td>  <td> <a href="#main">Записаться</a></td></tr>
  </table>
</body>
</html>
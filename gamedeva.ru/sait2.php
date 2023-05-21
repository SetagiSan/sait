<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>GDstudio</title>
<link rel="shortcut icon" href="https://www.gamedeva.ru/GD.png" type="image/x-icon">
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
  </head>
 
  <body>
    <a href="#" id="main">
      <div id="okno">
        Вы записаны!
      </div>
    </a>
 <h1>   13:30 
  <a href="#main">Записаться</a>
<h1>	15:50
  <a href="#main">Записаться</a>
<h1>	17:20
  <a href="#main">Записаться</a>
<h1>
	<a href="http://www.gamedeva.ru/">Переход</a>
 
  </body>
 <body> 

     
  <h1>
препод: Кучеров Сергей Александрович<br>
 занятие: СУБД и базы данных<br>
Дата: 
<div id="current_date_time_block"></div>

<script type="text/javascript">
    
    /* функция добавления ведущих нулей */
    /* (если число меньше десяти, перед числом добавляем ноль) */
    function zero_first_format(value)
    {
        if (value < 10)
        {
            value='0'+value;
        }
        return value;
    }

    /* функция получения текущей даты и времени */
    function date_time()
    {
        var current_datetime = new Date();
        var day = zero_first_format(current_datetime.getDate());
        var month = zero_first_format(current_datetime.getMonth()+1);
        var year = current_datetime.getFullYear();
        var hours = zero_first_format(current_datetime.getHours());
        var minutes = zero_first_format(current_datetime.getMinutes());
        var seconds = zero_first_format(current_datetime.getSeconds());

        return day+"."+month+"."+year+" "+hours+":"+minutes+":"+seconds;
    }
</script>
<div id="current_date_time_block2"></div>

<script type="text/javascript">
    
    /* каждую секунду получаем текущую дату и время */
    /* и вставляем значение в блок с id "current_date_time_block2" */
    setInterval(function () {
        document.getElementById('current_date_time_block2').innerHTML = date_time();
    }, 1000);
</script>

  </form>
 </body>
</html>
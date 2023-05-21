<?php
$dbhost = "localhost"; // Имя хоста БД
$dbusername = "setagi"; // Пользователь БД
$dbpass = "WQvcAc0N2w3Q"; // Пароль к базе
$dbname = "database"; // Имя базы
$charset = "utf8";
$date = date("Y-m-d H:i:s");

$dbconnect = mysqli_connect ($dbhost, $dbusername, $dbpass, $dbname);
$dbconnect->set_charset("utf8");
$query = "SELECT COUNT(*) FROM Zapisi";
$result = mysqli_query($dbconnect, $query);
$ch = mysqli_fetch_array($result);

if ($ch[0] > 20) {
$query = "SELECT * FROM `Zapisi` ORDER BY `Rating` ASC, `DateN` DESC"; 
$result = mysqli_query($dbconnect, $query);
$raz = $ch[0] - 20;
for($i=0;$i < $raz;$i++){
   $Buf = mysqli_fetch_array($result);
   $name[i]= $Buf["Student"];
   echo $name[i];
$query = "SELECT RatingS FROM `Students` WHERE FIO =\"". $name[i]."\"";
$result = mysqli_query($dbconnect, $query);
$Rate = mysqli_fetch_array($result);
$query = "UPDATE `Students` SET RatingS = ". ($Rate[0] + 5) ." WHERE FIO = \"". $name[i] . "\"";
$result = mysqli_query($dbconnect, $query);
}
}
mysqli_close($dbconnect);
?>
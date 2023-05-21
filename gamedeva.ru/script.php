<?php
    session_start();
$FIO =$_SESSION['user']['full_name'];
$dbhost = "localhost"; // Имя хоста БД
$dbusername = "guest"; // Пользователь БД
$dbpass = "p@ssw0rd"; // Пароль к базе
$dbname = "database"; // Имя базы
$charset = "utf8";
$date = date("Y-m-d H:i:s");

$dbconnect = mysqli_connect ($dbhost, $dbusername, $dbpass, $dbname);
$dbconnect->set_charset("utf8");
$query = "SELECT COUNT(*) FROM Zapisi";
$result = mysqli_query($dbconnect, $query);
$ch = mysqli_fetch_array($result);

if ($ch[0]<=25) {
//else {echo ("Всё норм\n"); }//проверка на подключение
$query = "INSERT INTO `Zapisi` (`ID`, `Student`, `Coach`, `Gym`, `DateZ`, `DateN`) VALUES (NULL, '".$FIO."', 'Coach', 'Nomer1', '2023-04-27 08:0:0', '" . $date ."');"; 
$result = mysqli_query($dbconnect, $query);
if ($result == false)
{
	print(mysqli_connect_error());
	/* print("Произошла ошибка при выполнении запроса"); */
}
}
//else {echo ("Всё норм\n"); }//проверка на подключение
mysqli_close($dbconnect);
header('Location: /')
?>
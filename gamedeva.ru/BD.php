php<?
$dbhost = "localhost"; // Имя хоста БД
$dbusername = "u1945125_setagi"; // Пользователь БД
$dbpass = "EcR235UovM2Cnmw6"; // Пароль к базе
$dbname = "u1945125_bd"; // Имя базы
$charset = "utf8";

$dbconnect = mysqli_connect ($dbhost, $dbusername, $dbpass, $dbname);
$dbconnect->set_charset("utf8");
if (!$dbconnect) { echo ("Не могу подключиться к серверу базы данных!"); }
else {echo ("Всё норм\n"); }//проверка на подключение
$query = "SELECT * FROM Students"; 
$result = mysqli_query($dbconnect, $query);
if ($result == false)
{
	print(mysqli_connect_error());
	/* print("Произошла ошибка при выполнении запроса"); */
}
mysqli_close($dbconnect);
?>
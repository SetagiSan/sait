<?php

    session_start();
$dbhost = "localhost"; // Имя хоста БД
$dbusername = "setagi"; // Пользователь БД
$dbpass = "WQvcAc0N2w3Q"; // Пароль к базе
$dbname = "database"; // Имя базы
$charset = "utf8";

$dbconnect = mysqli_connect ($dbhost, $dbusername, $dbpass, $dbname);
$dbconnect->set_charset("utf8");

    $full_name = $_POST['full_name'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if ($password === $password_confirm) {

        mysqli_query($dbconnect, "INSERT INTO `Students` (`id`, `FIO`, `login`, `email`, `password`) VALUES (NULL, '$full_name', '$login', '$email', '$password')");

        $_SESSION['message'] = 'Регистрация прошла успешно!';
        header('Location: ../index.php');


    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../register.php');
    }

?>

<?php

    session_start();
$dbhost = "localhost"; // Имя хоста БД
$dbusername = "setagi"; // Пользователь БД
$dbpass = "WQvcAc0N2w3Q"; // Пароль к базе
$dbname = "database"; // Имя базы
$charset = "utf8";

$dbconnect = mysqli_connect ($dbhost, $dbusername, $dbpass, $dbname);
$dbconnect->set_charset("utf8");

    $login = $_POST['login'];
    $password = $_POST['password'];

    $check_user = mysqli_query($dbconnect, "SELECT * FROM `Students` WHERE `login` = '$login' AND `password` = '$password'");
    if (mysqli_num_rows($check_user) > 0) {

        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "full_name" => $user['FIO'],
            "email" => $user['email']
        ];

        header('Location: https://www.gamedeva.ru/sait.php');

    } else {
        $_SESSION['message'] = 'Не верный логин или пароль';
        header('Location: ../index.php');
    }
    ?>
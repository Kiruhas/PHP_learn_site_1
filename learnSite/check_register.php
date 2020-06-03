<?php
    $conn_string = "host=localhost port=5438 dbname=phpLearn user=postgres password=dg4ao9hv";
    $db_connection = pg_connect($conn_string);

    $login = $_POST['login'];
    $pass = $_POST['password'];
    $pass_2 = $_POST['password_check'];

    $error = '';
    if (trim($login) == ''){
        $error = 'Введите логин!';
    } else if (trim($pass) == ''){
        $error = 'Введите пароль!';
    } else if (trim(strlen($pass) < 6)){
        $error = 'Пароль должен содержать минимум 6 символов!';
    } else if (trim($pass) != trim($pass_2)){
        $error = 'Пароли не совпадают!';
    }

    if ($error != ''){
        echo $error;
        pg_close($db_connection);
        exit;
    }

    $add_mas = [
        'Login' => trim($login),
        'Pass' => md5($pass),
        'Privilege' => 'Пользователь'
    ];

    $res = pg_insert($db_connection, 'Пользователи', $add_mas);
    pg_close($db_connection);
    if ($res){
        echo 'Пользователь успешно зарегистрирован!';
    } else {
        echo 'Неудача!';
    }
?>
<br>
<a href="index.php">На главную</a>
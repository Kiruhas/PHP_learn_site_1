<?php
    $conn_string = "host=localhost port=5438 dbname=ukkeMovies user=postgres password=dg4ao9hv";
    $db_connection = pg_connect($conn_string);

    $login = $_POST['login'];
    $pass = $_POST['password'];
    $pass_2 = $_POST['password_check'];
    $mail = $_POST['email'];

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
        'username' => trim($login),
        'password' => md5($pass),
        'privilege' => 'User',
        'mail' => $mail
    ];

    $res = pg_insert($db_connection, 'users', $add_mas);
    pg_close($db_connection);
    if (!$res){
        echo 'Неудача!';
        echo '<a href="../index.php">На главную</a>';
    }
?>
<br>

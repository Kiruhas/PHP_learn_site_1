<?php
    if ($_COOKIE['user'] == 'Да')
        setcookie('user', 'Да', time() - 3600, '/');
    else
        setcookie('user', 'Да', time() + 3600, '/');
    header('Location: /');

    $conn_string = "host=localhost port=5438 dbname=phpLearn user=postgres password=dg4ao9hv";
    $db_connection = pg_connect($conn_string);

    $login = $_POST['login'];
    $pass = $_POST['password'];

    $error = '';
    if (trim($login) == ''){
        $error = 'Введите логин!';
    } else if (trim($pass) == ''){
        $error = 'Введите пароль!';
    }

    if ($error != ''){
        echo $error;
        pg_close($db_connection);
        exit;
    }

    $pass = md5($pass);
    $query_text = "SELECT * FROM 'Пользователи' WHERE 'Login=' $login, 'Pass=' $pass";
    $query = pg_query($db_connection, $query_text);

    pg_close($db_connection);

    if ($res){
        setcookie('user', 'Да', time() + 3600, '/');
        setcookie('privelege', $res -> Privelege, time() + 3600, '/');
    } else {
        echo 'Такой пользователь не найден!';
    }
?>
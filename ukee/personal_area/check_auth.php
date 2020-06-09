<?php
    $conn_string = "host=localhost port=5438 dbname=ukkeMovies user=postgres password=dg4ao9hv";
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
    $query = pg_query_params($db_connection, 'SELECT id FROM users WHERE username = $1 AND password = $2', array($login, $pass));
    $res = pg_fetch_object($query);

    if ($res){
        setcookie('log', 'Да', time() + 3600, '/');
        setcookie('id', $res -> id, time() + 3600, '/');
        header('Location: /personal_area/lk.php');
    } else {
        echo 'Такой пользователь не найден!';
    }
    pg_close($db_connection);
?>
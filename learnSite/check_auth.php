<?php
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
    $query = pg_query_params($db_connection, 'SELECT * FROM users WHERE username = $1 AND pass = $2', array($login, $pass));
    $res = pg_fetch_object($query);

    if ($res){
        setcookie('user', 'Да', time() + 3600, '/');
        setcookie('privilege', $res -> privilege, time() + 3600, '/');
        header('Location: /');
    } else {
        echo 'Такой пользователь не найден!';
    }
    pg_close($db_connection);
?>
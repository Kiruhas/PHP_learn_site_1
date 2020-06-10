<?php
    $conn_string = "host=localhost port=5438 dbname=ukkeMovies user=postgres password=dg4ao9hv";
    $db_connection = pg_connect($conn_string);

    $login = $_POST['login'];
    $pass = $_POST['password'];

    if (trim($login) == ''){
        pg_close($db_connection);
        setcookie('error_lk', 'yes', time() + 3600, '/');
        header('Location: /personal_area/lk.php?er_auth=wrlog');
    } else if (trim($pass) == ''){
        pg_close($db_connection);
        setcookie('error_lk', 'yes', time() + 3600, '/');
        header('Location: /personal_area/lk.php?er_auth=wrpas');
    }

    $pass = md5($pass);
    $query = pg_query_params($db_connection, 'SELECT id FROM users WHERE username = $1 AND password = $2', array($login, $pass));
    $res = pg_fetch_object($query);

    if ($res){
        setcookie('log', 'Да', time() + 3600, '/');
        setcookie('id', $res -> id, time() + 3600, '/');
        header('Location: /personal_area/lk.php');
    } else {
        header('Location: /personal_area/lk.php?er_auth=wruser');
    }
    pg_close($db_connection);
?>
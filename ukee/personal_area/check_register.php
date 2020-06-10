<?php
    $conn_string = "host=localhost port=5438 dbname=ukkeMovies user=postgres password=dg4ao9hv";
    $db_connection = pg_connect($conn_string);

    $login = $_POST['login'];
    $pass = $_POST['password'];
    $pass_2 = $_POST['password_check'];
    $mail = $_POST['email'];

    if (trim($login) == ''){
        pg_close($db_connection);
        header('Location: /personal_area/lk.php?er_reg=wrlog');
    } else if (trim(strlen($pass) < 6)){
        pg_close($db_connection);
        header('Location: /personal_area/lk.php?er_reg=wrpas'); 
    } else if (trim($pass) != trim($pass_2)){
        pg_close($db_connection);
        header('Location: /personal_area/lk.php?er_reg=wrpas_each');
    } else if (trim($mail) == ''){
        pg_close($db_connection);
        header('Location: /personal_area/lk.php?er_reg=wrmail');
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

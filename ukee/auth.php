<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP Learning!</title>
    <?php
        $conn_string = "host=localhost port=5438 dbname=phpLearn user=postgres password=dg4ao9hv";
        $db_connection = pg_connect($conn_string);
    ?>
</head>
<body>
    <?php require "blocks/header.php" ?>
    <div class="container">
        <div class="form">
            <h2>Авторизация</h2>
            <form action="check_auth.php" method="post" class="add_form">
                <input type="text" name="login" class="add_form_input" placeholder="Введите логин">
                <input type="text" name="password" class="add_form_input" placeholder="Введите пароль">              
                <button type="submit" name="btn" class="add_form_submit">Войти</button>
            </form>
        </div>
    </div>
</body>
<?php 
    pg_close($db_connection);
?>
</html>
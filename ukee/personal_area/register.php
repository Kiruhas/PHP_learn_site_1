<?php
    $conn_string = "host=localhost port=5438 dbname=ukkeMovies user=postgres password=dg4ao9hv";
    $db_connection = pg_connect($conn_string);
?>

<?php require "../blocks/html_structure_open.php" ?>
<?php require "../blocks/header.php" ?>
    
<div class="container">
    <div class="form">
        <h2>Регистрация</h2>
        <form action="check_register.php" method="post" class="add_form">
            <input type="text" name="login" class="add_form_input" placeholder="Введите логин">
            <input type="text" name="password" class="add_form_input" placeholder="Введите пароль"> 
            <input type="text" name="password_check" class="add_form_input" placeholder="Повторите пароль">              
            <button type="submit" name="btn" class="add_form_submit">Зарегистрироваться</button>
        </form>
    </div>
</div>

<?php pg_close($db_connection) ?>
<?php require "../blocks/html_structure_close.php" ?>

